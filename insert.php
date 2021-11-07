<?php

$username =$_POST['username'];
$password =$_POST['password'];
$gender =$_POST['gender'];
$email =$_POST['email'];
$phone =$_POST['phone'];

if(!empty($username)||!empty($password)||!empty($gender)||!empty($email)||!empty($phone)){
      $host="localhost";
	  $dbUsername="root";
	  $dbPassword="";
	  $dbname="hostme_db";
	
	  $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
	
	  if (mysqli_connect_error()){
		  die('Connect Error('.mysqli_connect_errno().') '.mysqli_connect_error());
	  }else{
		  $SELECT = "SELECT email From accounts Where email= ? Limit 1";
		  $INSERT =  "insert into accounts(username, password,email,gender,phone) values(?,?,?,?,?)";
		  
		  $stmt = $conn -> prepare($SELECT);
		  $stmt -> bind_param("s",$email);
		  $stmt ->execute();
		  $stmt ->bind_result($email);
		  $stmt ->store_result();
		  $rnum = $stmt ->num_rows;
		  
		 if ($rnum==0){
			$stmt=$conn ->prepare($INSERT);
			$stmt ->bind_param("ssssi",$username,$password,$email,$gender,$phone );
		    $stmt ->execute();
			 
			echo "New record inserted successfully";
		 } else{
			 echo " email already exists";
		 } 
		  $stmt->close();
		  $conn->close();
	  }
} else{
	echo"All fields are required";
	die();
}
?>


<?php
include ('login_process.php');

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HostMe/login</title>
	<style type="text/css">
		
		body{
			background: url("Images/hotel.jpg");
			background-position: center;
		    position:relative;
			overflow: hidden;
			margin:0;
			height:100vh;
			width:100%;
			
			
			
		}
		.container{
			position:absolute;
			height:450px;
			width:250px;
			border:2px solid rgba(91,144,158,1.00) ;
			border-radius:15px;
			/*background:#3E3E67;*/
			background:#0C6580;
			text-align: center;
			opacity:0.8;
			padding-left:45px;
			padding-right:45px;
			box-shadow: 8.7px 7px .2px 1px rgb(0,0,0,0.2);
			bottom:10%;
			left:33%;
			
		}
		#username input{
			outline:0;
			width:98%;
			height:30px;
			margin-bottom:30px;
			margin-top:50px;
			border-style:none;
			opacity:1;
			border-radius:7px;
			padding-left:12px;
			padding-right:12px;
			font-size:15px;
			box-shadow: 8.7px 7px .2px 1px rgb(0,0,0,0.2);
			border:1px inset rgba(91,144,158,1.00) ;
		}
		#password input{
			outline:0;
			width:98%;
			height:30px;
			margin-bottom:30px;
			margin-top:10px;
			border-radius:7px;
			border-style:none;
			padding-left:12px;
			padding-right:12px;
			font-size:15px;
			box-shadow: 8.7px 7px .2px 1px rgb(0,0,0,0.2);  
			border:1px inset rgba(91,144,158,1.00) ;
		}
		.container input[type="submit"]{
			width:40%;
			height:auto;
			border-radius:10px;
			border-style:none;
			background: linear-gradient(to bottom , white, rgb(0,0,0,0.3));
		}
		.screen{
			width:100%;
			height:calc(100vh - 64px);
			background: #000000;
			opacity:0.8;
			position:absolute;
			top:64px;
			margin:0;
			background-size: cover;
			
		}
		.container input[type="submit"]{
		height:25px;
		margin-top:20px;
		font-weight:1000;
		padding-top:2px ;	
		padding-bottom:2px ;	
		}
		.container input[type="submit"]:hover{
		transform:scaleX(1.1);
			 
		}
		.container img{
			margin-top:30px;
			height:70px;
			width:70px;
		}
		a{text-decoration: none;
		 color:#fff;
		}
		cite:hover{
			cursor:pointer;
		}
		.header{
			width: 100%;
			height:60px ;
			background-color: #37759C;
			position: fixed;
			box-shadow:0px 4px 1px 1px rgba(255,255,255,0.5);
			border-bottom: rgba(92,154,180,1.00) solid 1px;
		}
		.logout:hover , {
			background:#FFFFFF;
			color:#000000;
				
		}
		
		.logout {
			width:100px;
			height:32px;
			position:absolute;
			right:43px;
			top: 10px;
			border: 2px solid white;
			border-radius: 15px;
			padding-left: 37px;
			padding-top: 10px;
			font-weight: 300;
		
		
	</style>
</head>
   
<body>
	<div class="header">
	<div class="icons"><img src="Icons/bx-menu.svg" height="48px" style="margin-left:15px; margin-top:6px" ></div>
		<div  class="logout" style=" font-size:18px; font-weight:500;"><a href="register.php">Register</a></div>
	</div>
	<div class="screen"></div>
	<form action="login_process.php" method="POST">
	 <div class="container">
		 <div><img src="Icons/user-circle-solid-72.png" alt="User" ></div>
	<div id="username">
	<input type="text" name="username" placeholder="Username"/> 
	</div>
	
	<div id="password">
		<input type="password" name="password" placeholder="Enter password...">
	</div>
	
	<div>
		<input type="submit" name="login" value="Login">
    </div>
		 <h4><a href="#">Forgot Password?</a></h4>
		 <hr width="89%" noshade-color="white" />
		<cite>HostMe Company Ltd.</cite> 
	</div> 
	</form>
	
</body>
</html>

<?php session_start(); 
if(empty($_SESSION['id'])):
header('Location:Login.php');
endif;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<style>
		.cd-popup-container{
			opacity:0;
			visibility:hidden;
			transition: opacity 0.3s 0s, visibility 0s 0.3s;
		}
		.cd-popup .is-visible{
			opacity:1;
			visibility:hidden;
			transition: opacity 0.3s 0s, visibility 0s 0.0s;
		}
		.cd-popup-container{
			transform: translateY(-40px);
			transition-property: transform;
			transition-duration: 0.3s;
		}
		is-visible .cd-popup-container{
			transform:translateY(0);
		}
	</style>

<body>
	<button>log out</button>
	<?php
        include('db_connection.php');
	    session_destroy();
	
	    echo 'meta http-equiv="refresh" content="2;url=Login.php">';
	    echo '<progress max=100><strong>Progress :60% done.</strong></progress><br>';
	    echo '<span>Logging out please wait!...</span>'
	 ?>
	<div class="cd-popup" role="alert">
		<div class="cd-popup-container"><p>Are you sure you want to log out </p></div>
		<ul>
		   <li><a href="Login.php">Yes</a></li>
			<li><a href="#0">No</a></li>
</body>
</html>
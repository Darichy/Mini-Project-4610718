<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HostMe/ Contacts</title>
</head>
	<style>
		.header{
			width: 100%;
			height:68px;
			background-color: #37759C;
			position: fixed;
			box-shadow:0px 4px 1px 1px rgba(255,255,255,0.5);
			border-bottom: rgba(92,154,180,1.00) solid 1px;
		}
			body{
			background:url("Images/index.jpg") ;
			position:relative;
			margin: 0;
			padding: 0;
			font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";

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
		}
		.logout:hover {
			background:#FFFFFF;
			color:#000000;
				
		}
		.logout a{
			text-decoration: none;
			color:white;
		}
			a{
			color:white;
			text-decoration:none;
		}
		.head{
			margin-right:60%;
            float:right;
			margin-top:20px;
		}
		.head ul li{
			color:#FFF;
			display:inline;
			list-style-type: none;
			font-weight:700;
			margin-left:40px;
			font-size:20px;
		}
		.active{
			border-bottom-right-radius:8px;
			border-bottom:4px solid #78F1F3;
			cursor: pointer;
		}
		.about{
			position:absolute;
			background:#fff;
			border-radius:5px;
			top:200px;
			left:480px;
			width:450px;
			height:200px;
			padding:15px;
		}
		.about h3{
			margin-left:150px;
		}
		.media{
			margin-top:80px;
			margin-left:170px;
			
		}
		.media img{
			margin-left:7px;
		}
		#arr{display:flex;
		font-weight:600px;
		}
		.side-nav{
			height:100%;
			width:0px;
			position:fixed;
			z-index:1;
			top:0;
			left:0;
			background-color:#111;
			opacity:0.9;
			overflow-x:hidden;
			padding-top:60px;
			border-right:3px solid #2EC1E0;
			border-top-right-radius: 15px;
			border-bottom-right-radius: 9px;
		}
		.side-nav a{
			display:block;
			margin-top:7px;
			font-size:18px;
			margin-left:7px;
			padding:17px;
		}
		.side-nav .btn-close{
			margin-left:230px;
			font-size:20px;
			line-height:10px;
		}
		.side-nav a:hover{
			background:white;
			color:black;
			border-radius:4px;
			transition:all 0.4s ease;
		}
	</style>

<body>
		<div class="header">
			<a  class="logout" href="Login.php">Log out</a>
	
		<div class="head">
		  <ul>
			<li><a href="home.php">Home</a></li>
			  <li><a href="About.php">About </a></li>
			<li class="active"><a href="contact.php"></a>Contact Us</li>
			<li><a href="News.php">News</a></li></ul>
		</div>
	<div class="icons"><img src="Icons/bx-menu.svg" height="48px" style="margin-left:15px; margin-top:6px; cursor:pointer" onClick="openSideMenu()" ></div>
</div>
	<div class="about">
	<h3> Contact HostMe </h3>			
		<div id="arr"><img src="Icons/bxs-phone.svg" alt=""><b>: +233 56 567 6738 / +233 23 908 9087</b> </div>		
		<div id="arr"><img src="Icons/bxs-message.svg" alt=""><b>: hostmeweb@yahoo.org</b> </div>		

	<div class="media"><img src="Icons/bxl-facebook-circle.svg" alt=""><img src="Icons/bxl-instagram.svg" alt="">
		<img src="Icons/bxl-twitter.svg" alt="">
		</div>			
	</div>
	</div>
	<div id="side-menu" class="side-nav">
	<a href="#" class="btn-close" onclick="closeSideMenu()">&times;</a>	
	<a href="#">Home </a>
	<a href="About.php">About </a>
	<a href="contact.php">Contact Us </a>	
	<a href="News.php">News </a>
	</div>
	
<script>
  function openSideMenu(){
document.getElementById("side-menu").style.width='280px';  
	  
  }	  

function closeSideMenu(){
document.getElementById("side-menu").style.width='0';  
document.getElementById("main").style.marginLeft='0';	
	  
  }
</script>
	
</body>
</html>
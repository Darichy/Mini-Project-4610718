<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HostMe/About</title>
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
			left:320px;
			width:800px;
			height:400px;
			padding:15px;
		}
		.about h3{
			margin-left:300px;
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
</head>

<body>
			<div class="header">
			<a  class="logout" href="index.php">Log out</a>
	
		<div class="head">    
		  <ul>
			<li><a href="home.php">Home</a></li>  
			<li ><a href="About.php" >About</a></li>
			<li><a href="contact.php">Contact Us</a> </li>
			  <li class="active"><a href="News.php">News</a></li>
		</ul>
		  
		    
	      
		</div>
	
	<div class="icons"><img src="Icons/bx-menu.svg" height="48px" style="margin-left:15px; margin-top:6px; cursor:pointer" onClick="openSideMenu()" ></div>
	</div>
	<div class="about">
	<h3> Latest News </h3>			
	<p style="line-height:1.8em;">HostMe Company Limited is a company limited by shares set up to assist to venture in various walks of life
	Some include hotels , shipping &amp; delivery businesses , IT training collloge amongst others which include the HostMe 
	website set up to assist at the moment pupils and management of knust - Kwame Nkrumah University of Science and Technology to get whatever information they want pertaining to hostels in the school's environs including hostel prices , exact location security level as well as people's views about each hostel.<br> This initiative had sought to curb time students spend to go in search of hostels as they can now search them in the comforts of their rooms and take any decision whatsoever- as 
	whether they want to accomodated there or not amongst other reasons.</p>	
				
				
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
<?php session_start(); 
if(empty($_SESSION['id'])):
header('Location:Login.php');
endif;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome To HostMe</title>
</head>
	<style>
		body{
			background:url("Images/index.jpg") ;
			position:relative;
			margin: 0;
			padding: 0;
			font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";

		}
				a{
			color:white;
			text-decoration:none;
		}
		.header{
			width: 100%;
			height:68px;
			background-color: #37759C;
			position: fixed;
			box-shadow:0px 4px 1px 1px rgba(255,255,255,0.5);
			border-bottom: rgba(92,154,180,1.00) solid 1px;
		}
		.center{
			position:absolute;
			top:300px;
			left:460px;
			
		}
		.center select{
			width:450px;
			height:50px;
			padding-left:30px;
			font-size:18px;
			box-shadow:1px 2.5px 1.7px 1px rgba(255,255,255,0.5);
			border-style:inset;
            border-radius:10px; 
			opacity:0.95;
			
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
		.log img{
			width:250px;
			height:100px;
			Margin-left:520px;
			margin-top:0px;
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
			border-bottom-right-radius:15px;
			border-bottom:4px solid #78F1F3;
			cursor: pointer;
		}
		
		.write{
			position:fixed;
			top:20%;
			left:30%;
			font-size:25px;
			font-weight:500;
			width:500px;
			height:auto;
			color:white;
			text-align:center;
		}
		
@keyframes fadeOut {
	     
    100% {
        
        visibility: hidden;
    }
}
		.loader div{
			position: fixed;
			top:280px;
			left:650px;
			color:white;
			font-size:30px;
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
	<script type="text/javascript">
	      function la(src){
				  window.location = src;
			  }
		  
	</script>

<body>
	
	<div class="header">
			<a class="logout" href="index.php" onclick="return confirm('Are you sure you want to log out?');">Log out</a>
	
		<div class="head"><ul>
			<li class="active">Home </li> 
			<li><a href="About.php">About</a></li>
			<li><a href="Contact.php">Contact Us</a></li>
			<li><a href="News.php">News</a></li></ul>
		</div>
	<div class="icons"><img src="Icons/bx-menu.svg" height="48px" style="margin-left:15px; margin-top:6px; cursor:pointer" onclick="openSideMenu()" ></div>
</div>	
	<div class="write"> You are welcome <br> please select any area of your choice from the drop menu below </div>
	
		<div class="center"><select name="Area"  onChange="la(this.value)" >
			<option disabled selected>Where would you like to be accomodated?</option>
			<option value="Ayeduase.php">Ayeduase</option>
			<option value="Bomso.php">Bomso</option>
			<option value="Kotei.php">Kotei</option>
			<option value="NewSite.php">New Site</option>
			<option value="Boadi.php">Boadi</option>
			</select></div>
	

	<script>
	window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});
		</script>
	
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
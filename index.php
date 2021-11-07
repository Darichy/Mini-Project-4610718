
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome To HostMe</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	<style>
		body{
			background:white ;
			position:relative;
			margin: 0;
			padding: 0;
			font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
            min-height: 100vh;
			overflow:hidden;
		}
		a{
			color:white;
			text-decoration:none;
		}
		.header{
			width: 100%;
			height:68px ;
			background-color: #37759C;
			box-shadow:0px 4px 1px 1px rgba(255,255,255,0.5);
			border-bottom: #2BE8EB solid 1px;
			
		}
		.header li:hover{
			background: #ddd;
			color:#fff;
			border-radius:4px;
			transition:all 0.2s ease-in-out;
		}
		.center{
			position:absolute;
			top:365px;
			left:250px;
			
		}
		.center select{
			width:900px;
			min-height:80px;
			padding-left:30px;
			font-size:18px;
			box-shadow:1px 2.5px 1.7px 1px rgba(255,255,255,0.5);
			border-style:inset;
            border-radius:10px; 
			opacity:0.95;
			border:3px solid #2EC1E0;
		}
		.logout{
			float:right;
			margin-top:6px;
		}
		
		#logo{
			width:100%;
			margin-top:30px;
			
		}
		#logo img {
			width:100%;
			height:290px;
			border-bottom:1px solid white;
		}
		#screen{
			background:rgba(0,0,0,0.4);
			position:absolute;
			width:100%;
			height:246px;
			top:74px;
		}
		.write{
			position:absolute;
			width:65%;
			height:200px;
			top:74px;
			left:17%;
			color:white;
			font-size:40px;
			padding:10px;
			text-align: center;
			line-height: 70px;
		}
		#alert{
			display:none;
			position:fixed;
			top:40%;
			left:50%;
			background:#fff;
			border-radius:5px;
			height:100px;
			width:270px;
			padding:25px;
			border:1px solid blue;
			
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
		
#dialogoverlay{
	display: none;
	opacity: .8;
	position: fixed;
	top: 0px;
	left: 0px;
	background: #FFF;
	width: 100%;
	z-index: 10;
}
#dialogbox{
	display: none;
	position: fixed;
	background: #000;
	border-radius:7px; 
	width:550px;
	z-index: 10;
}
#dialogbox > div{ background:#FFF; margin:8px; }
#dialogbox > div > #dialogboxhead{ background: #666; font-size:19px; padding:10px; color:#CCC; }
#dialogbox > div > #dialogboxbody{ background:#333; padding:20px; color:#FFF; }
#dialogbox > div > #dialogboxfoot{ background: #666; padding:10px; text-align:right; }
		
		.bttn button{
			position:fixed;
			top:65%;
			left:39%;
			height:50px;
			width:200px;
			margin-right: 20px;
			background:#2EC1E0;
			border-radius:7px;
			box-shadow: 2px 2px 2px 2px #656A64;
			color:white;
			font-size: 19px;
			font-weight: 500;
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
		.tip{
			position:fixed;
			top:30px;
			left:87%;
			color:black;
			font-weight:600;
			font-size:17px;
			background:white;
			padding:7px;
			border-radius:4px;
			
		}
		.logout:hover .tip{
			visibility: visible;
			transform: visibility 0.7s ease;
		}
	</style>
	
	<script>
function CustomAlert(){
    this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        dialogbox.style.left = (winW/2) - (550 * .5)+"px";
        dialogbox.style.top = "200px";
        dialogbox.style.display = "block";
        document.getElementById('dialogboxhead').innerHTML = "Note";
        document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.ok()">OK</button>';
    }
	this.ok = function(){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
}
var Alert = new CustomAlert();
		
	</script>	

	<div class="header">
			<div  class="logout"><a href="Login.php"><img src="Icons/user-circle-regular-96.png" width="52px"></a>
	</div>
		<div class="head"><ul>
			<li class="active">Home </li> 
			<li><a href="About.php">About</a></li>
			<li><a href="contact.php">Contact Us</a></li> </ul>
		</div>
	<div><img src="Icons/bx-menu.svg" id="icons" height="48px" style="margin-left:15px; margin-top:6px; cursor:pointer;" onclick="openSideMenu()"> </div>
		
</div>
	<div id="side-menu" class="side-nav">
	<a href="#" class="btn-close" onclick="closeSideMenu()">&times;</a>	
	<a href="#">Home </a>
	<a href="About.php">About </a>
	<a href="contact.php">Contact Us </a>	
	<a href="News.php">News </a>
	</div>
	
	
	
	
	<div id="main">
	<div id="screen"></div>
	<div class="write">Welcome to HostMe<br> A digital platform made available for all KNUST students to scout hostels in the comforts of the rooms 
	</div>
	<div id="logo"><img src="Images/knust.webp" alt="knust"></div>
	
		<div class="center"><select name="Area" id="" onclick="showAlert()" >
			<option  value="placeholder">Where would you like to be accomodated?</option>
			<option value="Ayeduase">Ayeduase</option>
			<option value="Bomso">Bomso</option>
			<option value="Kotei">Kotei</option>
			<option value="New Site">New Site</option>
			<option value="Boadi">Boadi</option>
			</select></div>
	<div class="bttn"><button class="btn" onclick="Alert.render('You have to sign in first.')"> Let's go</button></div>
	<div class="tip"> Login &amp; Register</div>
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
	<div id="dialogoverlay">
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
	</div>
	</div>
	
	
	
	
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HostMe/Adom bi Hostel</title>
	<style>
		body{
			background:#fff;
			position:relative;
			margin: 0;
			padding: 0;
			font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
            overflow: scroll;
		}
		a{
			color:white;
			text-decoration:none;
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
		.header{
			width: 100%;
			height:68px;
			background-color: #37759C;
			position: fixed;
			box-shadow:0px 4px 1px 1px rgba(255,255,255,0.5);
			border-bottom: rgba(92,154,180,1.00) solid 1px;
			top:0;
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
		.slider-box {
    width     : 100%;
    max-height: 350px;
    position  : relative;
	margin-top:69px;		
    overflow  : hidden;
    
}
		h1{margin-top:10px}		

#slider {
    width     : 100%;
    display   : inline-flex;
    transition: 0.7s;
}

#slider img {
    width: 100%;
}

.indicators {
    position : absolute;
    left     : 50%;
    bottom   : 20px;
    transform: translateX(-50%);
}

.indicators span {
    display      : inline-block;
    width        : 15px;
    height       : 15px;
    border-radius: 50%;
    background   : rgba(255, 255, 255, 0.5);
    cursor       : pointer;
}

.slider-box .active {
    background: #ffff !important;
		}.btn{
			float:right;
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
		.rev{
			height:200px;
			width:25%;
			border:5px solid antiquewhite;
			border-radius:7px;
			padding:10px;
			position:relative;
		}
		.rev h3, small{
			color:rgba(129,91,154,1.00);
		}
		
		
		/* The alert message box */
.alert {
  padding: 20px;
  background-color: #FFFFFF; /* Red */
  color: black;
  margin-bottom: 15px;
 height:0px;
	width:400px;
	border:1px solid #74F7F4;
	position:absolute;
	top:490px;
	left:1050px;
	box-shadow:0px 4px 1px 1px rgba(0,0,0,0.5);
	border-radius:10px;
	visibility:hidden;
	transition: all 0.3s ease;
}

		
.alert.active{
height:150px;
visibility: visible;
}

textarea{
  height:200px;
	width:600px;  
	resize:none;
	background:rgba(231,231,231,1.00);
	border-radius:15px;
	border-bottom-left-radius: 0;
	border-bottom-right-radius:0;	
	font-size: 19px;
	color:black;
	margin-top:30px;
	border:2.5px solid #74F7F4;
	padding-top:9px;
	margin-left:30px;
	display:block; 
}
		.comment{
			position:absolute;
			top:680px;
			left:70px;
		}
		#com{
			float:right;
			height:50px;
			width:610px;
			background:rgba(0,0,0,1.00);
			
			border-bottom-left-radius:15px;
			border-bottom-right-radius:15px; 
			color:white;
			font-size: 19px;
			font-weight: 500;
		}
		#com:hover{
			background:#2EC1E0;
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
		.rev{
			height:200px;
			width:25%;
			border:5px solid antiquewhite;
			border-radius:7px;
			padding:10px;
			position:relative;
		}
		.rev h3, small{
			color:rgba(129,91,154,1.00);
		}
		
		
		/* The alert message box */
.alert {
  padding: 20px;
  background-color: #FFFFFF; /* Red */
  color: black;
  margin-bottom: 15px;
 height:0px;
	width:400px;
	border:1px solid #74F7F4;
	position:absolute;
	top:490px;
	left:1050px;
	box-shadow:0px 4px 1px 1px rgba(0,0,0,0.5);
	border-radius:10px;
	visibility:hidden;
	transition: all 0.3s ease;
}

		
.alert.active{
height:150px;
visibility: visible;
}

textarea{
  height:200px;
	width:600px;  
	resize:none;
	background:rgba(231,231,231,1.00);
	border-radius:15px;
	border-bottom-left-radius: 0;
	border-bottom-right-radius:0;	
	font-size: 19px;
	color:black;
	margin-top:30px;
	border:2.5px solid #74F7F4;
	padding-top:9px;
	margin-left:30px;
	display:block; 
}
		.comment{
			position:absolute;
			top:680px;
			left:70px;
		}
		#com{
			float:right;
			height:50px;
			width:610px;
			background:rgba(0,0,0,1.00);
			
			border-bottom-left-radius:15px;
			border-bottom-right-radius:15px; 
			color:white;
			font-size: 19px;
			font-weight: 500;
		}
		#com:hover{
			background:#2EC1E0;
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
	
	<div class="slider-box">
        <div id="slider">
            <img src="Images/Hostel/download (1).jfif" alt="">
            <img src="Images/Hostel/download.jfif" alt="">
            <img src="Images/Hostel/download (4).jfif" alt="">
            <img src="Images/Hostel/download (3).jfif" alt="">
			 <img src="Images/Hostel/download (1).jfif" alt="">
            <img src="Images/Hostel/download.jfif" alt="">
            <img src="Images/Hostel/download (4).jfif" alt="">
            <img src="Images/Hostel/download (3).jfif" alt="">
			 <img src="Images/Hostel/download (1).jfif" alt="">
            <img src="Images/Hostel/download.jfif" alt="">
            <img src="Images/Hostel/download (4).jfif" alt="">
            <img src="Images/Hostel/download (3).jfif" alt="">
			 <img src="Images/Hostel/download (1).jfif" alt="">
            <img src="Images/Hostel/download.jfif" alt="">
            <img src="Images/Hostel/download (4).jfif" alt="">
            <img src="Images/Hostel/download (3).jfif" alt="">
			 <img src="Images/Hostel/download (1).jfif" alt="">
            <img src="Images/Hostel/download.jfif" alt="">
            <img src="Images/Hostel/download (4).jfif" alt="">
            <img src="Images/Hostel/download (3).jfif" alt="">
			<img src="Images/Hostel/download.jfif" alt="">
            <img src="Images/Hostel/download (4).jfif" alt="">
            <img src="Images/Hostel/download (3).jfif" alt="">
        </div>
        <div class="indicators">
            <span id="btn1" class="active"></span>
            <span id="btn2"></span>
            <span id="btn3"></span>
            <span id="btn4"></span>
        </div>
    </div>

   
    <script>

        var slide = document.getElementById("slider");
        var btn1 = document.getElementById('btn1');
        var btn2 = document.getElementById('btn2');
        var btn3 = document.getElementById('btn3');
        var btn4 = document.getElementById('btn4');

        btn1.onclick = function () {
            slide.style.transform = "translateX(0px)";
            btn1.classList.add('active');
            btn2.classList.remove('active');
            btn3.classList.remove('active');
            btn4.classList.remive('active');
        };
        btn2.onclick = function () {
            slide.style.transform = "translateX(-100%)";
            btn1.classList.remove('active');
            btn2.classList.add('active');
            btn3.classList.remove('active');
            btn4.classList.remove('active');
        };
        btn3.onclick = function () {
            slide.style.transform = "translateX(-200%)";
            btn1.classList.remove('active');
            btn2.classList.remove('active');
            btn3.classList.add('active');
            btn4.classList.remove('active');
        };
        btn4.onclick = function () {
            slide.style.transform = "translateX(-300%)";
            btn1.classList.remove('active');
            btn2.classList.remove('active');
            btn3.classList.remove('active');
            btn4.classList.add('active');
        };

    </script>
	
	<h1>Evandy Hostel</h1>
<p>An affordable hostel located at Bomso, Kumasi, Evandy hostel has a conducive atmosphere for learning. Students like this hostel due to its closeness to the Ayeduase gate.</p> <button class="btn"> Contact Hostel</button>
	<div class="alert">
  Telephone: 024567888<br>
  E-mail: <a href="Gmail.com" target="_blank"> adombihostel@gmail.com </a><br>
  P.O.Box 34 , Kotei<br>
Bank: 3434542322233 GCB Ayeduse  
  
</div>
	<h2>Room Types &amp; Hostel Prices</h2>
<h4>Pricing is on an annual basis.</h4>
<ul>
<li>1 in a room- GHC 10,000.00, GHC 8,000.00</li>

<li>2 in a room- GHC 4,000.00, GHC 5,000.00</li>

<li>3 in a room- GHC 4,000.00 GHC 2,700.00</li>

<li>4 in a room- GHC 2,100.00 , GHC 2,700.00</li>
</ul>
<h3>Facilities</h3>	
<ul style="margin-bottom:330px">	
<li>Fridge</li>
<li>TV</li>
<li>AC</li>
<li>Tables and Chairs</li>
<li>Study room</li>	
</ul>
<div class="comment">	
<Textarea placeholder="Any comment about this hostel?"></Textarea>
<button id="com">Submit comment</button>
</div>

<h2>Reviews</h2>
<div style="display:flex">
	<div class="rev">
		<h3>Amanda</h3><small style="position:absolute; top:13%; right:9px;" >1:07pm | January 17, 2020</small>
	     <p>This hostel is the coolest... I was there trust me </p>
	</div>
	<div class="rev">
		<h3>Jonelle55@gmail.com</h3><small style="position:absolute; top:13%; right:9px;" >12:39pm | July 19, 2019</small>
	     <p>The best there is the best there will be trust me..Unfortunately I've graduated I'd stayed there forever but i promise to let my kids be accomodated in this hostel when they gain admission into knust</p>
	</div>
	<div class="rev">
		<h3>Emmanuel</h3><small style="position:absolute; top:13%; right:9px;" >12:39pm | July 19, 2019</small>
	     <p>Not everything in this hostel is perfect but it's not a bad place of accomodation tho ... The evening porter is so annoying </p>
	</div>
</div>
	
Location
Bomso, Kumasi


			<div class="header">
			<div  class="logout" onclick="return confirm('Are you sure you want to log out?');" style="cursor:pointer">Log out</a>
	</div>
		<div class="head"><ul>
			<li class="active">Home </li> 
			<li><a href="About.php">About</a></li>
			<li><a href="contact.php">Contact Us</a></li> </ul>
		</div>
	<div class="icons"><img src="Icons/bx-menu.svg" height="48px" style="margin-left:15px; margin-top:6px;  cursor:pointer;" onclick="openSideMenu()"></div>
				
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
</div>
</body>
</html>
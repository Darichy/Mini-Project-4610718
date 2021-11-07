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
			background:linear-gradient(to right ,#FFFFFF, #CDEEFF); 
			position:relative;
			margin: 0;
			padding: 0;
			font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
            overflow:scroll;
		}
		.header {
			width: 100%;
			height:170px ;
			background-color: #37759C;
			position: fixed;
			box-shadow:0px 4px 1px 1px rgba(255,255,255,0.5);
			border-bottom: rgba(92,154,180,1.00) solid 1px;
			top:0;
		}
		
		.icons{
			margin-top:7px;
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
		
		.items{
			height:210px;
			width: 70%;
			background:#FDFCFC;
			border:2px solid #37759C;
			margin-top:18px;
			transition: margin-top 0.25s;
			margin-left:50px;
			border-Radius:10px;
			box-shadow:2px 2px 2px 2px black;
			position:relative;
			
		}
		
		.items:hover{
			margin-top: 25px;
		}
		.items small{
			float:right;
			margin-right:5px;
		}
		.items span{
			float:left;
			font-weight:730;
			font-size:20px;
			margin-left:25px;
			
		}
				a{
			color:white;
			text-decoration:none;
		}
		.items{
			display:block;
			text-decoration:none;
			color:#000;
			position:relative;
		}
		.loc{
			height:40px;
			width:210px;
			border:3px solid white;
			color:black;
			position:inherit;
			top:105px;
			padding-bottom:7px;
			border-radius:5px;
			background:white;
			left:100px;
			display:flex;
		}
		.locs{
			position:absolute;
			top:5px;
			left:5%;
			
		}
		.locs b{
			color:white;
			position:inherit;
			top:75px;
			border-radius:5px;
			left:100px;
			font-size:23px;
			float:right;	
		}
		h1{
			color:#fff;
			position:absolute;
			left:610px;
			top:89px;
			
		}
		
		a img{
			position:absolute;
			margin-left:20px; 
			display:block;
			width:250px;
			height:170px;
			top:25px;
			left:5px;
			border-radius:3px;
		}
		.loc p{
			font-size:21px;
			margin-left:10px;
			margin-top:10px;
		}
		.list{
			margin-top:250px;
			margin-left:200px;
		}
		.icons{
			width:48px;
		}
		 .head{
			margin-left:15%;
            float:left;
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
		.acc {
			position: absolute;
			left:260px;
			top:101px;
		}
		.acc img{
			width:24px;
			height:24px;
		}
	</style>
	

<body>

	<div class="list">
	
	
	<a href="Adom Bi.php" class="items" >
	<span>Adom bi hostel</span><small>3.5km from campus</small>	
	<div><img src="Images/Hostel/adom-bi-hostel.webp"></div>
		<div style="display:flex"><span style="height:19px; margin-top:21px; margin-left:120px;">Ratings</span> <span style="height:19px; border:3px solid orange; background:orange; color:white; border-radius:5px; margin-top:21px;">7.8</span></div>
		<div style="margin-top:10px; margin-left:300px;"> An affordable hostel located at Ayeduase, Kumasi, Adom bi hostel has a conducive atmosphere for learning. Students like this hostel due to its closeness to the Ayeduase gate. </div>
		<div class="acc"><img src="Icons/wifi-regular-24.png" alt=""><b>Wi-Fi</b></div>
	<a>
		
	<a href="happyFamily.php" class="items" >
	<span>Happy Family hostel</span><small>154.5km from campus</small>	
	<div><img src="Images/Hostel/IMG_1586-281.webp"></div>
		<div style="display:flex"><span style="height:19px; margin-top:21px;margin-left:78px; ;">Ratings</span> <span style="height:19px; border:3px solid orange; background:orange; color:white; border-radius:5px; margin-top:21px;">6.5</span></div>
		<div style="margin-top:10px; margin-left:300px;"> An affordable hostel located at Ayeduase, Kumasi, Adom bi hostel has a conducive atmosphere for learning. Students like this hostel due to its closeness to the Ayeduase gate. </div>
	<a>
		
	<a href="NMplaza.php" class="items" >
	<span>Nyame Mireku</span><small>5.8km from campus</small>	
	<div><img src="Images/Hostel/nyame-mireku.jpg"></div>
	  <div style="display:flex"><span style="height:19px; margin-top:21px; margin-left:110px;">Ratings</span> <span style="height:19px; border:3px solid orange; background:orange; color:white; border-radius:5px; margin-top:21px;">7.1</span></div>
		<div style="margin-top:10px; margin-left:300px;">	
		Nyame Mireku is also known by some as NM Plaza. This hostel is designed in flats. About 3 or four rooms make up a flat and all those rooms share a hall, kitchen and balcony. Its the perfect place to stay with your friends.</div>
	<a>
		
	<a href="" class="items" >
	<span>FrontLine Court </span><small>154.5km from campus</small>	
	<div><img src="Images/Hostel/FLCourt.jpg"></div>
		 <div style="display:flex"><span style="height:19px; margin-top:21px; margin-left:110px;">Ratings</span> <span style="height:19px; border:3px solid orange; background:orange; color:white; border-radius:5px; margin-top:21px;">7.1</span></div>
		<div style="margin-top:10px; margin-left:300px;">	
		Nyame Mireku is also known by some as NM Plaza. This hostel is designed in flats. About 3 or four rooms make up a flat and all those rooms share a hall, kitchen and balcony. Its the perfect place to stay with your friends.</div>
	<a>
	<a>
		
	<a href="" class="items" >
	<div><span>Adom bi hostel</span><small>154.5km from campus</small></div>	
	<div><img src="Images/index.jpg"></div>
		 <div style="display:flex"><span style="height:19px; margin-top:21px; margin-left:110px;">Ratings</span> <span style="height:19px; border:3px solid orange; background:orange; color:white; border-radius:5px; margin-top:21px;">7.1</span></div>
		<div style="margin-top:10px; margin-left:300px;">	
		Nyame Mireku is also known by some as NM Plaza. This hostel is designed in flats. About 3 or four rooms make up a flat and all those rooms share a hall, kitchen and balcony. Its the perfect place to stay with your friends.</div>
	<a>
	</a>
		
	<a href="" class="items" >
	<span>Adom bi hostel</span><small>154.5km from campus</small>	
	<div><img src="Images/index.jpg"></div>
		 <div style="display:flex"><span style="height:19px; margin-top:21px; margin-left:110px;">Ratings</span> <span style="height:19px; border:3px solid orange; background:orange; color:white; border-radius:5px; margin-top:21px;">7.1</span></div>
		<div style="margin-top:10px; margin-left:300px;">	
		Nyame Mireku is also known by some as NM Plaza. This hostel is designed in flats. About 3 or four rooms make up a flat and all those rooms share a hall, kitchen and balcony. Its the perfect place to stay with your friends.</div>
	<a>
	</a>
	</div>	
	
		
			<div class="header">
			<div  class="logout"><a href="index.php">Log out</a>
	</div>
		<div class="head"><ul>
			<li class="active">Home </li> 
			<li><a href="About.php">About</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="News.php">News</a></li></ul>
		</div>
	<div class="icons"><img src="Icons/bx-menu.svg" height="48px" style="margin-left:15px; margin-top:6px" ></div>
		<div class="locs">	
		<b>Location</b>		
		<div class="loc"><img src="Icons/search-regular-36.png" style="margin-top:0px;"><p>Kotei</p></div>
		</div>
</div>
	
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</body>
</html>
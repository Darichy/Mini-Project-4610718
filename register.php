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
		.slide{
			border: #fff 1px solid;
		}
		.container{
			position:absolute;
			height:550px;
			width:350px;
			border:2px solid rgba(91,144,158,1.00) ;
			border-radius:15px;
			/*background:#3E3E67;*/
			background:#0C6580;
			/*text-align: center;*/
			opacity:0.8;
			padding-left:45px;
			padding-right:45px;
			box-shadow: 8.7px 7px .2px 1px rgb(0,0,0,0.2);
			bottom:5%;
			left:33%;
			
		}
		#username input, input[name="phone"]{
			outline:0;
			width:300px;
			height:25px;
			margin-bottom:30px;
			margin-top:5%;
			border-style:none;
			opacity:1;
			border-radius:7px;
			padding-left:12px;
			padding-right:12px;
			font-size:15px;
			box-shadow: 8.7px 7px .2px 1px rgb(0,0,0,0.2);
			border:1px inset rgba(91,144,158,1.00) ;
		}
		#password input,#email input  {
			outline:0;
			width:280px;
			height:25px;
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
			width:36%;
			height:auto;
			border-radius:10px;
			border-style:none;
			background: linear-gradient(to bottom , white, rgb(0,0,0,0.3));
			margin-right:7px;
		}
		.screen{
			width:100%;
			height:calc(100vh - 64px);
			background: #000000;
			opacity:0.8;
			position:absolute;
			top:79px;
			margin:0;
			background-size: cover;
			
		}
		.container input[type="submit"]{
		height:25px;
		margin-top:20px;
		font-weight:1000;
		padding-top:2px ;	
		padding-bottom:2px ;
        float:right;
		}
		.container input[type="submit"]:hover{
		transform:scaleX(1.1);
			 
		}
		.container img{
			position:absolute;
			left:45%;
			margin-top:1px;
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
		}
		.slidecase{
			height:360px;
			width:350px;
			margin-top:5px;
			overflow: hidden;
			position:relative;
			position:absolute;
			bottom:20px;
		}
		
	
		#gender{
			margin-top: 10px;
			margin-left: 20px;
			color:#fff;
		}
		
		
		.navigation{
			position: absolute;
			bottom:20px;
			left:50%;
			transform: translateX(-50%);
			display:flex;
		}
		.bar{
			width:60px;
			height:18px;
			border:2px solid #fff;
			margin:6px;
			cursor:pointer;
			color:#fff;
			padding-top:2px;
			padding-left: 20px;	
			font-weight: 900;
			font-size: 18px;
			padding-right:0px;
			
		}
		input[name="r"]{
			position: absolute;
			visibility:hidden;
			transistion:0.4s;
		}
		.bar:hover{
			background: #fff;
			color: #000;
		}
		.slides{
			padding-top:30px;
			width:200%;
			height:100%;
			display:flex;
			border:none;
		}
		.slide{
			width:50%;
			transition:0.6s;
			border:none;
		}
		/*.m{
			width:100%;
			height: 100%;
		}*/
		#r1:checked ~ .s1{
			margin-left:0;
		}
		#r2:checked ~ .s1{
			margin-left:-50%;
		}
		
	</style>
	 
</head>
   
<body>
	<div class="header">
	<div class="icons"><img src="Icons/bx-menu.svg" height="48px" style="margin-left:15px; margin-top:6px" > </div>
		<div  class="logout" style=" font-size:18px; font-weight:500;"><a href="Login.php">Login</a></div>
	</div>
	<div class="screen"></div>
	 
		<div class="container">
		
			
			<form action="insert.php" method="POST">
						
					 <div><img src="Icons/user-circle-solid-72.png" alt="User" ></div>
					<p style="color:#fff; font-weight:400; font-size:25px; position:absolute; top:101px; left:136px">Sign Up on HostMe</p>
							<hr style="position:absolute;
							top:101px; left:78px" width="64%" noshade-color="#fff">
				    <div class="slidecase">
					<div class="slides">
						<input type="radio" name="r" id="r1" checked>
						<input type="radio" name="r" id="r2">
                      <div class="slide s1">
					  <div class="m">
					<div id="username">
					<input type="text" name="username" placeholder="Username"/> 
					</div>

					<div id="email">
						<input type="email" name="email" placeholder="Enter email" required>
					</div>

						 <div id="password">
						<input type="text" name="password" placeholder="Enter password..." required>
					</div>
						 <div id="password">
						<input type="text" name="c-password" placeholder="Confirm password..." required>
					</div>
						 

                  </div>
				</div>
						
			<!--<div class="slide s1"> -->
				<div class="m">
				<div><input type="text" name="phone" placeholder="Phone number" required></div>
				 <div id="gender">
						<p>Gender</p> 
						<input type="radio" name="gender" value="Male">Male<br/>
						<input type="radio" name="gender" value="Female">Female
				 </div>
					<div>
				<input type="submit" name="Done" value="Done">
			</div>			
			<div text-align="center" style="margin-top:40px">
				<cite >HostMe Company Ltd.</cite> 
			</div>
			 </div>
			</div>
				<div class="navigation">		
					<label for="r1" class="bar">&lt;</label>
					<label for="r2" class="bar">&gt;</label>
				</div>	
						
			
		</div>
		</div>				
	</form>
	
		
	
	
</body>
</html>

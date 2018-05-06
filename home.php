<!DOCTYPE html>
<html>
<head>

	<title> Entrego | Home </title>

	<link rel="icon" type="image/png" href="assets/common/cube-bgg.png" />
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap Main -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/fonts/Brandon_reg.otf" rel="stylesheet" />
	<!-- <link href="assets/css/home.css" rel="stylesheet" /> -->

<style>

.navbar {
 	background-color: #222F5F;
 	border-radius: 0px 0px 0px 0px;
 	margin-bottom: 0px;
 	position: fixed;
 	overflow: hidden;
 	width: 100%;
 	z-index: 3;
}

a, .navbar-brand {
 	margin-top: 0px;
 	margin-bottom: 2px;
}

/*
=================================
Toggle Button
=================================
*/

.navbar-toggle {
	border: 1px solid #22A2A2;
}
.navbar-toggle .icon-bar {
	background-color: #22A2A2;
}

/*
=================================
Navbar Menus
=================================
*/
img, .navbar-header {
 	margin-left: 10px;
 	margin-right: 1px;
 	margin-bottom: 10px;
 	margin-top: 0px;
 }

ul, .navbar-nav, li, a {
 	margin-right: 1px;
 	color: white;
}

/*
=================================
Background 1
=================================
*/

 #bg1 {
 	position: absolute;
	background-image: url(assets/home/bg-homebanner.png);
	background-repeat: no-repeat;
	background-size: 100%;
	height: 1000px;	
	width: 100%;
	z-index: 1;
	display: block;
	/*overflow: hidden;*/
}

/*
=================================
Background 2
=================================
*/

 #bg2 {
 	margin-top: 50%;
 	position: absolute;
	background-image: url(assets/home/bg-map.png);
	background-repeat: no-repeat;
	background-size: 100%;
	background-color: #F8FAFB;
	height: 2000px;	
	width: 100%;
	display: block;
	/*overflow: hidden;*/
}
/*
=================================
Background 3
=================================
*/

 #bg3 {
 	margin-top: 130%;
 	position: absolute;
	background-image: url(assets/home/bg-corporate-solutions.png);
	background-repeat: no-repeat;
	background-size: 100%;
	/*background-color: #F8FAFB;*/
	height: 135%;	
	width: 100%;
	display: block;
	z-index: 2;
	/*border: 5px solid green;*/
	/*overflow: hidden;*/
}
/*
=================================
Background 4
=================================
*/

 #bg4 {
 	margin-top: 130%;
 	position: absolute;
	background-image: url(assets/home/bg-map.png);
	background-repeat: no-repeat;
	background-size: 100%;
	/*background-color: #F8FAFB;*/
	height: 135%;	
	width: 100%;
	display: block;
	z-index: 1;
	/*border: 5px solid pink;*/
	/*overflow: hidden;*/
}
/*
=================================
Background 5
=================================
*/

 #bg5 {
 	margin-top: 200%;
 	position: absolute;
	background-repeat: no-repeat;
	background-size: 100%;
	background-color: #F8FAFC;
	height: 400px;	
	width: 100%;
	display: block;
	/*overflow: hidden;*/
}

#footer{
	/*border: 5px solid red;*/
	color: black;
	z-index: 1;
	/*margin-top: 100px;*/

}
#img-footer{
	/*border: 5px solid red;*/
	color: black;
	z-index: 1;
	margin-top: 100px;

}

/*
=================================
Footer Lol
=================================
*/

 #TRY {
 
 	margin-top: 195.5%;
 	position: absolute;
	z-index: 2;
	/*border: 10px solid red;*/
	
}

/*
=================================
New Fonts
=================================
*/

@font-face {
    font-family: Brandon-Reg;
    src: url(assets/fonts/Brandon_reg.otf);
}
@font-face {
    font-family: OS-Reg;
    src: url(assets/fonts/OpenSans-Regular.ttf);
}
@font-face {
    font-family: OS-Semibold;
    src: url(assets/fonts/OpenSans-SemiBold.ttf);
}

</style>

</head>

<body>

	<nav class="navbar">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>                        
      			</button>

      			<a class="navbar-brand" href="#"><img class="navbar-header" src="assets/common/entrego-header.png"></a>
    		</div>

    		<div class="collapse navbar-collapse" id="myNavbar">
      			<ul class="nav navbar-nav navbar-right">
        			<li><a href="#">ABOUT US</a></li>
        			<li><a href="#">SERVICES</a></li>
        			<li><a href="#">CAREER </a></li>
        			<li><a href="#">HELP </a></li>
      			</ul>
			</div>
  		</div>
	</nav>

	<div id="bg1"></div>

	<div id="bg2"></div>
	<div id="bg3"></div>
	<div id="bg4"></div>

	<div>
		<center><img src="assets/common/cube-wg-md.png" id="TRY" /></center>
	</div>

	<div id="bg5">
		<div class="container" id="img-footer">
			<img src="assets/common/entrego-footer.png" />
		</div>
		<br>
		<div class="container">
		<div class="container" id="footer">
			<div class="col-md-5">
				<div class="row">
					<div>
						<p style="font-family: OS-Reg, sans-serif; line-height: 24px; font-size: 14px; color: #4a4a4a;">You can rely on us to deliver your promises <br>Leveraging our technology to provide you fast, safe <br> and reliable logistics services in the Philippines.</p>
					</br>	
						<p style=" font-family: OS-Reg, sans-serif; line-height: 24px; font-size: 14px; color: #4a4a4a;">Copyright Entrego • All Right Reserved</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-5">
						<div class="row">		
							<p style="font-family: OS-Semibold, sans-serif; font-weight: 600; font-size: 14px;color: #4a4a4a; line-height: 21px; ">ABOUT</p>
							<p style="font-family: OS-Semibold, sans-serif; font-weight: 600; font-size: 14px;color: #4a4a4a; line-height: 21px; ">SERVICES</p>
							<p style="font-family: OS-Semibold, sans-serif; font-weight: 600; font-size: 14px;color: #4a4a4a; line-height: 21px; ">CAREER</p>
							<p style="font-family: OS-Semibold, sans-serif; font-weight: 600; font-size: 14px;color: #4a4a4a; line-height: 21px; ">HELP</p>
						</div>
					</div>
					<div class="col-md-7">
						<div class="row">
							<p style="font-family: OS-Semibold, sans-serif; font-weight: 600; font-size: 14px;color: #4a4a4a; line-height: 21px; ">PRIVACY</p>
							<p style="font-family: OS-Semibold, sans-serif; font-weight: 600; font-size: 14px;color: #4a4a4a; line-height: 21px; ">TERMS AND CONDITIONS</p>
							<p style="font-family: OS-Semibold, sans-serif; font-weight: 600; font-size: 14px;color: #4a4a4a; line-height: 21px; ">FAQ</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="row">
					<p style="font-family: OS-Reg, sans-serif; line-height: 21px; font-size: 14px; color: #4a4a4a;">Level 2, B6, Bonifacio High Street, <br> Bonifacio Global City, Taguig, NCR.</p>
					</br>
					<p style="font-family: OS-Reg, sans-serif; line-height: 21px; font-size: 14px; color: #4a4a4a;">Info@Entrego.com.ph</p>
				</div>
			</div>
		</div>
		</div>
	</div>

</div>
	

	

</body>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
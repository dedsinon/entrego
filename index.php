<!DOCTYPE html>
<html>
<head>

	<title> Entrego | Home </title>

	<link rel="icon" type="image/png" href="assets/common/cube-bgg.png" />
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

	<!-- Bootstrap Main -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/fonts/Brandon_reg.otf" rel="stylesheet" />
	<!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" /> -->
	<!-- <link href="bootstrap/js/bootstrap.min.js" rel="stylesheet" /> -->
	<link href="bootstrap/jquery-3.2.1min.js" rel="stylesheet" />
	<!-- <link href="index.css" rel="stylesheet" /> -->

<style>
/* =================================
						NAVBAR
================================= */
.scroll{
	background-color: #ffffff;
	z-index: 3;
		width: 100%;
		border-radius: 0px 0px 0px 0px;
	 	margin: 0 0 0 0;
		padding: 0 0 0 0;
	 	position: fixed;
}
.navbar {
 	background-color: #222F5F;
 	border-radius: 0px 0px 0px 0px;
 	margin: 0 0 0 0;
	padding: 0 0 0 0;
 	position: fixed;
 	width: 100%;
 	z-index: 3;
}


.navbar-header, .container-fluid{
	padding-top: 0px;
	margin-top: 0px;
}
#navbar-header {
	margin-top: 0px !important;
	padding-top: 0px !important;
	position: relative;
	display: inline-block;
	position: relative;
	left: 20px;
}

.navbar-nav > li > a {
 	color: white;
	font-size: 16px;
	font-weight: 400;
	line-height: 24px;
	font-family: Brandon-Reg, sans-serif;
	background-color:  #222F5F;
	margin-right: 30px;
	margin-top: 10px;
	margin-left: 10px;
	padding-right: 20px;
}

.navbar-nav > li > a:hover {
 	color: white;
	background: transparent;
	margin-right: 30px;
	margin-left: 10px
	margin-top: 10px;
	font-weight: bold;
}

.navbar-toggle > .icon-bar{
	background-color: white;
}
/*=================================
					Background 1
=================================*/

 #bg1 {
 	position: absolute;
	background-image: url(assets/home/bg-homebanner.png);
	background-repeat: no-repeat;
	background-size: 100%;
	margin-top: 0px;
	height: 1150px;
	max-width: 100%;
	width: 100%;
	z-index: 2;
	box-sizing: border-box;
	}

	#bg1 > .container{
		text-align: center;
	}

	#bg1 > .container > .row #img{
		width: 450px;
		margin-top: 200px;
		position: relative;
	}

	#bg1 > .container > .row .text{
		margin-top: 50px;
		color: white;
		font-family: Brandon-Reg, sans-serif;
		line-height: 36px;
		font-size: 24px;
		font-weight: 400;
	}

	#bg1 > .container > .row form .form-group{
		margin-top: 40px;
		width: 500px;
		color: white;
		font-family: Brandon-Reg, sans-serif;
		line-height: 36px;
		font-size: 24px;
		font-weight: 400;
	}
	#bg1 > .container > .row form .form-group button{
	background-color: #2DCCCA;
	color: white;
	}
	#bg1 > .container > .row form .form-group button span::after{
	content: "TRACK MY ORDER";
	margin-bottom: 20px;
	margin-top: 0;
	line-height: inherit;
	font-size: 14px;
	color: white;
	}

	#bg1 > .container > .we{
		margin-top: 70px;
		align-content: center;
	}
	#bg1 > .container > .row .text1{
		margin-top: 50px;
		color: white;
		font-family: Brandon-Reg, sans-serif;
		line-height: 36px;
		font-size: 24px;
		font-weight: 400;
		display: inline;
	}

	@media only screen and (max-width: 780px) {
		.navbar-header .navbar-brand{
			margin-top: 10px !important;
			padding-top: 0px !important;
			position: relative;
			display: inline-block;
			position: relative;
		}
		.container > #bg1{
			height: 2000px;
		}
		#bg1 > .container > .row #img{
			margin-top: 70px;
			width: 200px;
			height: auto;
			position: relative;
		}
		#bg1 > .container > .row .text{
			margin-top: 20px;
			color: white;
			font-family: Brandon-Reg, sans-serif;
			line-height: 12px;
			font-size: 14px;
			font-weight: 400;
		}
		#bg1 > .container > .row form .form-group{
			margin-top: 20px;
			width: 300px;
			color: white;
			font-family: Brandon-Reg, sans-serif;
			line-height: 12px;
			font-size: 12px;
			font-weight: 400;
			box-sizing: border-box;
		}

		#bg1 > .container > .row form .form-group input{
		color: white;
		font-size: 14px;
		}
		#bg1 > .container > .row form .form-group button{
		background-color: #2DCCCA;
		color: white;
		}
		#bg1 > .container > .row form .form-group button span::after{
		content: ">";
		margin-bottom: 20px;
		margin-top: 0;
		line-height: inherit;
		font-size: 14px;
		color: white;
		}
		#bg1 > .container > .row .text1{
			margin-top: 5px;
			color: white;
			font-family: Brandon-Reg, sans-serif;
			line-height: 16px;
			font-size: 13px;
			font-weight: 300;
		}
		#bg1 > .container > .we{
			margin-top: 0px;
			align-content: center;
		}
		#bg1 > .container > .row #img1{
			margin-top: -30px;
			height: 50px;
		}
		#hide{
			visibility: hidden;
		}
	}

	/*=================================
							Background 2
	===================================*/

	 #bg2 {
	 	position: absolute;
		background-image: url(assets/home/bg-map.png);
		background-repeat: no-repeat;
		background-size: 100%;
		background-color: #F8FAFB;
		margin-top: 50%;
		height: 1200px;
		width: 100%;
		display: block;
		z-index: 1;
	}
	#bg2 > .container > .row{
		margin-top: 25%;
		height: 600px;
	}

		@media only screen and (max-width: 780px) {
			#bg2 {
	 	 		position: absolute;
	 			background-image: url(assets/home/bg-map.png);
	 			background-repeat: no-repeat;
	 			background-size: 100%;
	 			background-color: #F8FAFB;
	 			height: 1000px;
	 			width: 100%;
	 			display: block;
	 			z-index: 1;
	 		}
		}
		/*=================================
								Background 3
		===================================*/
		#bg3 {
		 margin-top: 120%;
		 position: absolute;
		 background-image: url(assets/home/bg-corporate-solutions.png);
		 background-repeat: no-repeat;
		 background-size: 100%;
		 /*background-color: #F8FAFB;*/
		 height: 140%;
		 width: 100%;
		 display: block;
		 z-index: 2;
		 /*border: 5px solid green;*/
		 /*overflow: hidden;*/
	 }
	 /*=================================
							 Background 4
	 ===================================*/
	 #bg4 {
	 	margin-top: 185%;
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

	/*=================================
							FONTS
	===================================*/
	@font-face {
	    font-family: Brandon-Reg;
	    src: url(assets/fonts/Brandon_reg.otf);
	}
	@font-face {
	    font-family: Brandon-Med;
	    src: url(assets/fonts/Brandon_med.otf);
	}
	@font-face {
	    font-family: OS-Reg;
	    src: url(assets/fonts/OpenSans-Regular.ttf);
	}
	@font-face {
	    font-family: OS-Semibold;
	    src: url(assets/fonts/OpenSans-SemiBold.ttf);
	}
	@font-face {
	    font-family: OS-Bold;
	    src: url(assets/fonts/OpenSans-Bold.ttf);
	}

@media only screen and (min-width: 2400px) {
	#bg1 {
	 position: absolute;
	 background-image: url(assets/home/bg-homebanner.png);
	 background-repeat: no-repeat;
	 background-size: 100%;
	 margin-top: 0px;
	 height: 1000px;
	 max-width: 100%;
	 width: 100%;
	 z-index: 2;
	 box-sizing: border-box;
	 }
	#bg2 {
	 position: absolute;
	 background-image: url(assets/home/bg-map.png);
	 background-repeat: no-repeat;
	 background-size: 100%;
	 background-color: #F8FAFB;
	 margin-top: 15%;
	 height: 80%;
	 width: 100%;
	 display: block;
	 z-index: 1;
 }
 #bg3 {
	 margin-top: 32%;
	 position: absolute;
	 background-image: url(assets/home/bg-corporate-solutions.png);
	 background-repeat: no-repeat;
	 background-size: 100%;
	 /*background-color: #F8FAFB;*/
	 height:50%;
	 width: 100%;
	 display: block;
	 z-index: 2;
	 /*border: 5px solid green;*/
	 /*overflow: hidden;*/
 }
 #bg4 {
	margin-top: 55%;
	position: absolute;
	background-repeat: no-repeat;
	background-size: 100%;
	background-color: #F8FAFC;
	height: 400px;
	width: 100%;
	display: block;
	/*overflow: hidden;*/
}
}

</style>
</head>
<body>

<div class="wrapper">
	<nav class="navbar" id="navbar">
		<div class="container-fluid">
  		<div class="navbar-header">
				<a class="navbar-brand logo" href="#"><img class="navbar-header" src="assets/common/entrego-header.png" id="navbar-header"></a>
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    			<span class="icon-bar"></span>
    			<span class="icon-bar"></span>
    			<span class="icon-bar"></span>
  			</button>
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

		<div class="container" id="bg1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<img id="img" src="assets/common/entrego-header-lg.png" alt="entrego-header-lg">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="text">
							FROM YOU TO THERE
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form>
							<center>
							<div class="form-group">
								<div class="input-group input-group-lg">
      						<input type="text" class="form-control" placeholder="ENTER TRACKING NUMBER">
      							<div class="input-group-btn">
        							<button class="btn btn-lg btn-primary" type="submit"><span id="btn-text"></span></button>
      							</div>
    						</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row we">
					<div class="col-md-12">
						<div class="row text1">
						WE DELIVER &nbsp; &nbsp;
							<img id="hide" src="assets/common/bullet-green.png" alt="entrego-header-lg" style="height: 20px; width :20px;"/> &nbsp; &nbsp;
							WE NEVER STOP &nbsp; &nbsp;
							<img id="hide"src="assets/common/bullet-green.png" alt="entrego-header-lg" style="height: 20px; width :20px;" /> &nbsp; &nbsp;
						WE STRIVE FOR THE FUTURE
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 30px;">
					<div class="col-md-12">
						<div class="row">
							<img id="img1" src="assets/common/cube-wg.png" alt="entrego-header-lg">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container" id="bg2">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12">
										<img src="assets/common/cube-bgg.png" />
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<p style="color: #22a2a2; font-size: 40px; font-weight: bold; font-family: OS-Reg;">EXPRESS</p>
											<p style="color: #222f5f; font-size: 40px; font-weight: bold;  line-height: 30px; font-family: OS-Reg;">DELIVERIES</p>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										 <span style=" font-family: OS-Bold; font-size: 22px; color: #22a2a2;"> From You to There.</span> <span style=" font-family: OS-Reg; font-size: 20px; color: #4a4a4a;">Grow your business to new horizons while we deliver your products where you need them, when you need them.</span>
									 </br>
									 </br>
										  <span style=" font-family: OS-Reg; font-size: 20px; color: #4a4a4a;">Whether you are an industry leader or a small business, our proprietary technology and dedicated people turn logistics into your competitive advantage. With Entrego, you always deliver on your promises.</span>
									</div>
								</div>
							</br>
								<div class="row">
									<div class="col-md-12">
										<button type="button" class="btn btn-primary btn-lg" name="button" style="background-color:#222f5f; width: 150px;"><span style="font-size: 14px;">KNOW MORE</span></button>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<center>
								<img src="assets/home/home-express.png" style="height: 500px;"/>
							</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container" id="bg3">
			<div class="container">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<center><img src="assets/common/cube-bgg-md.png" style="margin-top: -58px;"/></center>
						</div>
					</div>
				</div>
				<div class="col-md-12" style="margin-top: 150px; height: 570px;">
					<div class="row">
						<div class="col-md-6">
							<center>
								<img src="assets/home/home-corporate.png" style="margin-top: 120px;"/>
							</center>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<img src="assets/common/cube-wg.png"/>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<p style="color: #00cfcc; font-size: 48px; font-weight: 400; font-family: Brandon-Med, sans-serif;">CORPORATE</p>
									<p style="color: #ffffff; font-size: 48px; font-weight: 400;  line-height: 30px; font-family: Brandon-Med,sans-serif;">SOLUTIONS</p>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									 <span style=" font-family: OS-Reg, sans-serif; font-size: 18px; color: #00d3ce;">Never stop improving. </span> <span style=" font-family: OS-Reg, sans-serif; font-size: 18px; color: #ffffff;">We design tailored fulfillment and delivery solutions that consistently enhance efficiencies along your supply chain. Together, we strive to be better everyday. </span>
								 </br>
								 </br>
										<span style=" font-family: OS-Reg; font-size: 18px; color: #ffffff;">Let us handle your logistics end-to-end: cutting-edge fulfillment technology, advanced analytics and performance management pave the way for industry-leading operations and uninhibited growth.</span>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<button type="button" class="btn btn-primary btn-lg" name="button" style="background-color:#00d3ce; width: 150px;"><span style="font-size: 14px;">KNOW MORE</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<center><img src="assets/common/cube-wg-md.png" style="margin-top: 80px;"/></center>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container" id="bg4">
			<div class="container">
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

</div>

<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

				$("nav").addClass("scroll");
    } else {
        $("nav").addClass("scroll");

    }
}
</script>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>

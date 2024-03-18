<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HomePage</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.navbar-custom{
			background: linear-gradient(135deg, #c3a3f1, #6414e9);
		}

		[id^="gabung"]{
			border: none;
			box-shadow: 1px black;
			
		}
		h2,h3,h4{
			color: white;
		}
		.row{
			margin-top: 0.2em;
		}
		[class^="col"]{
			background: linear-gradient(to bottom, #cc00cc 0%, #6666ff 100%);
			border: 1px solid rgba(86, 61, 124, 0.2);
			padding: 0.4em;

		}
		[id^="navigasi"]{
			background-image: url(imagg/.jpg);
			border: 1px solid rgba(86, 61, 124, 0.2);
			padding: 0.3em;
		}
		[id^="footer"]{
			background-image: url(img/bg-footnote.jpg);
		}
		[id^="gambar"]{
			border: solid 5px whitesmoke;
			box-shadow: 3px;

		}
		.img-custom{
			height:80px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row" id="navigasi">
			<div class="col-12 col-sm-12 col-md-6 border-0" id="navigasi">
				 <a href="#" class="navbar-brand"><img src="images/spin_a_meal.png" class="navbar-brand img-custom">Spin A Meal</a>
			</div>
			<div class="col-12 col-sm-12 col-md-6 border-0" id="navigasi">
			<nav class="navbar navbar-expand-xl navbar navbar-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
          </nav>
			</div>
		</div>

		<div class="row">
			<div class="col-12 border-0">
		<div class="row no-gutters" id="gabung">
			<div class="col-12 col-sm-12 col-md-5 justify-content-center mt-5 mb-5 border-0" id="gabung">
			<H3>This Website is a random picker for user who want to try something new to eat </H3>
			</div>
			<div class="col-12 col-sm-12 col-md-7 justify-content-center border-0" id="gabung">
			<img src="images\undraw_eating_together_re_ux62.svg" class="img-fluid">
			</div>
		</div>
	</div>
		
	</div>

		<div class="row border-0">
			<div class="col-12 ">
		<div class="row no-gutters">
			<div class="col-12 col-sm-12 col-md-4 border-top-0 border-bottom-0 border-left-0"><H4 class="ml-3">Latest News</H4><br><p class="ml-3">Spin A Meal</p>
			</div>
			<div class="col-12 col-sm-12 col-md-4 border-top-0 border-bottom-0 border-left-0"><H4 class="ml-3">Contact Us</H4><p class="ml-3">City State:21e1212<br>
			Addresss:  Polnes<br>   
			Email:  rhesa719@gmail.com</p></div>
			<div class="col-12 col-sm-12 col-md-4 border-top-0 border-bottom-0 border-right-0"><H4 class="ml-3">Send Us A Message</H4><br>
			<button type="submit" value="Send_email" class="btn btn-dark ml-5">Click To Send Us An Email</button></div>
			
		</div>
	</div>
</div>

	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
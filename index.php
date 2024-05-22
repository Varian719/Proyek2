<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HomePage</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<style>
		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}

		body {
			font-family: Arial, sans-serif;
		}

		.container-1 {
			background-color: aqua;
			padding: 0px;
		}

		#navbar {
			display: flex;
			align-items: center;
			justify-content: space-between;
			margin: 0px;
			background-color:#ad8edc;
			/* Warna latar belakang navbar */
			padding: 10px 20px;
			
			/* Menambahkan padding pada navbar */
		}

		ul {
			list-style: none;
			display: flex;
			align-items: center;
		}
		ul span {
			font-size: 24px;
		}

		li {
			margin-right: 50px;
			font-size: 24px;
		}

		img.logo {
			max-width: 100px;
			margin-right: 20px;
		}

		.content {
			display: grid;
			grid-template-columns: 1fr 1fr;
			gap: 20px;
			align-items: center;
			background-color: aqua;
			/* Warna latar belakang konten */
			padding: 20px;
			background-image: linear-gradient(to left, #d8c0f4, #d0b5f2, #c8abf1, #c0a0ef, #b796ee);
			/* Menambahkan padding pada konten */
		}

		.box {
			padding: 20px;
		}

		.box h3 {
			margin-bottom: 10px;
		}

		.footer {
			display: flex;
			justify-content: space-between;
			flex-wrap: wrap;
			background-color:#ad8edc;
			padding: 20px;
		}

		.box h4 {
			margin-bottom: 10px;
		}

		.box p {
			margin-bottom: 5px;
		}

		button {
			cursor: pointer;
			padding: 10px 20px;
			background-color: aquamarine;
			border: none;
		}
	</style>
</head>

<body>
	<div class="container-1">

		<div id="navbar">
			<ul>
				<img src="images/spin_a_meal.png" alt="Logo" class="logo">
				<span>Spin A Meal</span>
			</ul>
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="dashboard_guest.php">Login As Guest</a></li>
			</ul>

		</div>
		<div class="content">
			<div class="box">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/img1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>
		<div class="box">
			<H1> Best Rated Restaurant</h1>
	</div>
	</div>
	<div class="content">
			<div class="box">
				<h3>This Website is a random picker for users who want to try something new to eat</h3>
			</div>
			<div class="box">
				<img src="images/undraw_eating_together_re_ux62.svg" alt="Illustration">
			</div>
	</div>
	<div class="content">
			<div class="box">
			<img src="images/img4.png">
				
			</div>
			<div class="box">
				<h3>Tampilan Spin A Meal Roulette<h3>
			</div>
	</div>
		<div id="footer" class="footer">
			<div class="box">
				<h4>Latest News</h4>
				<p>Spin A Meal</p>
			</div>
			<div class="box">
				<h4>Contact Us</h4>
				<p>City State: Random City<br> Address: Jl.Terserah anda<br> Email: SpinAmeal@Terserah.com</p>
			</div>
			<div class="box">
				<h4>Send Us A Message</h4>
				<button type="submit" value="Send_email">Click To Send Us An Email</button>
			</div>
		</div>
	</div>
</body>

</html>
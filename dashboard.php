<?php
$conn=mysqli_connect("localhost","root","","spin_a_meal");
if(!$conn)
{
	echo"Koneksi gagal";
}

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Spin Wheel</title>
</head>
<body>	


	<button id="spin">Spin</button>
	<span class="arrow"></span>
<div class="container">
	<div class="one">1</div>
	<div class="two">2</div>
	<div class="three">3</div>
	<div class="four">4</div>
	<div class="five">5</div>
	<div class="six">6</div>
	<div class="seven">7</div>
	<div class="eight">8</div>
	<div class="nine">9</div>
	<div class="ten">10</div>
</div>
</body>
<script>
	let container = document.querySelector(".container");
let btn = document.getElementById("spin");
let number = Math.ceil(Math.random() * 1000);

btn.onclick = function () {
	container.style.transform = "rotate(" + number + "deg)";
	number += Math.ceil(Math.random() * 1000);
}
</script>
</html>
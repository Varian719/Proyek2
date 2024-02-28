<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Spin Wheel</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="navbar">
		<div id="menu-icon">&#9776; Menu</div>
		<div class="sidebar">
			<a href="#">Profile</a>
			<a href="#">Change Theme</a>
			<a href="#">Log Out</a>
		</div>
	</div>

	<div class="content">
		<button id="spin" onclick="spinWheel()">Spin</button>
		<span class="arrow"></span>
		<div class="container">
			<div class="one" data-number="1">1</div>
			<div class="two" data-number="2">2</div>
			<div class="three" data-number="3">3</div>
			<div class="four" data-number="4">4</div>
			<div class="five" data-number="5">5</div>
			<div class="six" data-number="6">6</div>
			<div class="seven" data-number="7">7</div>
			<div class="eight" data-number="8">8</div>
		</div>
		<div id="result-container" style="display: none;">
			<p id="result"></p>
		</div>
	</div>
	<script src="script.js"></script>
</body>

</html>
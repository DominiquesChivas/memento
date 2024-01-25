<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link href='https://css.gg/shopping-bag.css' rel='stylesheet'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<title>Memento</title>
</head>
<body>

<?php


?>
	<header> <!--ini adalah header-->
		<div class="header"> 
			<ul>
				<li><a href="catalogue.html">Catalogue</a></li>
				<li><a href="about.html">About</a></li>
			</ul>
			<h1><a href="memento.html">MEMENTO</a></h1>
			<a href="cart.html" class="icon-container">
				<i class="gg-shopping-bag"></i>
			</a>
		</div>
	</header>
	<content>
		<div class="shopbox" style="height: auto;">
			<div class="cartbox clearfix" style="padding: 0; border: 2px solid black;">
				<img class="potocart" src="band.jpg">	
				<form action="checkout.php" method="POST">
					<div style="margin: 20px;" class="littlecartbox">
					<label for="item"><h2 style="width: 350px;">Choose your piece</h2></label> <br>
					<select id="item" name="item" class="select">
						<option value="lightning">Lightning</option>
						<option value="long">Long</option>
						<option value="flame">Flame</option>
						<option value="ashes">Ashes</option>
					</select> <br> <br>
					<div style=" display: inline-flex;">
						<div class="lillittle-cartbox">
							<label for="size"><h2>Size</h2></label> <br>
							<select id="size" name="size" class="select">
								<option value="xl">XL</option>
								<option value="l">L</option>
								<option value="m">M</option>
								<option value="s">S</option>
							</select>
						</div>	
						<div class="lillittle-cartbox">
							<label for="quantity"><h2>Quantity</h2></label> <br>
							<select id="quantity" name="quantity" class="select">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="btn-cont">	
				<button class="button-54 buy-btn" type="submit" name ="submit">Submit</button>
			</div>
			</form>
		</div>
	</content>
</body>
<footer>
	<div class="footer"> <!--container untuk footer-->
		<p class="t6">Copyright © 2021 Memento</p>
	</div>
</footer>
</html>
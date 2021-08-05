<!DOCTYPE html>
<html>
	<head>
	
	<title> My shopping cart </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/style.css">
	
	</head>

	<body>
		
		<img src="images/myCart.png" width="200px" height="200px" class="logo">
		
		
		<h1> Shopping cart </h1>
		
		<h2> The online shopping store</h2>
			
		<hr>
		
			<ul class="menu">
				<li class="menu"><a href="index.html"> Home </a></li>
				<li class="menu"><a href="news.html"> News </a></li>
				<li class="menu"><a href="register.html">Contact </a></li>
				<li class="menu"><a href="about.php">About </a></li>
			</ul>
			<br>
		<?php
			define("companyName", "<h2>About The iPhone Store</h2> <br>");
			echo companyName;
		
			echo "<p>This page is about <b>The iPhone Store</b></p><br><br>";

			$sold = 75;
			$total = 100;

			echo "<b><u>The Shopping Cart</u></b><br><br>";
			echo "No of items sold: ".$sold;
			echo "<br>";
			echo "No of total items: ".$total;
			echo "<br>";


			function findPercentage(){
				$GLOBALS['percentage'] = $GLOBALS['sold']/$GLOBALS['total'] * 100;
			}
			
			findPercentage();
			echo "The percentage of sold items = ".$percentage."%<br><br><br>";

			$today = " (Today is ".date("l").")";
			//echo $today;
			//echo "<br>";
			
			$dToday = date("Y-m-d");
			$shipDay = date_create("2020-10-21");
			$status;

			if($dToday > $shipDay){
				$status = "Shipped";
			}
			else{
				$status = "To be Shipped";
			}
			
			echo "For ".$dToday.$today." 24 items has ".$status;
			echo "<br><br>";

			
			$itemSold = array("iPhone XS"=>"27","iPhone X"=>"30","iPhone XS Max"=>"12","iPhone XR"=>"29");
			
			foreach($itemSold as $x=>$x_value){
				echo $x."\t".$x_value;
				echo "<br>";
			}
			
		?>
		
		<footer class="fifa">
		Created by:Yomal Bandara <br>
		<a href="http://courseweb.sliit.lk/">Visit our course</a>
		</footer>
	
	</body>


</html>
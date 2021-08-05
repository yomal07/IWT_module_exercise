<?php
	include_once 'config.php';
?>

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
				<li class="menu"><a href="index.php"> Home </a></li>
				<li class="menu"><a href="news.html"> News </a></li>
				<li class="menu"><a href="register.html">Contact </a></li>
				<li class="menu"><a href="about.php">About </a></li>
			</ul>

			<br>
			<button><a href="additems.html"> Add Item</a></button>
			<br>
		<div class="productData">	
		<table>
			<tr>
				<th style="text-align:center;">Item ID</th>
				<th style="text-align:center;">Item name</th>
				<th style="text-align:left;">Description</th>
				<th style="text-align:center;">Item Price</th>
				<th style="text-align:center;">Quantity</th>
				<th style="text-align:center;">Item code</th>
			</tr>
			<?php
					$sql = "select * from item";
					$result = $conn->query($sql);
					
					if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
							echo "<tr><td>".$row["Item_id"]."</td><td>".$row["Item_name"]."</td><td>".$row["Item_description"]."</td><td>".$row["Price"]."</td><td>".$row["Quantity"]."</td><td>".$row["Item_code"]."</td></tr>";
						}
					}
					else{
						echo "No results found";
					}
					
					echo "</table>";
					
					$conn-> close();
			?>
		</div>
		
		<footer class="fifa">
		Created by:Yomal Bandara <br>
		<a href="http://courseweb.sliit.lk/">Visit our course</a>
		</footer>
	
	</body>


</html>
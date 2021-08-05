<?php
	include_once 'config.php';
?>

<?php
	$name = $_POST["itemName"];
	$quantity = $_POST["qty"];
	$desc = $_POST["description"];
	$itemCode= $_POST["itemcode"];
	$Price = $_POST["price"];

		
	$sql = "insert into item(Item_id,Item_name,Item_description,Price,Quantity,Item_code) VALUES ('','$name','$desc','$Price','$quantity','$itemCode')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert ('RECORD INSERTED SUCCESSFULLY')</script>";
		header("Location:index.php");
	}
	else{
		echo "<script>alert ('RECORD INSERTION FAILED')</script>";
	}
	
	mysqli_close($conn);
	
?>
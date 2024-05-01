<?php

if(isset($_POST['orderButton'])){
	$food = $_POST['foodSelectField'];
	$quantity = $_POST['quantityTextField'];
	$cash = $_POST['cashTextField'];
	
	$foodPrice = 0;
	
	switch($food){
		case 'burger':
			$foodPrice = 50;
			break;
		case 'fries':
			$foodPrice = 40;
			break;
		case 'burgerSteak':
			$foodPrice = 60;
			break;
		case 'friedChicken':
			$foodPrice = 60;
			break;
		case 'spaghetti':
			$foodPrice = 55;
			break;
	}
	
	$totalCost = $foodPrice * $quantity;
	$moneyChange = $cash - $totalCost;
	
	if($moneyChange >= 0){
		echo "<h2>THANK YOU FOR ORDERING!</h2>";
		echo "<h3>The total cost is: " . $totalCost . "</h3>";
		echo "<h3>Your change is: " . $moneyChange . "</h3>";
	}else{
		echo "<h2>NOT ENOUGH CASH! :(</h2>";
		$missingCash = $moneyChange - $moneyChange - $moneyChange;
		echo "<h2>YOU NEED " . $missingCash ." MORE IN CASH! </h2>";
	}
}
?>
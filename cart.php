<?php

function  display_title(){
	echo "CART";
}

function display_content(){
	require 'connection.php';
	// $string = file_get_contents("assets/items.json");
	// $items = json_decode($string, true);

	$total = 0;
	// print_r($_SESSION['cart']); // Array ([] => '')
	foreach ($_SESSION['cart'] as $index => $quantity) {
		$sql = "SELECT * FROM items WHERE id='$index'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		extract($row);
		
		$subtotal = $price * $quantity; 
		$total += $subtotal; 
		echo "<div id='redirect'>";
		echo "<img class='col-xs-3' src='$image' style='float:left'>";
		echo "<h4 class='cart-h4'>".$name."</h4><br>";
		echo "<h4 class='cart-h4'>".$description."</h4><br>";
		echo "<h4 class='cart-h4'>".$price."</h4><br>";
		echo "<div style='float:right'>
			<h4 class='cart-h4'>Price: $subtotal</h4>
			<form method='post' action='add_to_cart.php?index=$index'>
			<input type='number' name='change_quantity' min=1 value='$quantity'><br>
			<button class='btn btn-default'>Change Quantity</button><br>
			<a href='remove_from_cart.php?index=$index'>
			<button type='button' class='btn btn-default'>Remove From Cart</button></a>
			</form>
			</div>";
		echo "</div>";
		echo "<div style='clear:both'></div>";
	}
	echo "<center><h4 class='cart-h4'>Total: Php $total</h4></center>";
	echo "<div class='row-button1'><a href='checkout.php' class='checkout-btn'>Checkout</a></div>";
}

require 'index.php';

?>
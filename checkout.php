<?php

function  display_title(){
	echo "CART";
}

function display_content(){
	require 'connection.php';

	foreach ($_SESSION['cart'] as $index => $quantity) {
		$sql = "SELECT * FROM items WHERE id='$index'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		extract($row);?>
        
        <section class='section-steps'>
            <div class='row'>
                    <div class='col-md-4'>
                  <h4 class='cart-h4'><?php echo $name; ?></h4><br>
		<h4 class='cart-h4'><?php echo $description; ?></h4><br>
		<h4 class='cart-h4'><?php echo $price; ?></h4><br>
                    </div>
                </div>
            </div>
        </section>
                <?php        
    }
}
require 'index.php';

?>
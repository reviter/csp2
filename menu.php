<?php
// require_once "items.php"; //replace with code to get items from the json file

// $string = file_get_contents("assets/items.json");
// $items = json_decode($string, true);

function display_title(){
	echo "Menu Page";
}

function display_content(){
	// global $items;
	// $categories = array_unique(array_column($items, 'category'));
	
	$filter = 'All';
	$filter = isset($_GET['category']) ? $_GET['category'] : 'All';
	// if(isset($_GET['category']))
	// 	$filter = $_GET['category'];

	require 'connection.php';


	echo "<div class='form-inline' id='redirect'>
					<form>
					<select class='form-control' name='category'>
					<option>All</option>";
	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$category = $row['name'];
	// foreach ($categories as $category) {
		// if($filter == $category)
		// 	echo "<option selected>$category</option>";
		// else
			// echo "<option>$category</option>";
		echo $filter == $id ? "<option selected value='$id'>$category</option>" : "<option value='$id'>$category</option>";
	// }
	}
	echo "</select>";
	echo "<div class='form-control-inline'>
					<button class='btn btn-default'>Search</button>
					</div>	
				</form>";
		
					if(isset($_SESSION['username']) && $_SESSION['role'] == 'admin'){
						echo 	"<div class='form-control-inline'>
										<a href='' class='btn btn-default'>Add Item</a>		
									</div> ";
					}
	echo "</div>";

	$sql = "SELECT * FROM items";
	$result = mysqli_query($conn,$sql);
	echo "<div class='row'>";
	while ($item = mysqli_fetch_assoc($result)) {
		$index = $item['id'];
	// foreach ($items as $index => $item) {
		if($filter == 'All' || $item['category_id'] == $filter){

			echo "<div class='furniture-grid clearfix col-md-6'>
						<img src='".$item['image']."' class='furniture-image'>";
			echo "<h4 class='menu-h4'>".$item['name']."</h4>";
			echo "<h4 class='menu-h4'>Price: Php".$item['price']."</h4><br>";
			if(isset($_SESSION['username']) && $_SESSION['role'] == 'admin'){
				echo "<button class='btn btn-primary render_modal_body' data-toggle='modal' data-target='#myModal' data-index='$index'>Edit</button>";
				echo "<button class='btn btn-danger delete_modal_body' data-toggle='modal' data-target='#deleteModal' data-index='$index'>Delete</button>";
			}
			else if(isset($_SESSION['username'])){
				echo "<form method='POST' class='form-inline1' action='add_to_cart.php?index=$index'>";
					echo "<button class='btn btn-success cart_modal_body' data-toggle='modal' data-target='#cartModal' data-index='$index'>Add to Cart</button>";
				echo "</form>";
			}
			echo "</div>"; 
		}
	} //endforeach //endwhile
	echo "</div>";	

			// edit modal
			echo '<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Modal Header</h4>
			      </div>
			      <div class="modal-body" id="modal-body">
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>

			  </div>
			</div>';

			// delete modal
			echo '<div id="deleteModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Modal Header</h4>
			      </div>
			      <div class="modal-body" id="delete-modal-body">
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>

			  </div>
			</div>';

			// cart modal
			echo '<div id="cartModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Product successfully added to your shopping cart!</h4>
			      </div>
			      <div class="modal-body" id="cart-modal-body">
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Checkout Now</button>
			      </div>
			    </div>

			  </div>
			</div>';
 }//end function display_content()

require "index.php";

?>

<script type="text/javascript">
	$(".render_modal_body").click(function(){
		var index = $(this).data('index')
		// $.post('render_modal_body_endpoint.php',{
		// 	index : index	
		// },function(data){
		// 	$("#modal-body").html(data);
		// })

		$.ajax({
			method: 'post',
			url: 'render_modal_body_endpoint.php',
			data: {
				index : index
			},
			success: function(data){
				$("#modal-body").html(data);
			}
		})
	})

	$(".delete_modal_body").click(function(){
		var index = $(this).data('index')
		$.ajax({
			method: 'post',
			url: 'delete_modal_body_endpoint.php',
			data: {
				index : index
			},
			success: function(data){
				$("#delete-modal-body").html(data);
			}
		})
	})

	$(".cart_modal_body").click(function(){
		var index = $(this).data('index')
		$.ajax({
			method: 'post',
			url: 'cart.php',
			data: {
				index : index
			},
			success: function(data){
				$("#cart-modal-body").html(data);
			}
		})
	})
</script>
<?php




	session_start();

	if(isset($_SESSION['access']) && $_SESSION['access'] == 'user'){
		header('Location: homeuser.php');
		exit();
	}else{
			
	
	$titleName='admin';
	include "../include/header.php";

	$user = new user("","","","");

	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {


			 	@$name = $_POST['name'];
			 	@$type = $_POST['type'];
			 	@$price = $_POST['price'];
			 	@$description = $_POST['description'];
			 	
			 	
				
			 	$item = new item($name,$type,$price,$description);
				$x = $item->additem();
 				header('Location: homeuser.php');
				exit();	
			 			
			 			
 	 }


		?>



		<div>You are admin<a href="logout.php">Logout</a><a href="manage_item.php">manage item</a></div>
		<section class="create_item">
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" id="multi-view">
	    		<div class="input-field">
					<i class="fa fa-tag prefix"></i>
					<input type="text" id="name" name="name" required="required">
					<label for="name">Item Name</label>
				</div>
				<div class="input-field">
					<i class="fa fa-money prefix"></i>
					<input type="text" id="type" name="type" required="required">
					<label for="type">Item type</label>
				</div>
    			<div class="input-field">
					<i class="fa fa-money prefix"></i>
					<input type="number" id="price" name="price" required="required">
					<label for="price"></label>
				</div>
				<div class="input-field">
					<i class="fa fa-edit prefix"></i>
					<textarea id="description" name="description" required="required"></textarea>
					<label for="description"></label>
				</div>
				<button class="btn blue darken-3">Add Item</button>
	    	</form>
		</section>
		
       



	<?php
	include "../include/fotter.php";
	}
	?>

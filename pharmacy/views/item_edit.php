<?php




	session_start();

	if(isset($_SESSION['access']) && $_SESSION['access'] == 'user'){
		header('Location: homeuser.php');
		exit();
	}else{
			
	
	$titleName='admin';
	include "../include/header.php";

	
	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
				

			 	@$name = $_POST['name'];
			 	@$type = $_POST['type'];
			 	@$price = $_POST['price'];
			 	@$description = $_POST['description'];
			 	
			 	
				$itemx = new item("","","","");
			 	var_dump($_GET['id']);
			 	$itemx->updateitem($name,$type,$price,$description,$_POST['id']);
 				header('Location: manage_item.php');
				exit();	
			 			
			 			
 	 }else{

 	 $item = new item("","","","");
	$em = $item->selectitem($_GET['id']);
		?>



		<div>You are admin<a href="logout.php">Logout</a></div>
		<section class="create_item">
			<form method="POST" action="item_edit.php" id="multi-view">
	    		<div class="input-field">
					<i class="fa fa-tag prefix"></i>
					<input type="text" id="name" name="name" required="required" value="<?php echo $em['name'] ?>">
					<label for="name">Item Name</label>
				</div>
				<input type="hidden" name="id" value="<?php echo $em['id'] ?>">
				<div class="input-field">
					<i class="fa fa-money prefix"></i>
					<input type="text" id="type" name="type" required="required" value="<?php echo $em['type'] ?>">
					<label for="type">Item type</label>
				</div>
    			<div class="input-field">
					<i class="fa fa-money prefix"></i>
					<input type="number" id="price" name="price" required="required" value="<?php echo $em['price'] ?>">
					<label for="price"></label>
				</div>
				<div class="input-field">
					<i class="fa fa-edit prefix"></i>
					<textarea id="description" name="description" required="required"><?php echo $em['description'] ?></textarea>
					<label for="description"></label>
				</div>
				<button class="btn blue darken-3">update Item</button>
	    	</form>
		</section>
		
       



	<?php
	include "../include/fotter.php";
	}
	}
	?>

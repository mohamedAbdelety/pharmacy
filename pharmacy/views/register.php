<?php




	session_start();


	$titleName=' | register';
	include "../include/header.php";


		if(isset($_SESSION['user'])){
			if($_SESSION['access'] = 'admin'){
				header('Location: homeadmin.php');
	 			exit();	
			}else{
				header('Location: homeuser.php');
	 			exit();
			}
			
	 	} else {
	 		if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {


			 	@$email = $_POST['email'];
			 	@$pass = $_POST['password'];
			 	@$name = $_POST['name'];
			 	@$hashedpass = md5($pass);
				
			 	$user = new user($name,"0",$email,$hashedpass);

				$x = $user->adduser();
			 	
			 				
 				$_SESSION['user'] = $email;
 				$_SESSION['access'] = 'user';
 				header('Location: homeuser.php');
					exit();	
			 			
			 			
			 	 } else{
			 	 	echo "<p>"." برجاء ادخل الاسم و كلمة المرور الصحيحة"."</p>";
			 	 }
				
			 }
		 	

?>






<body style="background:url('../public/image/service-3.jpg')no-repeat center center fixed;background-size:cover;">
 	<div class="over-lay">
	    <section class="login-box">
				<div>
					register
				</div>
	    	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" id="multi-view">
	    		<div class="input-field">
					<i class="fa fa-user prefix"></i>
					<input type="text" id="username" name="email" required="required">
					<label for="username">email</label>
				</div>
				<div class="input-field">
					<i class="fa fa-user prefix"></i>
					<input type="text" id="username" name="name" required="required">
					<label for="username">name</label>
				</div>
    		<div class="input-field">
					<i class="fa fa-lock prefix"></i>
					<input type="password" id="password" name="password" required="required">
					<label for="password">كلمة المرور</label>
				</div>
				<button class="btn blue darken-3">متابعة</button>
	    	</form>
	    </section>
			<section class="login-data">
				<h1><span>ph</span> armacy</h1>
			</section>
  	</div>
		

		<?php


		

		include "../include/fotter.php";

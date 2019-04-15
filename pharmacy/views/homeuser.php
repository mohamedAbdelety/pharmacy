<?php




	session_start();

	if(isset($_SESSION['access']) && $_SESSION['access'] == 'admin'){
		header('Location: homeadmin.php');
		exit();
	}else{
	$titleName='user';
	include "../include/header.php";

	$user = new user("","","","");



		?>


		<body onload="getitem('showall')" style="background:#ecf0f5">
			<div class="container">
				<div>You are user<a href="logout.php">Logout</a></div>
				<div class="">
					
					<div class="search-controll">
						<div class="input-field col s9 search-user employee-search">
		            		<input id="input_text" autocomplete="none" type="text" data-length="20" onkeyup="getitem('show')">
		            		<label for="input_text">search </label>
		      			</div>
					</div>
				 	 <section id="items_show">
				 	 	
				 	 </section>	
				 	 		
				 	 
				</div>


			</div>







			<script>



				
				function getitem(typeshow){
					if(typeshow =='showall' || document.getElementById('input_text').value == ''){
						var xhr = new XMLHttpRequest();
						xhr.onreadystatechange = function(){
							if(xhr.readyState == 4 && xhr.status == 200)
							{
								document.getElementById("items_show").innerHTML = xhr.responseText;
							}
						}
						xhr.open("GET","homeuser_ajax.php?act=search&typeshow=showall", "true");
						xhr.send();
					}
					if (typeshow === 'show' && document.getElementById('input_text').value !== '') {
						var xhr = new XMLHttpRequest();
						xhr.onreadystatechange = function(){
							if(xhr.readyState == 4 && xhr.status == 200)
							{
								document.getElementById("items_show").innerHTML = xhr.responseText;
							}
						}

						xhr.open("GET","homeuser_ajax.php?act=search&typeshow=show&handle="+document.getElementById('input_text').value, "true");
						xhr.send();
						}

				}


				function buy(id){
						
							var xhr = new XMLHttpRequest();
							xhr.onreadystatechange = function(){
								if(xhr.readyState == 4 && xhr.status == 200)
								{
									alert('Done');
									document.getElementById("items_show").innerHTML = xhr.responseText;
								}
							}

							xhr.open("GET","homeuser_ajax.php?act=buy&ID="+id, "true");
							xhr.send();



						

				}
			</script>
		
		
       



	<?php

	include "../include/fotter.php";
	}
	?>

<?php
session_start();
	$titleName='Manage item';
	include "../include/header.php";
	if(!isset($_SESSION['access']) || $_SESSION['access'] != 'admin'){
		header('location: login.php');
		exit();
	}
	


		

?>




		<body onload="getitem('showall')" style="background:#ecf0f5">
			<div class="container">
				<div class="dashboard-benfit dashboard-bills show-bot-box">
					<h5 class="">item</h5>
					<div class="page">
						<div class="search-controll">
							<div class="input-field col s9 search-user employee-search">
		            <input id="input_text" autocomplete="none" type="text" data-length="20" onkeyup="getitem('show')">
		            <label for="input_text">search </label>
		      		</div>
						</div>
				 	 	<table class="users-table">
				 	 		<thead>
					 	 		<tr>
					 	 			<td>name</td>
					 	 			<td>type</td>
					 	 			<td>price</td>
					 	 			<td>description</td>
					 	 			<td>controll</td>
					 	 		</tr>
				 	 		</thead>
				 	 		<tbody id="search-item">
				 	 		</tbody>
				 	 	</table>
					</div>
				</div>








			</div>







			<script>



				
				function getitem(typeshow){
					if(typeshow =='showall' || document.getElementById('input_text').value == ''){
						var xhr = new XMLHttpRequest();
						xhr.onreadystatechange = function(){
							if(xhr.readyState == 4 && xhr.status == 200)
							{
								document.getElementById("search-item").innerHTML = xhr.responseText;
							}
						}
						xhr.open("GET","item_ajax.php?act=search&typeshow=showall", "true");
						xhr.send();
					}
					if (typeshow === 'show' && document.getElementById('input_text').value !== '') {
						var xhr = new XMLHttpRequest();
						xhr.onreadystatechange = function(){
							if(xhr.readyState == 4 && xhr.status == 200)
							{
								document.getElementById("search-item").innerHTML = xhr.responseText;
							}
						}

						xhr.open("GET","item_ajax.php?act=search&typeshow=show&handle="+document.getElementById('input_text').value, "true");
						xhr.send();
						}







				}


				function operation(operation,id){
						if(window.confirm("Are you sure") === true){
							var xhr = new XMLHttpRequest();
							xhr.onreadystatechange = function(){
								if(xhr.readyState == 4 && xhr.status == 200)
								{
									document.getElementById("search-item").innerHTML = xhr.responseText;
								}
							}

							xhr.open("GET","item_ajax.php?act=delete&ID="+id, "true");
							xhr.send();



						}

				}
			</script>


	<?php

		include "../include/fotter.php";

?>

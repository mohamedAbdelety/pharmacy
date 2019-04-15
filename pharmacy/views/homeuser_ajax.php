<?php


session_start();


$classes= ['config', 'user','item'];
foreach($classes as $class){
	include_once("../App/$class.php");
} // to speed







	if (isset($_GET['act']) && $_GET['act'] == 'search') {
        if ($_GET['typeshow']== 'show') {
					$em = new item("","","","");
					$rows = $em->searchitem($_GET['handle'],'ASC', 'id');
					foreach ($rows as $row ) {
						
						echo "<div class='col-md-4 item'>";
							echo "<h3>";
								echo $row['name'];
							echo "</h3>";
							echo "<p>";
								echo $row['description'];
							echo "</p>";
							echo "<span>";
								echo $row['price'];
							echo "</span>";
							echo "<p>";
								echo $row['type'];
							echo "</p>";
							echo "<div>";
								?>
								<button class="btn waves-effect waves-light"  onclick="buy(<?php echo $row['id'] ?>)">buy</button>
								&nbsp;
								<?php
							echo "</div>";
						echo "</div>";
					}
				}

				if ($_GET['typeshow']== 'showall') {

					$em = new item("","","","");
					$rows = $em->allitem();
					foreach ($rows as $row ) {
						
						echo "<div class='col-md-4 item'>";
							echo "<h3>";
								echo $row['name'];
							echo "</h3>";
							echo "<p>";
								echo $row['description'];
							echo "</p>";
							echo "<span>";
								echo $row['price'];
							echo "</span>";
							echo "<p>";
								echo $row['type'];
							echo "</p>";
							echo "<div>";
								?>
								<button class="btn waves-effect waves-light"  onclick="buy(<?php echo $row['id'] ?>)">buy</button>
								&nbsp;
								<?php
							echo "</div>";
						echo "</div>";
					}
				}
	}

	if (isset($_GET['act']) && $_GET['act'] == 'buy') {
		$em = new item("","","","");
		$user = new user('','','','');
		$em->buyitem($_GET['ID'],$user->selectuserbyemail($_SESSION['user']));
		$rows = $em->allitem();
		foreach ($rows as $row ) {
						
						echo "<div class='col-md-4 item'>";
							echo "<h3>";
								echo $row['name'];
							echo "</h3>";
							echo "<p>";
								echo $row['description'];
							echo "</p>";
							echo "<span>";
								echo $row['price'];
							echo "</span>";
							echo "<p>";
								echo $row['type'];
							echo "</p>";
							echo "<div>";
								?>
								<button class="btn waves-effect waves-light"  onclick="buy(<?php echo $row['id'] ?>)">buy</button>
								&nbsp;
								<?php
							echo "</div>";
						echo "</div>";
					}

	}









?>

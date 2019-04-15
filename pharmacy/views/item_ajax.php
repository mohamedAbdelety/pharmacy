<?php





$classes= ['config', 'item'];
foreach($classes as $class){
	include_once("../App/$class.php");
} // to speed







	if (isset($_GET['act']) && $_GET['act'] == 'search') {
        if ($_GET['typeshow']== 'show') {
					$em = new item("","","","");
					$rows = $em->searchitem($_GET['handle'],'ASC', 'id');
					foreach ($rows as $row ) {
						echo "<tr>";
							echo "<td>";
								echo $row['name'];
							echo "</td>";
							echo "<td>";
								echo $row['type'];
							echo "</td>";
							echo "<td>";
								echo $row['price'];
							echo "</td>";
							echo "<td>";
								echo $row['description'];
							echo "</td>";
							echo "<td>";
								?>
								<button class="btn waves-effect waves-light red "  onclick="operation('delete',<?php echo $row['id'] ?>)">delete</button>
								&nbsp;
								<?php
								echo "<a href='item_edit.php?id=".$row['id']."' class='btn  waves-effect waves-light edit'>edit</a>";
							echo "</td>";
						echo "</tr>";
					}
				}

				if ($_GET['typeshow']== 'showall') {

					$em = new item("","","","");
					$rows = $em->allitem();
					foreach ($rows as $row ) {
						echo "<tr>";
							echo "<td>";
								echo $row['name'];
							echo "</td>";
							echo "<td>";
								echo $row['type'];
							echo "</td>";
							echo "<td>";
								echo $row['price'];
							echo "</td>";
							echo "<td>";
								echo $row['description'];
							echo "</td>";
							echo "<td>";
								?>
								<button class="btn waves-effect waves-light red "  onclick="operation('delete',<?php echo $row['id'] ?>)">delete</button>
								&nbsp;
								<?php
								echo "<a href='item_edit.php?id=".$row['id']."' class='btn  waves-effect waves-light edit'>edit</a>";
							echo "</td>";
						echo "</tr>";
					}
				}
	}

	if (isset($_GET['act']) && $_GET['act'] == 'delete') {
		$em = new item("","","","");
		$em->deleteitem($_GET['ID']);
		$rows = $em->allitem();
		foreach ($rows as $row ) {
						echo "<tr>";
							echo "<td>";
								echo $row['name'];
							echo "</td>";
							echo "<td>";
								echo $row['type'];
							echo "</td>";
							echo "<td>";
								echo $row['price'];
							echo "</td>";
							echo "<td>";
								echo $row['description'];
							echo "</td>";
							echo "<td>";
								?>
								<button class="btn waves-effect waves-light red "  onclick="operation('delete',<?php echo $row['id'] ?>)">delete</button>
								&nbsp;
								<?php
								echo "<a href='item_edit.php?id=".$row['id']."' class='btn  waves-effect waves-light edit'>edit</a>";
							echo "</td>";
						echo "</tr>";
					}

	}


























?>

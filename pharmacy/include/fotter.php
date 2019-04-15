<?php
	$js = '../public/Js/';
	$materJs = '../public/library/materialize/js/materialize.min.js';
?>
		<script type="text/javascript" src= "<?php echo $js?>jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src= "<?php echo $js?>bootstrap.min.js"></script>
		<script type="text/javascript" src= "<?php echo $materJs?>"></script>
		<script type="text/javascript" src= "<?php echo $js?>bootstrap-datepicker.min.js"></script>
		<script src="<?php echo $lib ?>jquery.nicescroll-master/demo/js/jquery.nicescroll.min.js"></script>
		<script src="<?php echo $lib ?>skitter-master/examples/js/jquery.easing.1.3.js"></script>
		<script src="<?php echo $lib ?>skitter-master/dist/jquery.skitter.min.js"></script>
		<script src="<?php echo $lib ?>mix/dist/mixitup.min.js"></script>


		<script type="text/javascript" src="<?php echo $js?>plugin.js"></script>
		<?php

				echo "<script src='".$js."dashboard.js'></script>";
		?>

	</body>
</html>

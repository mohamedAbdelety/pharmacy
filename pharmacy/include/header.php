<?php



$classes= ['config', 'user','item'];

foreach($classes as $class){
	include_once("../App/$class.php");
}




 $css = '../public/css/';
 $mater = '../public/library/materialize/css/materialize.min.css';
 $lib = '../public/library/';
?>


<!DOCTYPE html>
<html>
	<head>
		<meta name="description" content="">
        <meta charset="utf-8">
        <link rel="icon" href="../public/image/logo.png">
		<title><?php echo $titleName?></title>
		<link rel="stylesheet" type="text/css" href="">
		<link rel="stylesheet" type="text/css" href="<?php echo $css ?>font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $css ?>bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $lib ?>WOW-master/css/libs/animate.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $lib ?>skitter-master/dist/skitter.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $lib ?>shuffle/shuffle-styles.css">

		<?php //if(isset($titleName) && $titleName == 'freelancing | signup')
		//{

			echo	"<link rel='stylesheet' href='".$mater."'>";

		//}?>
		<link rel="stylesheet" type="text/css" href="<?php echo $css ?>plugin.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $css ?>bootstrap-datepicker.min.css">
		<style type="text/css">
			body{
				direction: ltr;
			}
			.create_item{
				width: 600px;
			    margin-left: auto;
			    margin-right: auto;
			    margin-top: 70px;
			}
			.create_item button{
				margin-left: auto;
				margin-right: auto;
				margin-top: 30px;
			}
			.item{
				background: #fff;
			    padding-bottom: 10px;
			    border: 1px solid #eee;
			    box-shadow: 2px 5px 5px 0px #737171;
			}
		</style>
	</head>
	<!-- <body style="direction: rtl"> -->

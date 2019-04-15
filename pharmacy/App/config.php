<?php

include_once('core.php');
$Config["host"] = "localhost";
$Config["user"] = "root";
$Config["Pwd"] = "";
$Config["dbName"] = "pharmacy";



$app = new Core($Config["host"],$Config["user"],$Config["Pwd"],$Config["dbName"]);

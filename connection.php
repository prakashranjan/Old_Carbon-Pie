<?php
$mysql_hostname = "localhost";
$mysql_user = "873630";
$mysql_password = "abdulkalam";
$mysql_database = "873630";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
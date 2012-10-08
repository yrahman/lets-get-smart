<?php
//MYSQL CONNECTIONS FOR HELPER MODS
$host       = SQL_IP;
$user       = SQL_USER;
$pwd        = SQL_PWD;
$db         = SQL_DATABASE;
mysql_connect($host,$user,$pwd)or die('Fail To Connect Database Server');
//echo "connected";
mysql_select_db($db)or die('Fail To Connect Database Server');
//echo "selected";
?>
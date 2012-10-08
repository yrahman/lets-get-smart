<?php
// include("/var/www/lgs/config.php");
define("SQL_IP", "localhost");
  define("SQL_USER", "sindu");
  define("SQL_PWD","blogsindu");
  define("SQL_DATABASE","lgs");
mysql_connect(SQL_IP,SQL_USER,SQL_PWD);
mysql_select_db("lgs");
$date = date("Y-m-d H:i:s");
$query = "UPDATE assignments SET status='1' WHERE status='0' AND start_time <= '".$date."' AND start_time!='0000-00-00 00:00:00'";
mysql_query($query);
// echo SQL_USER;
?>
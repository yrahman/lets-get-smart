<?php
/*
This file is for cron auto assignment (Advance only)
*/
include(str_replace("cron","",realpath(__FILE__))."config.php");
//define("SQL_IP", "localhost");
//  define("SQL_USER", "root");
//  define("SQL_PWD","");
//  define("SQL_DATABASE","lgs");
mysql_connect(SQL_IP,SQL_USER,SQL_PWD);
mysql_select_db(SQL_DATABASE);
$date = date("Y-m-d H:i:s");
$query = "UPDATE assignments SET status='1' WHERE status='0' AND start_time <= '".$date."' AND start_time!='0000-00-00 00:00:00'";
mysql_query($query);

?>
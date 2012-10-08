<?php

  require '../config.php';
  require '../db/debug.php';
  require '../db/mysql2.php';
  require "../lib/util.php";
  require "../lib/webcontrols.php";
  require "../db/orm.php";
  require "../db/access_db.php";
  require "../db/config_db.php";

// if(isset($_POST["ajax"])){
	// xyz94zyx::xyz95zyx(array("1","3","99"));
// }else{
// xyz94zyx::xyz95zyx("1");
// }
    
    if(isset($_POST["ajax"]))
    {
		if(isset($_POST["sch"])){
			$cat_id=$_POST["sch_id"];            
            $a1ults_test = xyz62zyx::xyz64zyx("classes", array(), array("sch_id"=>$cat_id),"");
            $tests_drop = xyz110zyx::xyz113zyx("drpUserCls",$a1ults_test, "id", "class", "","");
            echo $tests_drop;
		}else{
         // echo $grid_html;
		}
    }

    
?>
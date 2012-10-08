<?php
session_start();

  require 'config.php';
  require 'db/debug.php';
  require 'db/mysql2.php';
  require "lib/util.php";
  require "db/orm.php";
  require "db/access_db.php";
  require "db/config_db.php";
  require "lib/validations.php";
  require "lib/webcontrols.php";
	$q=config::get("signup");
	$r=xyz39zyx::xyz57zyx($q);
	if($r['value']=="1"){
		header("location:login.php");
	}
  $RUN = 1;
 $_SESSION['user_type'] = "99";
  $msg = "";
	
	$z_c2 ="";
	$z_c3 ="";
  	$a1ults_c1 = xyz62zyx::xyz64zyx("schools", array(), array() , "id");
    $user_sch_options = xyz110zyx::xyz111zyx($a1ults_c1, "id", "sch_name",$z_c2);
	$a1ults_c2 = xyz62zyx::xyz64zyx("classes", array(), array() , "id");
    $user_cls_options = xyz110zyx::xyz111zyx($a1ults_c2, "id", "class",$z_c3);
  
  if(isset($_POST['btnSubmit']))
  {
  if(strpos($_POST["txtLogin"], " ") !== false){
	  $msg = "Username can't contain space";
  }
  elseif($_POST["txtLogin"]!=""){
  $txtLogin = xyz39zyx::xyz60zyx(trim($_POST['txtLogin']));
  $a1ults = xyz1zyx::xyz2zyx($txtLogin, "", "", false);
  $has_result = xyz39zyx::xyz59zyx($a1ults);      
  if($has_result!=0)
  {
		$msg = "User Exist";
  }else{
		if(!isset($_GET["id"]))
        {
            xyz62zyx::xyz66zyx("users", array("Name"=>trim(ucfirst($_POST["txtName"])),
                                    "Surname"=>trim(ucfirst($_POST["txtName"])),
                                    "UserName"=>trim($_POST["txtLogin"]),
                                     "Password"=>md5(trim($_POST["txtPassword"])),
                                     "added_date"=>xyz96zyx::xyz97zyx(),
                                     "email"=>trim($_POST["txtEmail"]),
                                     "user_type"=>"2",
                                     "sch"=>trim($_POST["drpUserSch"]),
                                     "cls"=>trim($_POST["drpUserCls"])
                                   ));
        }
        else
        {
            $c2=array("Name"=>trim($_POST["txtName"]),
                                    "Surname"=>trim($_POST["txtSurname"]),
                                     "email"=>trim($_POST["txtEmail"]),
                                     "user_type"=>trim($_POST["drpUserType"]),
                                     "sch"=>trim($_POST["drpUserSch"]),
                                     "cls"=>trim($_POST["drpUserCls"])
                                   );
            if(isset($_POST["chkEdit"]))
            {
                $c2["Password"]=md5(trim($_POST["txtPassword"]));
            }
            xyz62zyx::xyz70zyx("users", $c2, array("UserID"=>$id));
        }
		$_SESSION['err'] = "cux";
        header("location:login.php?err=cux");
  }
  }else{
		$msg = "User can't be empty";
  }
}

  include "signup_tmp.php";


?>

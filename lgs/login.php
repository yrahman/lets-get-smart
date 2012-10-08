<?php


  require 'config.php';
  require 'db/debug.php';
  require 'db/mysql2.php';
  require 'db/cats_db.php';
  require "lib/util.php";
  require "db/orm.php";
  require "db/access_db.php";
  require "db/config_db.php";
  require "lib/validations.php";
  require "lib/webcontrols.php";

  $RUN = 1;
	$q=config::get("signup");
	$r=xyz39zyx::xyz57zyx($q);
	if($r['value']=="1"){
		$dsp_reg = "none";
	}else{
		$dsp_reg = "";
	}
  $msg = "";$clr="red";
  if(@$_GET['err']=="cux"&&isset($_SESSION['err'])){
		$msg = "Registration successfull, Pease login";
		$clr = "green";
  }
  if(isset($_POST['btnSubmit']))
  {
      $txtLogin = xyz39zyx::xyz60zyx(trim($_POST['txtLogin']));
      $txtPass = md5(trim($_POST['txtPass']));
      $password="";
      //$txtPassImp= Imported_Users_Password_Hash(trim($_POST['txtPass']));
      $a1ults = xyz1zyx::xyz2zyx($txtLogin, "", "", false);
	  // echo $a1ults;exit;
      $has_result = xyz39zyx::xyz59zyx($a1ults);
	  // echo $has_result;exit;
      if($has_result!=0)
      {
          $a3 = xyz39zyx::xyz57zyx($a1ults);
          if($a3['imported']=="0") $password = $txtPass ;
          else $password = Imported_Users_Password_Hash(trim($_POST['txtPass']), $a3['password']);

          if($password==$a3['password'])
          {
            $_SESSION['txtLogin'] = $txtLogin;
            $_SESSION['txtPass'] = $password;
            $_SESSION['txtPassImp'] = $password;
            $_SESSION['user_id'] = $a3['user_id'];
            $_SESSION['user_type'] = $a3['user_type'];
            $_SESSION['sch'] = $a3['sch'];
            $_SESSION['cls'] = $a3['cls'];
            $_SESSION['cats'] = $a3['cats'];
            if($a3['user_type']=="1"){
			$qqq = xyz14zyx::xyz15zyx();
			$xxx = xyz39zyx::xyz49zyx($qqq);
			$ccc =array();
			while($zzz=xyz39zyx::xyz57zyx($xxx)){
				$ccc[]=$zzz['id'];
			}
			$_SESSION['cats'] = implode(",",$ccc);
            header("location:index.php?module=quizzes");
			}
			elseif($a3['user_type']=="3"){
			header("location:index.php?module=quizzes");
			}
            else{
            header("location:index.php?module=active_assignments");
			}
          }
      }
      $msg = "User or password is incorrect";
  }
  
  
  unset($_SESSION['err']);
  include "login_tmp.php";


?>

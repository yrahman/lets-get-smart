<?php if(!isset($RUN)) { exit(); } ?>
<?php

xyz94zyx::xyz95zyx("1");

    $c3 = new xyz103zyx("btnSave");
    $c3->xyz105zyx("txtLogin", "empty", "Login cannot be empty","");
    $c3->xyz105zyx("txtPassword", "empty", "Password cannot be empty","");
    $c3->xyz105zyx("drpUserType", "notequal", "Please, select user type", "-1");

    $z1="-1";
    $pswlbl_display="none";
    $psw_display="";
    $login_disabled="";
    $mode="add";
	$cats =array();
	$cts =array();
    if(isset($_GET["id"]))
    {
        $pswlbl_display="";
        $psw_display="none";
        $login_disabled="read-only";
        $mode="edit";
        $id = xyz96zyx::xyz98zyx("?module=local_users");
        $rs_users=xyz62zyx::xyz64zyx("users", array(), array("UserID"=>$id), "");

        if(xyz39zyx::xyz59zyx($rs_users) == 0 ) header("location:?module=local_users");

        $a3_users=xyz39zyx::xyz57zyx($rs_users);
        $txtName = $a3_users["Name"];
        $txtSurname = $a3_users["Surname"];
        $txtEmail = $a3_users["email"];
        $txtLogin = $a3_users["UserName"];
        $z1 = $a3_users["user_type"];
		//fixme rahman
        $z_c2 = $a3_users["sch"];
        $z_c3 = $a3_users["cls"];

        $txtPasswordValue="********";
    }
    
    $a1ults = xyz62zyx::xyz64zyx("user_types", array(), array() , "id");
    $user_type_options = xyz110zyx::xyz111zyx($a1ults, "id", "type_name",$z1);
	
	//fixme rahman
    $a1ults_c1 = xyz62zyx::xyz64zyx("schools", array(), array() , "id");
    $user_sch_options = xyz110zyx::xyz111zyx($a1ults_c1, "id", "sch_name",$z_c2);
	
    $a1ults_c2 = xyz62zyx::xyz64zyx("classes", array(), array() , "id");
    $user_cls_options = xyz110zyx::xyz111zyx($a1ults_c2, "id", "class",$z_c3);

    $a1ults_c3 = xyz62zyx::xyz64zyx("cats", array(), array("id"=>explode(",",$_SESSION['cats'])),"");
    $user_cats_options = xyz110zyx::xyz111zyx($a1ults_c3, "id", "cat_name", $z1);

    if(isset($_POST["btnSave"]) && $c3->xyz107zyx())
    {
    $_POST["drpUserSch"] = ($_POST["drpUserType"]=="1"||$_POST["drpUserType"]=="-1")?$_POST["drpUserSch"]="0":$_POST["drpUserSch"]=$_POST["drpUserSch"];
    $_POST["drpUserCls"] = ($_POST["drpUserType"]=="1"||$_POST["drpUserType"]=="-1")?$_POST["drpUserCls"]="0":$_POST["drpUserCls"]=$_POST["drpUserCls"];
    $_POST["drpUserCats"] = ($_POST["drpUserType"]=="1"||$_POST["drpUserType"]=="-1")?$_POST["drpUserCats"]="0":$_POST["drpUserCats"]=$_POST["drpUserCats"];
    $cats = $_POST["drpUserCats"];
    foreach($cats as $cat){
      $cts[] = $cat;
    }
        if(!isset($_GET["id"]))
        {
            xyz62zyx::xyz66zyx("users", array("Name"=>trim(ucfirst($_POST["txtName"])),
                                    "Surname"=>trim(ucfirst($_POST["txtSurname"])),
                                    "UserName"=>trim($_POST["txtLogin"]),
                                     "Password"=>md5(trim($_POST["txtPassword"])),
                                     "added_date"=>xyz96zyx::xyz97zyx(),
                                     "email"=>trim($_POST["txtEmail"]),
                                     "user_type"=>trim($_POST["drpUserType"]),
                                     "sch"=>trim($_POST["drpUserSch"]),
                                     "cls"=>trim($_POST["drpUserCls"]),
				     "cats"=>trim(@implode(",",$cts))
                                   ));
        }
        else
        {
            $c2=array("Name"=>trim($_POST["txtName"]),
                                    "Surname"=>trim(ucfirst($_POST["txtSurname"])),
                                     "email"=>trim(ucfirst($_POST["txtEmail"])),
                                     "user_type"=>trim($_POST["drpUserType"]),
                                     "sch"=>trim($_POST["drpUserSch"]),
                                     "cls"=>trim($_POST["drpUserCls"]),
				     "cats"=>trim(implode(",",$cts))
                                   );
            if(isset($_POST["chkEdit"]))
            {
                $c2["Password"]=md5(trim($_POST["txtPassword"]));
            }
            xyz62zyx::xyz70zyx("users", $c2, array("UserID"=>$id));
        }

        header("location:?module=local_users");
    }


    if(isset($_POST["ajax"]))
    {
         $a1ults = xyz62zyx::xyz64zyx("users", array(), array("UserName"=>$_POST["login_to_check"]) , "");
         $count = xyz39zyx::xyz59zyx($a1ults);
         echo $count;
    }

    function desc_func()
    {
        return "Add/Edit user";
    }

?>

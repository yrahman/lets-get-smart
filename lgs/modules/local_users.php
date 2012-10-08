<?php if(!isset($RUN)) { exit(); } ?>
<?php
if(isset($_POST["ajax"])){
xyz94zyx::xyz95zyx(array("1","3"));
}else{
xyz94zyx::xyz95zyx("1");
}
    require "grid.php";
    require "db/users_db.php";
    require "db/config_db.php";

	// $all = xyz91zyx::xyz92zyxRow();
	// $allq = xyz39zyx::xyz49zyx($all);
	// $alldt = xyz39zyx:xyz59zyx($allq);
	// echo $allq;exit;
	// $perpg = 10;
	// $allpg = ceil($alldt / $perpg);
	// $pg = (isset($_GET['pg']))?$_GET['pg']:1;
	// $lim = ($pg - 1) * $perpg;
	// $off = $perpg;
	
	// function paginer(){
		// global $alldt;
		// $is = "";
		// for($i=1;$i<$alldt;$i++){
			// $is .= $i;
		// }
		// return $is;
	// }
	
	$b2 = array("No","Name","Added date","User type","&nbsp;","&nbsp;");
	$b3 = array("Name"=>"text","added_date"=>"short date","type_name"=>"text");
	if(isset($_POST["btnFlt"])&&!isset($_POST["nochk"])){
		
		$b2 = array(" ", "Name", "Email");
		$b3 = array("Name"=>"text","email"=>"text");
	}
    $z2 = new grid($b2,$b3, "index.php?module=local_users");
    $z2->edit_link="index.php?module=add_edit_user";
    $z2->id_column="UserID";
	$z2->num=true;
	if(isset($_POST["btnFlt"])&&!isset($_POST["nochk"])){	
	$z2->delete=false;
	$z2->edit=false;
	$z2->num=false;
	$z2->checkbox=true;
	$z2->id_column="UserID";
	$z2->selected_ids=$local_user_ids;
	$z2->nostyle=true;
	}

    if($z2->IsClickedBtnDelete())
    {
       xyz62zyx::xyz68zyx("users", array("UserID"=>$z2->process_id));
    }
	if(isset($_POST["btnFlt"]))
	{
		if(isset($_POST['noadmin'])){
			$y1 = xyz91zyx::xyz92zyx($_POST['drpUserSch'],$_POST['drpUserCls'],$_POST['noadmin']);
		}elseif(isset($_POST['guru'])){
			$y1 = xyz91zyx::xyz92zyx($_POST['drpUserSch'],$_POST['drpUserCls'],"guru");
		}else{
			$y1 = xyz91zyx::xyz92zyx($_POST['drpUserSch'],$_POST['drpUserCls']);
		}
		$t1 = xyz39zyx::xyz49zyx($y1);
		$total = xyz39zyx::xyz59zyx($t1);
		$z2->DrowTable($y1);
		$grid_html = $z2->table;
		$z_c2 = $_POST['drpUserSch'];
		$z_c3 = $_POST['drpUserCls'];
	}else{
		$y1 = xyz91zyx::xyz92zyx();
		$t1 = xyz39zyx::xyz49zyx($y1);
		$total = xyz39zyx::xyz59zyx($t1);
		$z2->DrowTable($y1);
		$grid_html = $z2->table;
	}

    if(isset($_POST["ajax"]))
    {
		if(isset($_POST["signupx"])){
			if(!isset($_POST["value"])){
				$q=config::get("signup");
				$r=xyz39zyx::xyz57zyx($q);
				echo $r['value'];
			}else{
				$signup = ($_POST["value"] == "on") ? 1 : 0;
				$c2=array("value"=>$signup);
				xyz62zyx::xyz70zyx("config", $c2, array("param"=>"signup"));
			}
		}else{
         echo $grid_html;
		}
    }

	$a1ults_c1 = xyz62zyx::xyz64zyx("schools", array(), array() , "id");
    $user_sch_options = xyz110zyx::xyz111zyx($a1ults_c1, "id", "sch_name",$z_c2);
	$a1ults_c2 = xyz62zyx::xyz64zyx("classes", array(), array() , "id");
    $user_cls_options = xyz110zyx::xyz111zyx($a1ults_c2, "id", "class",$z_c3);
	
    function desc_func()
    {
        return "Local users";
    }

?>
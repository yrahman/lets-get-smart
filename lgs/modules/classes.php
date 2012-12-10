<?php if(!isset($RUN)) { exit(); } ?>
<?php
if(isset($_POST["ajax"])){
	xyz94zyx::xyz95zyx(array("1","3","99"));
}else{
xyz94zyx::xyz95zyx("1");
}
    require "grid.php";
    require "db/classes_db.php";

    $b2 = array("Class Name", "&nbsp;", "&nbsp;");
    $b3 = array("class"=>"test");
    
    $z2 = new grid($b2,$b3, "index.php?module=classes");

    $z2->process_html_command="process_cls_status";
    $z2->edit=false;

	
    function process_cls_status($a3)
    {
        $editjs="EditCls('".$a3['class']."','".$a3['id']."')";
        $b1="<td><a href='#edit' onclick=\"".$editjs."\">Edit</a></td>";
        return $b1;
    }

    if(isset($_POST["add"]))
    {
        if($_POST["add"]=="adding")
        {
            clazz::add($_POST["name"],$_GET['sch_id']);
        }
        else
        {            
            clazz::upd($_POST["name"],$_POST["hdnT"]);
        }
    }

    if($z2->IsClickedBtnDelete())
    {
       clazz::del($z2->process_id);
    }    
    //$z2->links =array("Az"=>"az.php" , "En"=>"english.php");
    $y1 = clazz::get($_GET['sch_id']);
    $z2->DrowTable($y1);
    $grid_html = $z2->table;    

    if(isset($_POST["ajax"]))
    {
		if(isset($_POST["sch"])){
			$cat_id=$_POST["sch_id"];            
            $a1ults_test = xyz62zyx::xyz64zyx("classes", array(), array("sch_id"=>$cat_id),"");
            $tests_drop = xyz110zyx::xyz113zyx("drpUserCls",$a1ults_test, "id", "class", $z1_test,"ShowCls()");
            echo $tests_drop;
		}else{
         echo $grid_html;
		}
    }

    function desc_func()
    {
        return "Classes";
    }
    
?>
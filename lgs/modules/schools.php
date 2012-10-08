<?php if(!isset($RUN)) { exit(); } ?>
<?php
xyz94zyx::xyz95zyx("1");
    require "grid.php";
    require "db/schools_db.php";

    $b2 = array("School Name", "Classes","&nbsp;", "&nbsp;");
    $b3 = array("sch_name"=>"test");
    
    $z2 = new grid($b2,$b3, "index.php?module=schools");

    $z2->process_html_command="process_sch_status";
    $z2->edit=false;

	$z2->id_links=(array("Classes"=>"?module=classes"));
	$z2->id_link_key="sch_id";
	
    function process_sch_status($a3)
    {
        $editjs="EditSch('".$a3['sch_name']."','".$a3['id']."')";
        $b1="<td><a href='#edit' onclick=\"".$editjs."\">Edit</a></td>";
        return $b1;
    }

    if(isset($_POST["add"]))
    {
        if($_POST["add"]=="adding")
        {
            school::add($_POST["name"]);
        }
        else
        {            
            school::upd($_POST["name"],$_POST["hdnT"]);
        }
    }

    if($z2->IsClickedBtnDelete())
    {
       school::del($z2->process_id);
    }    
    //$z2->links =array("Az"=>"az.php" , "En"=>"english.php");
    $y1 = school::get();
	$t1 = xyz39zyx::xyz49zyx($y1);
	$total = xyz39zyx::xyz59zyx($t1);
    $z2->DrowTable($y1);
    $grid_html = $z2->table;    

    if(isset($_POST["ajax"]))
    {
         echo $grid_html;
    }

    function desc_func()
    {
        return "Schools";
    }
    
?>
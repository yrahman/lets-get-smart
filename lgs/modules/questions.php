<?php if(!isset($RUN)) { exit(); } ?>
<?php

xyz94zyx::xyz95zyx(array("1","3"));

    require "grid.php";
    require "db/questions_db.php";
    require "db/quiz_db.php";

    $quiz_id = xyz96zyx::xyz99zyx("quiz_id", "index.php?module=quizzes");

    $b2 = array("No","Question", "Type", "Point","Added date","&nbsp;","&nbsp;","&nbsp;","&nbsp;");
    $b3 = array("question_text"=>"text","question_type"=>"text" ,"point"=>"text","added_date"=>"short date");

    $z2 = new grid($b2,$b3, "index.php?module=questions&quiz_id=$quiz_id");
    $z2->edit_link="index.php?module=add_question&quiz_id=$quiz_id";

    //$z2->links=(array("Questions"=>"?module=questions"));
    $z2->commands=array("Up"=>"up", "Down"=>"down");
    $z2->num=true;

    if($z2->IsClickedBtnDelete())
    {
        xyz71zyx::xyz81zyx($z2->process_id);        
    }

    if($z2->IsClickedBtn("up"))
    {        
        xyz71zyx::xyz75zyx("up", $z2->process_id);        
    }

    if($z2->IsClickedBtn("down"))
    {
        xyz71zyx::xyz75zyx("down", $z2->process_id);
    }

    $y1 = xyz71zyx::xyz72zyx($quiz_id);
    $y1x = xyz83zyx::xyz84zyxId($quiz_id);
    $z2->DrowTable($y1);
    $grid_html = $z2->table;
	$qn = xyz39zyx::xyz49zyx($y1x);
	$qr = xyz39zyx::xyz57zyx($qn);
	$quiz_name = $qr['quiz_name'];
	$jumlah = $qr['jml'];

    if(isset($_POST["ajax"]))
    {
         echo $grid_html;
    }

    function desc_func()
    {
        return "Questions";
    }

?>
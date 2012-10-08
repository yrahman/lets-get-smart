<?php 
if(isset($_GET['print'])){
?>
<script>
window.print();
</script>
<?php
}
?>
<table width="100%">

<?php
require "config.php";
require "grid.php";
 require "db/asg_db.php";
 require "db/debug.php";
 require "db/mysql2.php";
 require "db/quiz_db.php";
 require "db/questions_db.php";
 require "lib/util.php";
 require "modules/qst_viewer.php";

 $id=xyz96zyx::xyz99zyx("quiz_id", "?module=quizzes");
 
$y1x = xyz83zyx::xyz84zyxId($id);
$qn = xyz39zyx::xyz49zyx($y1x);
$qr = xyz39zyx::xyz57zyx($qn);
$quiz_name = $qr['quiz_name'];
?><tr><td><table width="100%"><tr><td width="70">
Quiz Name</td> <td width="530">: <?php echo $quiz_name;?></td></tr>
<tr><td>Total</td> <td>: <?php echo $qr['jml'];?></td></tr>
<tr><td>Date</td> <td>: <?php echo $qr['added_date'];?></td></tr>
<tr><td colspan="2"><hr></td></tr></table></td></tr>
<?php
 $asg_res = xyz71zyx::xyz72zyx($id);
 $zzz =xyz39zyx::xyz49zyx($asg_res);
 $uq  = 0;
 function get_question($a3,$no)
 {
     global $id,$uq;

     $qst_viewer = new qst_viewer("#");
     // $qst_viewer->user_quiz_id=$id;

     $qst_viewer->show_prev=false;
     $qst_viewer->numb=$no;

     $qst_viewer->show_next=false;
     $qst_viewer->show_finish=false;
     // $qst_viewer->SetReadOnly();
     $qst_viewer->alpha=true;
     $qst_viewer->show_correct_answers=false;
     $qst_viewer->control_unq=$uq;
     $qst_viewer->BuildQuestionWithResultset($a3);
     $qst_html = $qst_viewer->html;
     $uq++;
     return $qst_html;
 }
 
 
// print_r($asg_res);exit;
$no=1;
while($a3 = xyz39zyx::xyz57zyx($zzz))
{
    ?>
    <tr>
        <td>
           
        </td>
    </tr>
    <tr>
        <td>
   <?php
    echo str_replace("<table ","<table width='100%' ",get_question($a3,$no));
    ?>
        </td>
    </tr>
    <?php
	$no++;
}
?>

</table>
<?php 
if(isset($_GET['print'])){
?>
<script>
window.close();
</script>
<?php
}
?>
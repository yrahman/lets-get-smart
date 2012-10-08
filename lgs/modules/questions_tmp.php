<?php if(!isset($RUN)) { exit(); } ?>
<span style="font-size:16px;" class="label">Quiz Name : <b><?php echo $quiz_name?></b></span>
<span style="font-size:15px;float:right" class="label">Total : <?php echo $jumlah?></span><br><br>
<p><a href="?module=add_question&quiz_id=<?php echo $quiz_id ?>">Add new question</a></p>
<div id="div_grid"><?php echo $grid_html ?></div>
    <br>
    <hr />

    <a href="?module=add_question&quiz_id=<?php echo $quiz_id ?>">Add new question</a>
<?php if(!isset($RUN)) { exit(); } ?>
<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 //PDF
?>

<table class="desc_text_bg" width="100%">
    <tr>
        <td width="200px">
            <span class="label">Category </span>
        </td>
		<td><span class="label">:</span></td>
        <td>
            <span class="label"><?php echo $cat_name ?><?php $_SESSION['cat_name'] = $cat_name?></span>
        </td>
    </tr>
    <tr>
        <td>
            <span class="label">Test</span>
        </td>
		<td><span class="label">:</span></td>
        <td>
            <span class="label"><?php echo $test_name ?><?php $_SESSION['test_name'] = $test_name?></span>
        </td>
    </tr>
    <tr>
        <td>
            <span class="label">Type</span>
        </td>
		<td><span class="label">:</span></td>
        <td>
            <span class="label"><?php echo $quiz_type ?><?php $_SESSION['quiz_type'] = $quiz_type?></span>
        </td>
    </tr>
    <tr>
        <td>
            <span class="label">Show results to user</span>
        </td>
		<td><span class="label">:</span></td>
        <td>
            <span class="label"><?php echo $show_results ?><?php $_SESSION['show_results'] = $show_results?></span>
        </td>
    </tr>
    <tr>
        <td>
            <span class="label">Results by</span>
        </td>
		<td><span class="label">:</span></td>
        <td>
            <span class="label"><?php echo $a1ults_by ?><?php $_SESSION['a1ults_by'] = $a1ults_by?></span>
        </td>
    </tr>
    <tr>
        <td>
            <span class="label">Success point/percent</span>
        </td>
		<td><span class="label">:</span></td>
        <td>
            <span class="label"><?php echo $pass_score ?><?php $_SESSION['pass_score'] = $pass_score?></span>
        </td>
    </tr>
    <tr>
        <td>
            <span class="label">Test time (in minutes)</span>
        </td>
		<td><span class="label">:</span></td>
        <td>
            <span class="label"><?php echo $test_time ?><?php $_SESSION['test_time'] = $test_time;$_SESSION['added_date'] = $add_date;?></span>
        </td>
    </tr>   
</table>

<br>
<table width="100%">
    <tr>
        <td><br></td>
    </tr>
    <tr>
       <td class="desc_text_bg2"><span class="label">Local users</span></td>
    </tr>
    <tr>
        <td>
<div id="divLU">
    <?php echo $grid_lu_html ?>
</div>
        </td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td class="desc_text_bg2"><span class="label">Imported users</span></td>
    </tr>
    <tr>
        <td>
<div id="divIU">
    <?php echo $grid_iu_html ?>
</div>
        </td>
    </tr>
</table>


<br>



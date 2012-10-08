<?php if(!isset($RUN)) { exit(); } ?>
<span class="label"><h3>Total Question : <?php echo xyz39zyx::xyz59zyx($asg_res); ?></h3></span>
<table width="100%">

<?php
// print_r(xyz39zyx::xyz57zyx($asg_res));
while($a3 = xyz39zyx::xyz57zyx($asg_res))
{
    ?>
    <tr>
        <td>
            <hr />
        </td>
    </tr>
    <tr>
        <td>
   <?php
    echo str_replace("<table ","<table width='100%' ",get_question($a3));
    ?>
        </td>
    </tr>
    <?php
}
?>

</table>


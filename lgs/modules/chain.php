<?php
ob_clean();
include 'mod_helper.php';

if ($_GET['sch']) {
    $sql = "SELECT * FROM  classes WHERE sch_id='$_GET[sch]'";
    $query = mysql_query($sql) or die('ERROR');
    while($array = mysql_fetch_array($query)){
        echo "<option value='$array[id]'>$array[class]</option>\n";
    }
    
}

exit();
?>
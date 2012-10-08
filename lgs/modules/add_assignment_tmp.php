<?php if(!isset($RUN)) { exit(); } ?>
<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<script language="JavaScript" type="text/javascript" src="lib/validations.js"></script>

<?php echo $c3->xyz109zyx(); ?>

<script language="javascript">
    function ChangeCat()
    {
        var id = querySt("id") !="-1" ? "&id="+querySt("id") : "";        
        var p_cat_id =$("#drpCats").val();        
         $.post("index.php?module=add_assignment"+id, {  ajax: "yes", fill_tests : "yes", cat_id : p_cat_id },
         function(data){
             document.getElementById('tdTests').innerHTML=data;
             document.getElementById('drpTests').style.width="150px";
        });
    }

    function ShowUsers(type)
    {
        if(type=='local')
        {            
            document.getElementById('tdLocalUsers').style.display="";
            document.getElementById('tdImportedUsers').style.display="none";            
            document.getElementById('btnLcl').style.color="red";
            document.getElementById('btnImp').style.color="black";
        }
        else
        {
            document.getElementById('tdLocalUsers').style.display="none";
            document.getElementById('tdImportedUsers').style.display="";
            document.getElementById('btnLcl').style.color="black";
            document.getElementById('btnImp').style.color="red";
        }
    }

    function CheckForm()
    {        
        return validate();
    }

    function ShowOptions()
    {
        var type = getType();
        var display = "none";
        if(type=="1") display="";
        else
        {
            document.getElementById('txtSuccessP').value="0";
            document.getElementById('txtTestTime').value="0";
        }

        for(var i=0;i<4;i++)
        {
            document.getElementById("drpTr"+i).style.display=display;
        }        
    }

    function getType()
    {
        var type = document.getElementById('drpType').options[document.getElementById('drpType').selectedIndex].value;
        return type;
    }
// ----------------
	function ChangeSch()
    {
        var id = querySt("id") !="-1" ? "&id="+querySt("id") : "";        
        var p_cat_id =$("#drpUserSch").val();        
         $.post("index.php?module=classes"+id, {  ajax: "yes", sch : "yes", sch_id : p_cat_id },
         function(data){
             document.getElementById('clsx').innerHTML=data;
             //document.getElementById('drpTests').style.width="150px";
        });
    }
	
	function getSch()
    {
        var sch = document.getElementById('drpUserSch').options[document.getElementById('drpUserSch').selectedIndex].value;
        return sch;
    }

	function ShowCls()
    {
		var id = querySt("id") !="-1" ? "&id="+querySt("id") : "";        
        var p_sch_id =$("#drpUserSch").val();        
        var p_cls_id =$("#drpUserCls").val();        
         $.post("index.php?module=local_users"+id, { btnFlt : "yes", ajax: "yes", drpUserSch : p_sch_id, drpUserCls : p_cls_id,noadmin:"yes"},
         function(data){
             document.getElementById('div_grid').innerHTML=data;
             //document.getElementById('drpTests').style.width="150px";
        });
    }
	
	function autoAss(){
		var auto = $("#autoassign").val();
		if(auto==1){
			$("#drpTrauto").show();
		}else{
			$("#drpTrauto").hide();
		}
	}
</script>

<form id="form1" method="post">    
    <table width="600px">
        <tr>
            <td class="desc_text" width="140">
                <span class="label">Category </span>
            </td><td><span class="label">:</span></td>
            <td>
                 <select class="simple_form" style="width:150px" id="drpCats" name="drpCats" onchange="ChangeCat()">
                <?php echo $cat_options ?>
                </select>
            </td>
        </tr>
         <tr>
            <td class="text_desc">
                <span class="label">Test </span>
            </td><td><span class="label">:</span></td>
            <td id="tdTests">
                <select class="simple_form" style="width:150px" id="drpTests" name="drpTests">
                     <option value="-1">Not Selected</option>
                </select>
            </td>
        </tr>
        <tr>
            <td class="text_desc">
                <span class="label">Type </span>
            </td><td><span class="label">:</span></td>
            <td>
                 <select class="simple_form" style="width:150px" id="drpType" name="drpType" onchange="ShowOptions()">
                     <?php echo $type_options ?>
                </select>
            </td>
        </tr>
           <tr id="drpTr0">
            <td class="text_desc">
               <span class="label">Show results to user </span>
            </td><td><span class="label">:</span></td>
            <td>
                 <select class="simple_form" style="width:150px" id="drpShowRes" name="drpShowRes">
                     <?php echo $showres_options ?>
                </select>
            </td>
        </tr>
           <tr id="x">
            <td class="text_desc">
               <span class="label">User review </span>
            </td><td><span class="label">:</span></td>
            <td>
                 <select class="simple_form" style="width:150px" id="x" name="drpReview">
                     <option value="1">Enable</option>
                     <option value="0">Disable</option>
                </select>
            </td>
        </tr>
          <tr id="drpTr1">
            <td class="text_desc">
                <span class="label">Results by </span>
            </td><td><span class="label">:</span></td>
            <td>
                 <select class="simple_form" style="width:150px"  id="drpResultsBy" name="drpResultsBy">
                     <?php echo $a1ult_options ?>
                </select>
            </td>
        </tr>
             <tr id="drpTr2">
            <td class="text_desc">
                <span class="label">Success point/percent </span>
            </td><td><span class="label">:</span></td>
            <td>
                 <input class="simple_field" style="width:50px" type="text" name="txtSuccessP" id="txtSuccessP" value="<?php echo xyz96zyx::xyz100zyx("txtSuccessP") ?>"  />
            </td>
        </tr>
	   <tr id="drpTr3">
            <td class="text_desc">
                <span class="label">Test time (in minutes) </span>
            </td><td><span class="label">:</span></td>
            <td>
                 <input class="simple_field" style="width:50px"  type="text" name="txtTestTime" id="txtTestTime" value="<?php echo xyz96zyx::xyz100zyx("txtTestTime") ?>"  />
            </td>
        </tr>
	   <tr id="drpTrat">
            <td class="text_desc">
                <span class="label">Automatic assign </span>
            </td><td><span class="label">:</span></td>
            <td>
				<?php
				$x="none";
				if($automated==1){
					$sel1="selected";
					$x="visible";
				}else{
					$sel0="selected";
					$x="none";
				}
				?>
                 <select class="simple_form" onchange="autoAss()" id="autoassign" name="autoassign">
					<option <?php echo $sel0?> value="0">Disable</option>
					<option <?php echo $sel1?> value="1">Enable</option>
				 </select>
            </td>
        </tr>
	   <tr id="drpTrauto" style="display:<?php echo $x ?>">
            <td class="text_desc">
                <span class="label">Pick date </span>
            </td><td><span class="label">:</span></td>
            <td>
				<?php
					$starttime=explode(" ",xyz96zyx::xyz100zyx("start_time"));
					$starttimex=explode("-",$starttime[0]);
					$starttimez=explode(":",$starttime[1]);
				?>
                 <input type="text" name="pick_date" value="<?php echo  $starttimex[1]."/".$starttimex[2]."/".$starttimex[0] ?>" class="simple_field pick_date" style="width:100px" />
				 <span class="label">Hours : </span>
				 <select class="simple_form" name="assHour">
					<?php
					for($i=0;$i<24;$i++){
						if(strlen($i)<2){
							$j="0".$i;
						}else{
							$j=$i;
						}
						$h=($j==$starttimez[0])?"selected":"";
						echo "<option $h value=\"$j\">$j</option>";
					}
					?>
				 </select>
				 <span class="label">Minutes : </span>
				 <select class="simple_form" name="assMin">
					<?php
					for($i=0;$i<60;$i++){
						if(strlen($i)<2){
							$j="0".$i;
						}else{
							$j=$i;
						}
						$h=($j==$starttimez[1])?"selected":"";
						echo "<option value=\"$j\">$j</option>";
					}
					?>
				 </select>
            </td>
        </tr>
	   <tr id="drpTr3xxx">
            <td class="text_desc" valign="top">
                <span class="label">Description </span>
            </td><td valign="top"><span class="label">:</span></td>
            <td>
                <textarea cols="50" rows="5" name="desc"></textarea>
            </td>
        </tr>
    </table>

    <br>
    <hr />
    <table width="100%">
        <tr>
            <td style="display:none;" colspan="2">
                <input id="btnLcl" class="simple_buttons" type="button" onclick="ShowUsers('local')" value="Local users" style="border:0;width:150px;color:red" />&nbsp;<input class="simple_buttons" id="btnImp" type="button" onclick="ShowUsers('imported')" value="Imported users" style="border:0;width:150px" />
            </td>            
        </tr>
        <tr>
            <td valign="top" id="tdLocalUsers"><br>
			<table style="border:0"><tr><td>
				<span class="label">Schools :</span></td><td>
				<select id="drpUserSch" name="drpUserSch" class="simple_form" onchange="ChangeSch()">
					<?php echo $user_sch_options ?>
				</select>
				</td><td>
				<span class="label">Class :</span></td><td id="clsx">
				<select id="drpUserCls" name="drpUserCls" class="simple_form" onchange="ShowCls()">
					<?php echo $user_cls_options ?>
				</select></td></tr></table>
				<br><br>
                 <div id="div_grid"><?php echo $grid_html ?></div>
            </td>
            <!--<td valign="top" id="tdImportedUsers" style="display:none">
                    <div id="div_grid"><?php echo $imported_grid_html ?></div>
            </td>-->
        </tr>
    </table>
    <br>
    <hr>
    <table>
        <tr>
            <td><input class="simple_buttons" onclick="return CheckForm()" style="width:100px" type="submit" id="btnSave" name="btnSave" value="Save" /></td>
            <td><input class="simple_buttons" onclick="javascript:window.location.href='index.php?module=assignments'" style="width:100px" type="button" id="btnCancel" name="btnCancel" value="Cancel" /></td>
        </tr>
    </table>
</form>
<script language="javascript">
    ChangeCat();
    ShowOptions();
    ChangeSch();
    ShowCls();
</script>
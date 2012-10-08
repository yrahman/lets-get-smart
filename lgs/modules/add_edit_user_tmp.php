<?php if(!isset($RUN)) { exit(); } ?>
<script language="JavaScript" type="text/javascript" src="lib/validations.js"></script>
<?php echo $c3->xyz109zyx(); ?>

<form method="post" name="form1">

<table class="desc_text">
    <tr>
        <td width="100px"><span class="label">Name :</span> </td>
        <td><input class="simple_field" type="textbox" id="txtName" name="txtName" value="<?php echo xyz96zyx::xyz100zyx("txtName") ?>" /></td>
    </tr>
    <tr>
        <td><span class="label">Surname :</span> </td>
        <td><input class="simple_field" type="textbox" id="txtSurname" name="txtSurname" value="<?php echo xyz96zyx::xyz100zyx("txtSurname") ?>" /></td>
    </tr>
    <tr>
        <td><span class="label">Email :</span> </td>
        <td><input class="simple_field" type="textbox" id="txtEmail" name="txtEmail" value="<?php echo xyz96zyx::xyz100zyx("txtEmail") ?>"  /></td>
    </tr>
    <tr>
        <td><span class="label">User type :</span> </td>
        <td>
            <select id="drpUserType" name="drpUserType" class="simple_form" onchange="typeIn()">
                <?php echo $user_type_options ?>
            </select>
        </td>
    </tr>
    <tr id="sch" style="display:none">
        <td><span class="label">Schools :</span> </td>
        <td>
            <select id="drpUserSch" name="drpUserSch" class="simple_form one">
                <?php echo $user_sch_options ?>
            </select>
        </td>
    </tr>
    <tr id="cats" style="display:none">
        <td><span class="label">Cats :</span> </td>
        <td>
            <select id="drpUserCats" name="drpUserCats[]" class="simples_form" style="background:#fff;border:1px solid #ccc;color:#696969;font-size:13px" multiple>
                <?php echo $user_cats_options ?>
            </select>
        </td>
    </tr>
    <tr id="cls" style="display:none">
        <td><span class="label">Class :</span> </td>
        <td>
            <select id="drpUserCls" name="drpUserCls" class="simple_form two">
                <?php echo $user_cls_options ?>
            </select>
        </td>
    </tr>
    <tr>
        <td><span class="label">Login :</span> </td>
        <td><input class="simple_field" <?php echo $login_disabled ?> type="textbox" id="txtLogin" name="txtLogin" value="<?php echo xyz96zyx::xyz100zyx("txtLogin") ?>" /></td>
    </tr>
     <tr>
        <td><span class="label">Password :</span> </td>
        <td>
            
            <input class="simple_field" style="display:<?php echo $psw_display ?>" type="textbox" id="txtPassword" name="txtPassword" value="<?php echo xyz96zyx::xyz100zyx("txtPasswordValue") ?>" />
                
                <label style="display:<?php echo $pswlbl_display ?>" id="lblPsw">******** </label><input class="s" type="checkbox" name="chkEdit" id="chkEdit" onclick="ProcessPasswordField()" style="display:<?php echo $pswlbl_display ?>"  /><label style="display:<?php echo $pswlbl_display ?>" for="chkEdit"><span class="label">Edit</span></label>
                
            
        </td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input class="simple_buttons" type="submit" name="btnSave" value="Save" id="btnSave" onclick="return checkform();" />
            <input class="simple_buttons" type="button" name="btnCancel" value="Cancel" id="btnCancel" onclick="javascript:window.location.href='?module=local_users'" />
        </td>
    </tr>
</table>
    <input type="hidden" id="hdnMode" value="<?php echo $mode ?>">
</form>
<script language="javascript">
//fixme rahman
window.setTimeout(function(){typeIn()},1000);
function typeIn(){
	var u_type_id =$("#drpUserType").val();
	if( u_type_id == 1){
		$("#sch").hide();
		$("#drpUserSch").val('-1');
		$("#cls").hide();
		$("#drpUserCls").val('-1');
		$("#cats").hide();
	}
	else if(u_type_id == 2){
		$("#sch").show();
		$("#cls").show();
		$("#cats").hide();
	}
	else if(u_type_id == 3){
	      $("#sch").show();
	      $("#cls").hide();
	      $("#cats").show();
	}else{
		
	}
}

function ProcessPasswordField()
{
    var checked = document.getElementById('chkEdit').checked ;
    if(checked)
    {
        document.getElementById('txtPassword').style.display="";
        document.getElementById('txtPassword').value="";
        document.getElementById('lblPsw').style.display="none";
    }
    else
    {
        document.getElementById('txtPassword').style.display="none";
        document.getElementById('txtPassword').value="********";
        document.getElementById('lblPsw').style.display="";
    }
}

function checkform()
{
    var mode = document.getElementById('hdnMode').value;

    if(mode=="edit")
    {
        return validate();
    }
    else
    {
        var user_name= document.getElementById('txtLogin').value
        var status=validate();
        if(status)
        {
             $.post("?module=add_edit_user", { login_to_check: user_name, ajax: "yes" },
             function(data){
                 if(data=="0")
                 {
                     return true;
                 }
                 else
                 {
                    alert('This login is already exists !');
                    return false;
                 }

            });
        }
        else
        {
            return false;
        }
    }
}
</script>
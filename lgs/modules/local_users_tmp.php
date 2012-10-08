<?php if(!isset($RUN)) { exit(); } ?>
<script language="javascript">
	function ChangeSch()
    {
        // var id = querySt("id") !="-1" ? "&id="+querySt("id") : "";        
        var p_cat_id =$("#drpUserSch").val();        
         $.post("index.php?module=classes", {  ajax: "yes", sch : "yes", sch_id : p_cat_id },
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
		// var id = querySt("id") !="-1" ? "&id="+querySt("id") : "";        
        var p_sch_id =$("#drpUserSch").val();        
        var p_cls_id =$("#drpUserCls").val();        
         $.post("index.php?module=local_users", { btnFlt : "yes", ajax: "yes",noadmin: "yes", nochk: "yes", drpUserSch : p_sch_id, drpUserCls : p_cls_id},
         function(data){
             document.getElementById('div_grid').innerHTML=data;
             //document.getElementById('drpTests').style.width="150px";
        });
    }
	
	function ShowType()
    {
		// var id = querySt("id") !="-1" ? "&id="+querySt("id") : "";        
        var p_sch_id =$("#drpUserSch").val();        
        var p_typ_id =$("#drpUserType").val();        
         $.post("index.php?module=local_users", { btnFlt : "yes", ajax: "yes",guru:"yes", nochk: "yes", drpUserSch : p_sch_id, drpUserCls : "no", drpUserType : p_typ_id},
         function(data){
             document.getElementById('div_grid').innerHTML=data;
             //document.getElementById('drpTests').style.width="150px";
        });
    }
	
	function disab(a){
		if(a=="ok"){
		if($("#signupx").is(':checked')){
			var valuex = "on";
		}else{
			var valuex = "wtf";
		}
		$.post("index.php?module=local_users", { ajax: "yes", signupx: "yes", value : valuex},
         function(data){
			// if(data=="1"){
				// $("#signupx").toggle(this.checked);
			// }
             //document.getElementById('div_grid').innerHTML=data;
        });
		}else{
			$.post("index.php?module=local_users", { ajax: "yes", signupx: "yes"},
			 function(data){
				if(data=="1"){
					$("#signupx").attr('checked',true)
				}
				 //document.getElementById('div_grid').innerHTML=data;
			});
		}
	}
</script>
<form action="" method="post">
	<table style="border:0"><tr><td>
				<span class="label">Schools :</span></td><td>
				<select id="drpUserSch" name="drpUserSch" class="simple_form" onchange="ChangeSch()">
					<?php echo $user_sch_options ?>
				</select>
				</td>
				<td>
					<span class="label">Class :</span>
				</td>
				<td id="clsx">
					<select id="drpUserCls" name="drpUserCls" class="simple_form" onchange="ShowCls()">
						<?php echo $user_cls_options ?>
					</select>
				</td>
				<td>
					<span class="label"> Type :</span>
				</td>
				<td id="type">
					<select id="drpUserType" name="drpUserType" class="simple_form" onchange="ShowType()">
						<option value="0">Not Selected</option>
						<option value="3">Guru</option>
					</select>
				</td>
				<td><span class="label">Disable register :</span> <input id="signupx" onchange="disab('ok')" class="simple_zform" type="checkbox"></td></tr></table>
</form>
<p><a href="?module=add_edit_user">Add new user</a><span style="font-size:15px;float:right" class="label">Total users: <?php echo $total?></p>
<div id="div_grid"><?php echo $grid_html ?></div>
    <br>
    <hr />

    <a href="?module=add_edit_user">Add new user</a>
<script language="javascript">;
   // ChangeSch();
   // ShowCls();
   disab();
</script>
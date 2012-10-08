<?php if(!isset($RUN)) { exit(); } ?>
<script language="JavaScript" type="text/javascript" src="lib/validations.js"></script>

<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "exact",
		elements: "elm1",
		theme : "advanced",
		skin : "o2k7",
		plugins : "imageupload,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,imageupload,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/word.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->

<form id="form1" method="post" onsubmit="return submitForm();" enctype="multipart/form-data">
<table class="desc_text" style="width:850px">
    <tr>
        <td valign="top">
            <span class="label">Question :</span>
        </td>
        <td>
            <?php// $CKEditor->editor("txtQstsEd", $txtQsts) ?>
			<textarea id="elm1" name="txtQstsEd" rows="15" cols="80" style="width: 80%"><?php echo $txtQsts?></textarea>
        </td>
    </tr>
    <tr>
        <td>
            <span class="label">Point:</span>
        </td>
        <td>
            <input class="simple_field" style="width:100px" type="text" id="txtPoint" value="<?php echo xyz96zyx::xyz100zyx("txtPoint") ?>" name="txtPoint">
        </td>
    </tr>
    <tr>
        <td valign="top">
            <span class="label">Header text :</span>
        </td>
        <td>
            <textarea class="simple_field" style="width:100%;height:70px" id="txtHeader" name="txtHeader"><?php echo xyz96zyx::xyz100zyx("txtHeader") ?></textarea>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <span class="label">Footer text :</span>
        </td>
        <td>
            <textarea class="simple_field" style="width:100%;height:70px" id="txtFooter" name="txtFooter"><?php echo xyz96zyx::xyz100zyx("txtFooter") ?></textarea>
        </td>
    </tr>
    <tr>
        <td>
            <span class="label">Select template :</span>
        </td>
        <td>
			<select  id="drpTemplate" name="drpTemplate" class="simple_form" style="opacity: 0;" onchange="ChangeTemplate()">
			<?php echo $temp_options ?>
			</select>
        </td>
    </tr>
</table>

<table style="width:850px">
    <tr style="display:none" id="trMulti">
       <td align="left" style="padding-left:100px;">
            <table class="desc_text" id="tblMulti" >
                <tr>
                    <td><span class="label">Headser text (can be empty):</span></td>
                    <td><input class="simple_field" type="text" value="<?php echo xyz96zyx::xyz100zyx("txtGroupName") ?>"  name="txtMultiGroupName" id="txtMultiGrpName"></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>                    
                    <td><span class="label">Answer Variants</span>
                    </td>
                    <td class="desc_text"><span class="label">Correct answer</span></td>
                </tr>
                <?php for($i=1;$i<=$answers_count;$i++) { ?>
                <tr>
                    
                    <td>
                        <input class="simple_field" type="text" id="txtChoise1" value="<?php echo xyz96zyx::xyz100zyx("txtChoise$i") ?>" name="txtMulti<?php echo $i ?>"></td>
                    <td><input class="simple_form" <?php echo xyz96zyx::xyz100zyx("ans_selected$i") ?> type="checkbox" id="chkMulti<?php echo $i ?>" name="chkMulti<?php echo $i ?>" ></td>
                </tr>
                <?php } ?>
            </table>
            <table width="170px">
                <tr>

                    <td align="center"><input class="simple_buttons" style="width:25px" type="button" value=" + " onclick="addRow('tblMulti','txtMulti')" />
                        <input class="simple_buttons" style="width:25px" type="button" value=" - " onclick="deleteRow('tblMulti')" />
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr style="display:none" id="trOne" >
        <td align="left" style="padding-left:100px;">
            <table width="100%" id="tblOne" class="desc_text" >
                <tr>
                    <td><span class="label">Header text (can be empty):</span><input class="simple_field" type="text" value="<?php echo xyz96zyx::xyz100zyx("txtGroupName") ?>" name="txtOneGroupName"></td>
                    <td>&nbsp;</td>
                </tr>
                 <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>

                    <td><span class="label">Answer Variants</span>
                   </td>
                    <td class="desc_text"><span class="label">Correct answer</span> </td>
                </tr>
                <?php for($i=1;$i<=$answers_count;$i++) { ?>
                <tr>
                    <td>
                        <input class="simple_field" type="text" id="txtChoise<?php echo $i ?>" name="txtOne<?php echo $i ?>" value="<?php echo xyz96zyx::xyz100zyx("txtChoise$i") ?>"></td>
                    <td><input class="simple_form" <?php echo xyz96zyx::xyz100zyx("ans_selected$i") ?> type="radio" name="rdOne" value="<?php echo $i ?>"></td>
                </tr>
                <?php } ?>
            </table>
            <table width="170px">
                <tr>
                    <td align="center"><input class="simple_buttons" style="width:25px" type="button" value=" + " onclick="addRow('tblOne','txtOne')" />
                        <input class="simple_buttons" style="width:25px" type="button" value=" - " onclick="deleteRow('tblOne')" />
                    </td>
                </tr>
            </table>
			<span class="label">Reason answer: (optional)</span><br>
			<textarea style='background:#f8fcaf;border:1px solid #888;' name='reason' cols='80' rows='5'><?php echo $reason ?></textarea>
        </td>
    </tr>
    <tr style="display:none" id="trImage" >
        <td align="left" style="padding-left:100px;">
            <table width="100%" id="tblImg" class="desc_text" >
                <tr>
                    <td><span class="label">Header text (can be empty):</span><input class="simple_field" type="text" value="<?php echo xyz96zyx::xyz100zyx("txtGroupName") ?>" name="txtImgGroupName"></td>
                    <td>&nbsp;</td>
                </tr>
                 <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>

                    <td><span class="label">Answer Variants</span>
                   </td>
                    <td class="desc_text"><span class="label">Correct answer</span> </td>
                </tr>
                <?php for($i=1;$i<=$answers_count;$i++) { ?>
                <tr>
                    <td>
						<input type="hidden" name="nameTmp<?php echo $i ?>" value="<?php echo xyz96zyx::xyz100zyx("txtChoise$i") ?>">
                        <img width="200" id="blah<?php echo $i ?>" src="imgquiz/<?php echo xyz96zyx::xyz100zyx("txtChoise$i") ?>"><br>
						<input style="width:300px;" onchange="readURL(this,'<?php echo $i?>')" class="simple_field" type="file" id="txtChoise<?php echo $i ?>" name="txtImage<?php echo $i ?>" value="<?php echo xyz96zyx::xyz100zyx("txtChoise$i") ?>"><br><br></td>
                    <td><input class="simple_form" <?php echo xyz96zyx::xyz100zyx("ans_selected$i") ?> type="radio" name="rdImg" value="<?php echo $i ?>"></td>
                </tr>
                <?php } ?>
            </table>
            <table width="170px">
                <tr>
                    <td align="center"><input class="simple_buttons" style="width:25px" type="button" value=" + " onclick="addRow('tblImg','txtImage')" />
                        <input class="simple_buttons" style="width:25px" type="button" value=" - " onclick="deleteRow('tblImg')" />
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr style="display:none" id="trArea">
        <td align="left" style="padding-left:100px;">
            <table id="tblArea" class="desc_text">
                 <tr>
                     <td valign="top" align="right">
                         <span class="label">Header text (can be empty):</span>
                     </td>
                    <td>
                        <input class="simple_field" style="width:300px" type="text" value="<?php echo xyz96zyx::xyz100zyx("txtGroupName") ?>" name="txtAreaGroupName"></td>

                </tr>
                <tr>
                    <td valign="top" align="right">
                         <span class="label">Enter correct answer (can be empty):</span>
                     </td>
                    <td>
                        <textarea class="simple_field" style="width:300px;height:100px" name="txtArea1"><?php echo xyz96zyx::xyz100zyx("txtCrctAnswer1") ?></textarea>
                    <td>
                </tr>
            </table>
        </td>
    </tr>
        <tr style="display:none" id="trMultiText">
        <td align="left" style="padding-left:100px;">
            <table id="tblMultiText" class="desc_text">
                <tr>
                    <td><span class="label">Header text (can be empty):</span></td>
                    <td><input class="simple_field" type="text" value="<?php echo xyz96zyx::xyz100zyx("txtGroupName") ?>" name="txtMultiTextGroupName"></td>
                </tr>
               <tr>
                    <td colspan="2"><hr></td>
                </tr>
               <tr>
                    <td><span class="label">Answer Variants </span>
                    </td>
                    <td class="desc_text"><span class="label">Correct answer</span> </td>
                </tr>
                <?php for($i=1;$i<=$answers_count;$i++) { ?>
                <tr>

                    <td>
                        <input class="simple_field" type="text" id="txtChoise<?php echo $i ?>" name="txtMultiText<?php echo $i ?>" value="<?php echo xyz96zyx::xyz100zyx("txtChoise$i") ?>"></td>
                    <td><input class="simple_field" type="text" id="txtText<?php echo $i ?>" name="txtMultiCrctAnswer<?php echo $i ?>" value="<?php echo xyz96zyx::xyz100zyx("txtCrctAnswer$i") ?>"></td>
                </tr>
                <?php } ?>
            </table>          
             <table width="320px">
                <tr>

                    <td align="center"><input class="simple_buttons" style="width:25px" type="button" value=" + " onclick="addRow('tblMultiText','txtMultiText')" />
                        <input class="simple_buttons" style="width:25px" type="button" value=" - " onclick="deleteRow('tblMultiText')" />
                    </td>
                </tr>
            </table>
              <table style="display:none">
                <tr>
                    <td><input class="simple_form" type="checkbox" id="chkAllowNumbers" name="chkAllowNumbers" /><label id="lbl1" for="chkAllowNumbers">Allow users to enter only numbers</label></td>
                </tr><tr>
                    <td><input class="simple_form" type="checkbox" id="chkDontCalc" name="chkDontCalc" /><label id="lbl1" for="chkDontCalc">Do not calculate results of this question</label></td>
                </tr>
            </table>
        </td>
    </tr>
   
    

</table>
    <br>
     <hr />
     <br>
     <table style="width:850px">
         <tr>
        <td align="center">
            <input type="submit" class="simple_buttons" id="btnSave" name="btnSave" value="Save" style="width:150px">
            <input type="button" class="simple_buttons" id="btnCancel" name="btnCancel" value="Cancel" style="width:150px" onclick="javascript:window.location.href='?module=questions'">
        </td>
    </tr>
     </table>
<script type="text/javascript">
CKEDITOR.config.width ='740px';
</script>
    <SCRIPT language="javascript">
        ChangeTemplate();

		//mod
		function readURL(input,id) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah'+id).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
		
        //var c_multi = 4;

        var counters = new Array();
        var answer_count = <?php echo $answers_count ?>;
        counters["tblMulti"] = answer_count;
        counters["tblOne"] = answer_count;
        counters["tblArea"] = answer_count;
        counters["tblMultiText"] = answer_count;
        counters["tblImage"] = answer_count;

        function addRow(tableID, textboxID ) {

            counters[tableID]++;            
                        
            var table = document.getElementById(tableID);

            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);

            var colCount = table.rows[0].cells.length;
            
            for(var i=0; i<colCount; i++) {

                var newcell = row.insertCell(i);

                newcell.innerHTML = table.rows[3].cells[i].innerHTML.replace(new RegExp("1",'g'),counters[tableID]);
                //alert(newcell.childNodes);                
               
                switch(newcell.childNodes[0].type) {
                    case "text":
                            
                            newcell.childNodes[0].value = "";
                            var txtname=newcell.childNodes[0].name;
                            var newname=txtname.substr(0,txtname.length-1)+counters[tableID];
                            newcell.childNodes[0].id=newname;
                            newcell.childNodes[0].name=newname;
                            break;
                    case "checkbox":
                            newcell.childNodes[0].checked = false;
                            newcell.childNodes[0].id="chkMulti"+counters[tableID];
                            newcell.childNodes[0].name="chkMulti"+counters[tableID];
                            break;
                    case "select-one":
                            newcell.childNodes[0].selectedIndex = 0;
                            newcell.childNodes[0].value=counters[tableID];
                            break;
                    
                }
            }
            
        }

        function deleteRow(tableID) {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            if(rowCount==4)
                {
                    alert('Cannot delete last choise');
                    return;
                }
            table.deleteRow(rowCount-1);
            counters[tableID]--;
        }

        function ChangeTemplate()
        {
            DisableAllTemplates();
            var val = document.getElementById('drpTemplate').options[document.getElementById('drpTemplate').selectedIndex].value;
            
            if(val ==0)
            {
                document.getElementById('trMulti').style.display="";
            }
            else if(val==1)
            {
                  document.getElementById('trOne').style.display="";
            }
            else if(val==2)
            {
                  document.getElementById('trImage').style.display="";
            }
            else if(val==3)
            {
                  document.getElementById('trArea').style.display="";
            }
            else if(val==4)
            {
                  document.getElementById('trMultiText').style.display="";
            }
        }

        function DisableAllTemplates()
        {
            document.getElementById('trMulti').style.display="none";
            document.getElementById('trOne').style.display="none";
            document.getElementById('trImage').style.display="none";
            document.getElementById('trArea').style.display="none";
            document.getElementById('trMultiText').style.display="none";
        }

    </SCRIPT>
</form>


<?php if(!isset($RUN)) { exit(); } ?>

<script language="JavaScript" type="text/javascript" src="lib/validations.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
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
<?php echo $c3->xyz109zyx(); ?>

<form method="post" name="form1" >
<table class="desc_text" border="0" width="100%">
    <tr>
        <td width="120px">
            <span class="label">Category :</span>
        </td>
        <td>
			<select name="drpCats" class="simple_form" style="opacity: 0; ">
				<?php echo $cat_options ?>
			</select>
        </td>
    </tr>
    <tr>
        <td><span class="label">Name :</span></td>
        <td><input class="st_txtbox simple_field" type="text" id="txtName" name="txtName" value="<?php echo xyz96zyx::xyz100zyx("txtName") ?>" /></td>
    </tr>
    <tr>
        <td><span class="label">Description :</span></td>
        <td><input class="st_txtbox simple_field" type="text" id="txtDesc" name="txtDesc" value="<?php echo xyz96zyx::xyz100zyx("txtDesc") ?>" /></td>
    </tr>
     <tr>
        <td><span class="label">Show intro :</span></td>
        <td>
			<input class="simple_form" type="CHECKBOX" id="chkShowIntro" name="chkShowIntro" <?php echo xyz96zyx::xyz100zyx("chkShowIntro") ?>  />
		</td>
    </tr>
    <tr>
        <td><span class="label">Intro text :</span></td>
        <td >
			<textarea id="elm1" name="editor1" rows="15" cols="80" style="width: 80%"><?php echo $txtIntroText?></textarea>
        </td>
    </tr>
    <tr>
        <td>
            &nbsp;
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input class="simple_buttons" style="width:100px" type="submit" id="btnSubmit" name="btnSubmit" value="Save" onclick="return validate();">
        <input class="simple_buttons" type="button" style="width:100px" id="btnCancel" value="Cancel" onclick="javascript:window.location.href='?module=quizzes'">        
        </td>
    </tr>
</table>
</form>

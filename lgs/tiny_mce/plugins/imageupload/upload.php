<?php
if (isset($_FILES["image"]) && is_uploaded_file($_FILES["image"]["tmp_name"])) {
	$rd = explode("tiny_mce",__FILE__);
  $base_dir = $rd[0];
  $image = '/imgquiz/' . $_FILES["image"]["name"];
  move_uploaded_file($_FILES["image"]["tmp_name"], $base_dir . $image);
?>
<input type="text" id="src" name="src" />
<script type="text/javascript" src="../../tiny_mce_popup.js"></script>
<script>
  var ImageDialog = {
    init : function(ed) {
      ed.execCommand('mceInsertContent', false, 
        tinyMCEPopup.editor.dom.createHTML('img', {
          src : '<?php echo substr($image,1); ?>'
        })
      );
      
      tinyMCEPopup.editor.execCommand('mceRepaint');
      tinyMCEPopup.editor.focus();
      tinyMCEPopup.close();
    }
  };
  tinyMCEPopup.onInit.add(ImageDialog.init, ImageDialog);
</script>
<?php  } else {?>
<form name="iform" action="" method="post" enctype="multipart/form-data">
  <input id="file" accept="image/*" type="file" name="image" onchange="this.parentElement.submit()" />
</form>
<?php }?>
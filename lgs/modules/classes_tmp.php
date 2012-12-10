<?php if(!isset($RUN)) { exit(); } ?>
<script language="javascript">
    function AddNewCls()
    {
        var adding = "adding";
        var T= document.getElementById('hdnT').value;
        if(T!="add") adding="editing";
       // alert(T);
        var cat_name = document.getElementById('txtName').value;
         $.post("index.php?module=classes&sch_id=<?php echo$_GET['sch_id']?>", {  ajax: "yes", add : adding, name : cat_name, hdnT : T },
         function(data){
             document.getElementById('div_grid').innerHTML=data;
             document.getElementById('hdnT').value='add';
             document.getElementById('btnAdd').value="Add";
        });
    }
    function EditCls(cat_name,cat_id)
    {
        document.getElementById('txtName').value=cat_name;
        document.getElementById('hdnT').value=cat_id;
        document.getElementById('btnAdd').value="Save";
       // jsProcessCommand(cat_id,"edit","index.php?module=cats","div_grid");
    }
</script>

    <div id="div_grid"><?php echo $grid_html ?></div>
    <br>
    
    <hr />

    <table width="400">
        <tr>
            <td class="desc_text">
                <span class="label"><a name="edit"></a>Name :</span> <input class="simple_field" style="width:200px;" type="text" id="txtName" name="txtName" /> <input class="simple_buttons" type="button" class="st_button" id="btnAdd" onclick ="AddNewCls()" value ="Add">
                <input type="hidden" id="hdnT" name="hdnT" value="add">
            </td>
        </tr>
    </table>


<?php

class clazz {
    public static function get($sch_id=null)
    {
		if($sch_id!=null){
			$y2 ="select * from classes where sch_id='".$sch_id."' order by class";
		}else{
			$y2 ="select * from classes order by class limit 0,30";
		}
        return $y2;
    }
	
	public static function del($id)
    {
        $y2 = "delete from classes where id='$id'";
        xyz39zyx::xyz49zyx($y2);
    }

     public static function add($name,$sch_id)
    {
        $name = xyz39zyx::xyz56zyx($name);
        $y2 = "insert into classes(class,sch_id) values('$name','$sch_id')";
        xyz39zyx::xyz49zyx($y2);
    }

      public static function upd($name,$id)
    {
        $name = xyz39zyx::xyz56zyx($name);
        $id = xyz39zyx::xyz56zyx($id);
        $y2 = "update classes set class='$name' where id='$id'";        
        xyz39zyx::xyz49zyx($y2);
    }
}
?>

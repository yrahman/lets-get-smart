<?php

class school {
    public static function get($sch_id=null)
    {
		if($sch_id!=null){
			$y2 ="select * from schools where id='".$sch_id."' order by sch_name";
		}else{
			$y2 ="select * from schools order by sch_name limit 0,30";
		}
        return $y2;
    }
	
	public static function del($id)
    {
        $y2 = "delete from schools where id=$id";        
        xyz39zyx::xyz49zyx($y2);
    }

     public static function add($name)
    {
        $name = xyz39zyx::xyz56zyx($name);
        $y2 = "insert into schools(sch_name) values('$name')";
        xyz39zyx::xyz49zyx($y2);
    }

      public static function upd($name,$id)
    {
        $name = xyz39zyx::xyz56zyx($name);
        $id = xyz39zyx::xyz56zyx($id);
        $y2 = "update schools set sch_name='$name' where id='$id'";        
        xyz39zyx::xyz49zyx($y2);
    }
}
?>

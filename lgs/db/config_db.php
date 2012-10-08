<?php

class config {
    public static function get($param=null)
    {
		if($param!=null){
			$y2 ="select value from config where param='".$param."'";
		}else{
			$y2 ="select * from config order by config_id";
		}
        return  xyz39zyx::xyz49zyx($y2);
    }
}
?>

<?php

class xyz91zyx {
    public static function xyz92zyx($sch=null,$cls=null,$noadmin=null)
    {
		if($sch!=null&&$cls!=null){
			if($noadmin!=null){
				if($noadmin=="guru"){
					$y2 ="select * from users u left join user_types ut on u.user_type=ut.id where sch='".$sch."' and u.user_type='3'  order by Name";
				}else{
				$y2 ="select * from users u left join user_types ut on u.user_type=ut.id where sch='".$sch."' and cls='".$cls."' and u.user_type!='3'  order by Name";
				}
			}else{
				$y2 ="select * from users u left join user_types ut on u.user_type=ut.id where sch='".$sch."' and cls='".$cls."' and u.user_type!='3' order by Name";
			}
		}else{
			$y2 ="select * from users u left join user_types ut on u.user_type=ut.id order by UserID desc";
		}
        return $y2;
    }

    public static function xyz92zyxRow()
    {
		$y2 ="select * from users";
		return $y2;
	}
    public static function xyz93zyx()
    {
        $y2 ="select * from v_imported_users order by name,surname";
        return $y2;
    }
}
?>

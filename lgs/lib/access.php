<?php
class xyz94zyx
{
    public static function xyz95zyx($user_type)
    {
		//fixme rahman
		if(is_array($user_type)){
			if(!in_array($_SESSION['user_type'],$user_type))
			{
				header("location:login.php");
			}
		}else{
			if($user_type!=$_SESSION['user_type'])
			{
				header("location:login.php");
			}
		}
    }
}
?>

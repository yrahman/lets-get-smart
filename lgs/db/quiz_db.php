<?php

class xyz83zyx{


    public static function xyz84zyx($author=null)
    {
		$author = ($_SESSION['user_type']=="1")?null:$author;
		$author = ($author!=null)?"and author='".$author."'":"";
        $y2 = "select * from quizzes where parent_id=0 $author";
        return $y2;
    }
    public static function xyz84zyxId($id=null)
    {
        $y2 = "select q.quiz_name,q.id,q.added_date ,count(qn.id) as jml from quizzes as q, questions as qn where q.id='$id' and qn.quiz_id=q.id";
        return $y2;
    }

    public static function xyz85zyx($id)
    {        
        xyz39zyx::xyz49zyx(xyz83zyx::xyz85zyxQuery($id));
    }

    public static function xyz85zyxQuery($id)
    {
        $y2 = "delete from quizzes where id=$id";
        return $y2;
    }

    public static function xyz87zyx($name,$desc,$show_into,$into_text)
    {
        $name = xyz39zyx::xyz56zyx($name);
        $desc = xyz39zyx::xyz56zyx($desc);
        $y2 = "insert into cats(cat_name) values('$name')";
        xyz39zyx::xyz49zyx($y2);
    }
}
?>

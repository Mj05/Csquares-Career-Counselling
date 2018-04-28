<?php
include 'career_database.php';
class model
{
    public function insert($value)
    {
      $query = "INSERT INTO user_info (user_name,user_email,user_password) VALUES ('$value[0]','$value[1]','$value[2]')";
        $db = new database();
        $db->insertindb($query);
    }

    public function user_check($email,$password)
    {
      $query = "SELECT * FROM user_info WHERE user_email= '$email' and user_password = '$password' ";
        $db = new database();
        $a = $db->result($query);
        return $a;
    }
    public function userinfo($email)
    {
        $query = "select * from user_info where user_email = '$email' ";
        $db = new DataBase();
        $a = $db->result($query);
        return $a;
    }

    public function getallquestions($eid)
    {
      $query = "SELECT * FROM exercise_$eid";
      $db = new database();
       $q = $db->allquestions($query);
        return $q;
    }
    public function submitscor($uid,$eid,$score,$color)
    {
        $query = "INSERT INTO user_score (user_id,exercise_id,score,color) VALUES ('$uid','$eid','$score','$color')";
        $db = new database();
        $db->insertindb($query);
    }
    public function score($uid,$eid)
    {
        $sql = "SELECT score,color FROM user_score WHERE user_id=$uid and exercise_id=$eid";
        $db = new database();
        $s = $db->result($sql);
        return $s;

    }
    public function submitcommon($uid,$eid,$mscore,$bscore,$cscore,$color)
    {
        $query = "INSERT INTO commonexercise_score (user_id,exercise_id,mathscore,bioscore,comscore,color) VALUES ('$uid','$eid','$mscore','$bscore','$cscore','$color')";
        $db = new database();
        $db->insertindb($query);
    }
    public function usercommonscore($uid)
    {
        $sql = "SELECT * FROM commonexercise_score WHERE user_id=$uid";
        $db = new database();
        $s = $db->result($sql);
        return $s;
    }
    public function contact($value)
    {

        $query = "INSERT INTO contact_us (user_name,user_email,subject,description) VALUES ('$value[0]','$value[1]','$value[2]','$value[3]')";

        $db = new database();
        $db->insertindb($query);
    }
    public function insertfstep($uid,$value)
    {
        $query = "INSERT INTO finalstep (user_id,foccupation,moccupation,bsbackground,rolemodel) VALUES ('$uid','$value[0]','$value[1]','$value[2]','$value[3]')";

        $db = new database();
        $db->insertindb($query);

    }
    public function finalstepres($uid)
    {

        $sql = "SELECT * FROM finalstep WHERE user_id=$uid";
        $db = new database();
        $s = $db->result($sql);

        return $s;
    }
}
?>
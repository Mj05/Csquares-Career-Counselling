<?php
session_start();
include 'career_model.php';
class controller
{
    public function signup()
    {

        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $value[0] = $_POST['user_name'];
            $value[1] = $_POST['user_email'];
            $value[2] = $_POST['user_password'];
            $m = new model();
            $m->insert($value);

            $s = $m->userinfo($value[1]);
            $_SESSION['user_id'] = $s[0];
            $_SESSION['user_email'] = $s[2];

        }
    }

    public function signin()
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $email = $_POST['user_email'];
            $password = $_POST['user_password'];
            $m = new model();
            $a = $m->user_check($email,$password);
            $_SESSION['user_id'] = $a[0];
            $_SESSION['user_email'] = $a[2];
            $_SESSION['user_name'] = $a[1];
            return $a;
        }
    }
    public function quizcreate($eid)
    {
        $q = new model();
        $a = $q->getallquestions($eid);
        return $a;

    }
    public function submitscore($uid,$eid,$score,$color)
    {

       $m = new model();
        $m->submitscor($uid,$eid,$score,$color);


    }
    public function submitcommonscore($uid,$eid,$mscore,$bscore,$cscore,$color)
    {

        $m = new model();
        $m->submitcommon($uid,$eid,$mscore,$bscore,$cscore,$color);
    }

    public function scorecard($uid,$eid)
    {

        $obj = new model();
        $s = $obj->score($uid,$eid);
        return $s;
    }
    public function usercommonexercisescore($uid)
    {
        $m = new model();
        $p = $m->usercommonscore($uid);
        return $p;
    }
    public function contactus()
    {

        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $value[0] = $_POST['user_name'];
            $value[1] = $_POST['user_email'];
            $value[2] = $_POST['subject'];
            $value[3] = $_POST['description'];
            $m = new model();
            $m->contact($value);

    }
    }
    public function finalstep($uid)
    {

        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $value[0] = $_POST['foccupation'];
            $value[1] = $_POST['moccupation'];
            $value[2] = $_POST['bsbackground'];
            $value[3] = $_POST['rolemodel'];
            $m = new model();
            $m->insertfstep($uid,$value);

        }


    }
    public function finalstepresponse($uid)
    {

        $obj = new model();
        $s = $obj->finalstepres($uid);
        return $s;
    }


}
?>
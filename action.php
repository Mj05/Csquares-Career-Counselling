<?php
include 'career_controller.php';
$controller = $_POST['controller'];
$function = $_POST['function'];
$login = $_POST['login'];
$contact = $_POST['contact'];
$score = $_GET['score'];
$fuid = $_GET['finalstep_uid'];
$finalstep = $_POST['finalstep'];
$mscore = $_GET['mscore'];
$bscore = $_GET['bscore'];
$cscore = $_GET['cscore'];
$uid_eid = $_GET['uid'];
$uid = intval ($uid_eid/10);
$eid = $uid_eid%10;
if(isset($controller,$function))
{

$obj = new controller();
    $obj->signup();
    header("location:testnow.php");
}
else if(isset($login))
{

    $obj =  new controller();
    $a = $obj->signin();
    if(!is_null($a))
    {
        header("location:testnow.php");
    }
    else
    {

        header("location:index_wrongpwd.php");
    }

}
else if(isset($score))
{
    $color = $eid;
    $obj = new controller();
    $obj->submitscore($uid,$eid,$score,$color);
    header("location:testnow.php");
}
else if(isset($mscore,$cscore,$bscore))
{
    $color = $eid;
    $obj = new controller();
    $obj->submitcommonscore($uid,$eid,$mscore,$bscore,$cscore,$color);
    header("location:testnow.php");
}
else if(isset($contact))
{

    $obj = new controller();
    $obj->contactus();
    header("location:contact_msg.php");

}
else if(isset($finalstep,$fuid))
{
   $obj = new controller();
   $obj->finalstep($fuid);
   header("location:report.php?uid=$fuid");

}
else
{
    echo "Something went wrong";
}

?>
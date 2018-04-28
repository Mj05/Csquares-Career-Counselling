<?php
include 'qz_controller.php';
$controller = $_POST['controller'];
$function = $_POST['function'];
$no = $_POST['q_no'];
$testid = $_POST['testid'];
$drop = $_POST['drop'];
$exid = $_POST['exercise_id'];
$admin = $_POST['admin'];
$login = $_POST['login'];
$image = $_GET['imageq'];
if(isset($controller,$function,$no,$testid))
{
    $con = new task();
    $a = $con->submit($no,$testid);

header('location:exupdate_msg.php');

}
else if(isset($admin,$login))
{
    $obj =  new task();
    $a = $obj->signin();
    if(!is_null($a))
    {
        header('location:dropexercise.php');
    }
    else
    {

        header("location:adminagain.php");
    }
}
else if(isset($drop,$exid))
{


    $obj = new task();
    $obj->dropexercise($exid);
    header('location:dropmsg.php');

}
else if(isset($no,$testid,$image))
{
    echo "hii MJ";exit;
    $con = new task();
    $a = $con->submit($no,$testid);

    header('location:exupdate_msg.php');

}
else
{
echo "Something went wrong";
}
?>

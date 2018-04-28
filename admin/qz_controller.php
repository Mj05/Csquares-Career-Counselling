<?php
session_start();
include 'qz_model.php';
class task
{
    public function submit($no,$testid)
    {

        if($_SERVER['REQUEST_METHOD']=='POST')
        {

            for($i=1;$i<=$no;$i++)
            {
                $value[0] = $_POST['question_'.$i];
                $value[1] = $_POST['option_A_'.$i];
                $value[2] = $_POST['option_B_'.$i];
                $value[3] = $_POST['option_C_'.$i];
                $value[4] = $_POST['option_D_'.$i];
                $value[5] = $_POST['answer_'.$i];
                $m = new model();
                $m->insert($value,$testid);
            }
        }
            }
    public function signin()
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $email = $_POST['admin_email'];
            $password = $_POST['admin_password'];
            $m = new model();
            $a = $m->admin_check($email,$password);
            $_SESSION['admin_id'] = $a[0][0];
            $_SESSION['admin_email'] = $a[0][1];
            return $a;
        }
    }
    public function dropexercise($exid)
    {

        $m = new model();
        $m->dropex($exid);
    }


}
?>
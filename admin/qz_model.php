<?php
include 'qz_database.php';
class model
{
    public function insert($value,$testid)
    {




        $query = "insert into test_$testid (question,option_A,option_B,option_C,option_D,answer) values ('$value[0]','$value[1]','$value[2]','$value[3]','$value[4]','$value[5]')";

        $db = new DataBase();
        $db->insert($query);

    }
    public function admin_check($email,$password)
    {

        $query = "SELECT * FROM admin WHERE admin_email= '$email' and admin_password = '$password' ";
        $db = new Database();
        $a = $db->result($query);
        return $a;

    }
    public function dropex($exid)
    {
        $sql = "TRUNCATE TABLE  test_$exid";
        $db = new Database();
        $db->insert($sql);
    }
}
?>
<?php
class DataBase
{

private $con;
private $row = array();
public function  __construct()
{
$this->con=mysqli_connect('localhost','root','root','quiz');
}
public function insert($query)
{

mysqli_query($this->con,$query);


}

public function result($results)
    {
        $row = mysqli_query($this->con,$results);

        while($row1 = mysqli_fetch_row($row))
        {
            $this->rows[] = $row1;
        }

        return $this->rows;

    }

}
?>
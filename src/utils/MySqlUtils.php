<?php
include "ConnectionUtils.php";
class MySqlUtils
{
    private $dbConn;
    function __construct()
    {
        $this->dbConn= ConnectionUtils::getDbConnection();
    }
    public function login_detailsRecord($user_name,$user_pass)
    {
        //echo $sql= "SELECT user_name FROM login_details WHERE user_name='".$user_name."'";
        $sql= mysqli_query($this->dbConn,"SELECT user_name FROM login_details WHERE user_name='".$user_name."'");

        if (mysqli_num_rows($sql) != 0)
        {
            header('Location: ../public/index.php');
        }

        else
        {
            echo "USERNAME/PASSWORD NOT CORRECT";
        }

    }
}


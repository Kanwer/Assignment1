<?php
include "../utils/MySqlUtils.php";
$action=$_REQUEST["action"];

$name=$_REQUEST["user_name"];
$pass=$_REQUEST["user_pass"];
//print_r($_REQUEST);

$MySqlUtilsObj=new MySqlUtils();
switch($action){

    case 'login_try':
        $MySqlUtilsObj->login_detailsRecord($name,$pass);

}
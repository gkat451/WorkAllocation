<?php
require_once "../model/Users.php";
require_once "../model/dataAccess.php";
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$status = false;
$user = $_REQUEST["input"];

removeUserByLastName($user);
$status = true;

if ($status){
    header("Refresh: 0, URL=../view/addstaff.php");
    exit();
}

?>
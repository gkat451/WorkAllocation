<?php
require_once "../model/AdminDuties.php";
require_once "../model/dataAccess.php";
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$status = false;
$duty = $_REQUEST["input"];

removeDutyById($duty);
$status = true;

if ($status){
    header("Refresh: 0, URL=../view/addduty.php");
    exit();
}

?>
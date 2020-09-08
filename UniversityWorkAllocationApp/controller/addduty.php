<?php
require_once "../model/AdminDuties.php";
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$status = false;

if(isset($_REQUEST["dutyid"])){
    
    $ADMIN_DUTY_ID = $_REQUEST["dutyid"];
    $NAME = $_REQUEST["name"];
    $NUMBER = $_REQUEST["number"];
   
   

    $duties = new adminduties();
    $duties->ADMIN_DUTY_ID = htmlentities($ADMIN_DUTY_ID);
    $duties->NAME = htmlentities($NAME);
    $duties->NUMBER = htmlentities($NUMBER);
   
}
require_once "../model/dataAccess.php";
addDuty($duties);
$status = true;

if ($status){
    header("Refresh: 0, URL=../view/addduty.php");
    exit();
}

?>
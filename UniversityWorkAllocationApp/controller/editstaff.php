<?php
require_once "../model/Users.php";
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$status = false;

if(isset($_REQUEST["uid"])){
    
    $USER_ID = $_REQUEST["uid"];
    $FIRST_NAME = $_REQUEST["fname"];
    $LAST_NAME = $_REQUEST["lname"];
    $USERNAME = $_REQUEST["uname"];
    $PASSWORD = $_REQUEST["password"];
    $PHONE = $_REQUEST["phone"];
    $EMAIL = $_REQUEST["email"];
    $QUALIFICATION = $_REQUEST["QUALIFICATION"];
    $RESEARCH_MODE = $_REQUEST["RESEARCH_MODE"];
    $FTE = $_REQUEST["FTE"];
    $PHD_COMPLETION = $_REQUEST["PHD_COMPLETION"];
    $RESEARCH_FUNDING = $_REQUEST["RESEARCH_FUNDING"];
    $USER_TYPE_ID_FK = $_REQUEST["utype"];
    $DEPARTMENT_ID_FK = $_REQUEST["did"];
   

    $user = new Users();
    $user->USER_ID = htmlentities($USER_ID);
    $user->FIRST_NAME = htmlentities($FIRST_NAME);
    $user->LAST_NAME = htmlentities($LAST_NAME);
    $user->USERNAME = htmlentities($USERNAME);
    $user->PASSWORD = htmlentities($PASSWORD);
    $user->PHONE = htmlentities($PHONE);
    $user->EMAIL = htmlentities($EMAIL);
    $user->QUALIFICATION = htmlentities($QUALIFICATION);
    $user->RESEARCH_MODE = htmlentities($RESEARCH_MODE);
    $user->FTE = htmlentities($FTE);
    $user->PHD_COMPLETION = htmlentities($PHD_COMPLETION);
    $user->RESEARCH_FUNDING = htmlentities($RESEARCH_FUNDING);
    $user->USER_TYPE_ID_FK = htmlentities($USER_TYPE_ID_FK);
    $user->DEPARTMENT_ID_FK = htmlentities($DEPARTMENT_ID_FK);
   
}
require_once "../model/dataAccess.php";
addUpdateUser($user);
$status = true;

if ($status){
    header("Refresh: 0, URL=../view/liststaff.php");
    exit();
}

?>
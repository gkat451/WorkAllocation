<?php
require_once "../model/Users.php";
require_once "../model/dataAccess.php";
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$USER_ID = $_GET['USER_ID'];
getUsersById($USER_ID);
$viewResults=getUsersById;



?>
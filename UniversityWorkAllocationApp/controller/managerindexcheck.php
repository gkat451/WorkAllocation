<?php 
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION["managervalidation"])){
    $_SESSION["managervalidation"] = false;
}

if (!$_SESSION["managervalidation"]){
    header("Refresh: 0, URL=../view/login.php");
    exit();
}

?>
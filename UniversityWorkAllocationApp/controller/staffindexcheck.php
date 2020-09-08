<?php 
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION["staffvalidation"])){
    $_SESSION["staffvalidation"] = false;
}

if (!$_SESSION["staffvalidation"]){
    header("Refresh: 0, URL=../view/login.php");
    exit();
}

?>
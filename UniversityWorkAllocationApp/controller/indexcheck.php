<?php 
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION["adminvalidation"])){
    $_SESSION["adminvalidation"] = false;
}

if (!$_SESSION["adminvalidation"]){
    header("Refresh: 0, URL=../view/login.php");
    exit();
}

?>
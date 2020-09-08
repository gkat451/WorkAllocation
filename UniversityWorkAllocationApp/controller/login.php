<?php 
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
$_SESSION["login"] = "login";
$_SESSION["returnVal"] = "";

if (isset($_REQUEST["login"])
     && !empty($_REQUEST["loginName"])
     && !empty($_REQUEST["loginPass"])){
    
    if (htmlentities($_REQUEST["loginName"]) == "admin" && htmlentities($_REQUEST["loginPass"]) == "work"){
        $_SESSION["adminvalidation"] = true;
        $_SESSION["loginName"] = "adminuser";
        $_SESSION["login"] = "admin";
        header("Refresh: 0, URL=../view/index.php");
    }
   

    else {
        $_SESSION["adminvalidation"] = false;
        $_SESSION["returnVal"] = "Wrong username or password.<br>Please try again.";
    }


if(isset($_SESSION["adminvalidation"])){
    if($_SESSION["adminvalidation"])
        header("Refresh: 0, URL=../view/index.php");
    }
}
?>
<?php 
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
$_SESSION["login"] = "login";
$_SESSION["returnVal"] = "";

if (isset($_REQUEST["login"])
     && !empty($_REQUEST["loginName"])
     && !empty($_REQUEST["loginPass"])){
    
    if (htmlentities($_REQUEST["loginName"]) == "manager" && htmlentities($_REQUEST["loginPass"]) == "work"){
        $_SESSION["managervalidation"] = true;
        $_SESSION["loginName"] = "manageruser";
        $_SESSION["login"] = "manager";
        header("Refresh: 0, URL=../view/managerIndex.php");
    }
   

    else {
        $_SESSION["managervalidation"] = false;
        $_SESSION["returnVal"] = "Wrong username or password.<br>Please try again.";
    }


if(isset($_SESSION["managervalidation"])){
    if($_SESSION["managervalidation"])
        header("Refresh: 0, URL=../view/managerIndex.php");
    }
}
?>
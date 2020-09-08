<?php 
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
$_SESSION["login"] = "login";
$_SESSION["returnVal"] = "";

if (isset($_REQUEST["login"])
     && !empty($_REQUEST["loginName"])
     && !empty($_REQUEST["loginPass"])){
    
    if (htmlentities($_REQUEST["loginName"]) == "staff" && htmlentities($_REQUEST["loginPass"]) == "work"){
        $_SESSION["staffvalidation"] = true;
        $_SESSION["loginName"] = "staffuser";
        $_SESSION["login"] = "staff";
        header("Refresh: 0, URL=../view/staffindex.php");
    }
   

    else {
        $_SESSION["staffvalidation"] = false;
        $_SESSION["returnVal"] = "Wrong username or password.<br>Please try again.";
    }


if(isset($_SESSION["staffvalidation"])){
    if($_SESSION["staffvalidation"])
        header("Refresh: 0, URL=../view/staffindex.php");
    }
}
?>
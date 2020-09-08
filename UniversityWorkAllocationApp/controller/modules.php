<?php
require_once "../model/dataAccess.php";
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

//Modules
if (!isset($_SESSION["modPrevSearch"])){
    $_SESSION["modPrevSearch"] = [];
}
if (!isset($_REQUEST["modSearch"]) || empty($_REQUEST["modSearch"])){
    $moduleResults = getAllModules();
} else {
    $modSearch = $_REQUEST["modSearch"];
    $_SESSION["modPrevSearch"][] = $modSearch;
    $moduleResults = getModulesById($modSearch);
}


?>
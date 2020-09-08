<?php
require_once "../model/Modules.php";
require_once "../model/dataAccess.php";
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$status = false;
$module = $_REQUEST["input"];

removeModuleById($module);
$status = true;

if ($status){
    header("Refresh: 0, URL=../view/addmodule.php");
    exit();
}

?>
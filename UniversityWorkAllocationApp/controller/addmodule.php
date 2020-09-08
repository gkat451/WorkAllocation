<?php
require_once "../model/Modules.php";
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$status = false;

if(isset($_REQUEST["MOD_ID"])){
    
    $MODULE_ID = $_REQUEST["MOD_ID"];
    $MODULE_NAME = $_REQUEST["NAME"];
    $MODULE_INFORMATION = $_REQUEST["INFO"];
    $LEVEL = $_REQUEST["LEVEL"];
    $SEMESTER = $_REQUEST["SEMESTER"];
    $NUMBER_OF_STUDENTS = $_REQUEST["NUM"];
    $MODULE_RUNNING = $_REQUEST["RUN"];
    $DISTANCE_LEARNING = $_REQUEST["DIST"];
    $DEPARTMENT_ID = $_REQUEST["DEPT"];
   

    $modules = new Modules();
    $modules->MODULE_ID = htmlentities($MODULE_ID);
    $modules->MODULE_NAME = htmlentities($MODULE_NAME);
    $modules->MODULE_INFORMATION = htmlentities($MODULE_INFORMATION);
    $modules->LEVEL = htmlentities($LEVEL);
    $modules->SEMESTER = htmlentities($SEMESTER);
    $modules->NUMBER_OF_STUDENTS = htmlentities($NUMBER_OF_STUDENTS);
    $modules->MODULE_RUNNING = htmlentities($MODULE_RUNNING);
    $modules->DISTANCE_LEARNING = htmlentities($DISTANCE_LEARNING);
    $modules->DEPARTMENT_ID = htmlentities($DEPARTMENT_ID);
   
}
require_once "../model/dataAccess.php";
addModule($modules);
$status = true;

if ($status){
    header("Refresh: 0, URL=../view/listmodules_view.php");
    exit();
}

?>
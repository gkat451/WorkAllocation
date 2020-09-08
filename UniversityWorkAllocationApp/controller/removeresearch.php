<?php
require_once "../model/ResearchDuties.php";
require_once "../model/dataAccess.php";
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$status = false;
$research = $_REQUEST["input"];

removeResearchByName($research);
$status = true;

if ($status){
    header("Refresh: 0, URL=../view/listallresearch.php");
    exit();
}

?>
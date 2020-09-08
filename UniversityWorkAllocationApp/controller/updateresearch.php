<?php
require_once "../model/ResearchDuties.php";
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$status = false;

if(isset($_REQUEST["researchid"])){
    
    $RESEARCH_DUTIES_ID = $_REQUEST["researchid"];
    $NAME = $_REQUEST["name"];
   
   

    $research = new ResearchDuties();
    $research->RESEARCH_DUTIES_ID = htmlentities($RESEARCH_DUTIES_ID);
    $research->NAME = htmlentities($NAME);
   
}
require_once "../model/dataAccess.php";
addResearch($research);
$status = true;

if ($status){
    header("Refresh: 0, URL=../view/listallresearch.php");
    exit();
}

?>
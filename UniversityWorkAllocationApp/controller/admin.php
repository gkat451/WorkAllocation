<?php
require_once "../model/dataAccess.php";
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

//ADMIN DUTIES
if (!isset($_SESSION["adPrevSearch"])){
    $_SESSION["adPrevSearch"] = [];
}
if (!isset($_REQUEST["adSearch"]) || empty($_REQUEST["adSearch"])){
    $dutyResults = getAllDuties();
} else {
    $adSearch = $_REQUEST["adSearch"];
    $_SESSION["adPrevSearch"][] = $adSearch;
    $dutyResults = getDutiesByName($adSearch);
}

//RESEARCH
if (!isset($_SESSION["rePrevSearch"])){
    $_SESSION["rePrevSearch"] = [];
}
if (!isset($_REQUEST["reSearch"]) || empty($_REQUEST["reSearch"])){
    $researchResults = getAllResearch();
} else {
    $reSearch = $_REQUEST["reSearch"];
    $_SESSION["rePrevSearch"][] = $reSearch;
    $researchResults = getResearchByName($reSearch);
}
//USERS add staff
if (!isset($_SESSION["uPrevSearch"])){
    $_SESSION["uPrevSearch"] = [];
}
if (!isset($_REQUEST["uSearch"]) || empty($_REQUEST["uSearch"])){
    $userResults = getAllUsers();
} else {
    $uSearch = $_REQUEST["uSearch"];
    $_SESSION["uPrevSearch"][] = $uSearch;
    $userResults = getUsersByLastName($uSearch);   
}

//Get ADMINISTRATIVE STAFF

if (!isset($_SESSION["amPrevSearch"])){
    $_SESSION["amPrevSearch"] = [];
  }
  if (!isset($_REQUEST["amSearch"]) || empty($_REQUEST["amSearch"])){
    $adminResults = getAllAdmin();
  } else {
    $amSearch = $_REQUEST["amSearch"];
    $_SESSION["amPrevSearch"][] = $amSearch;
    $adminResults = getAdminByLastName($amSearch);
  }

  //List Modules
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

//Add  Modules
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
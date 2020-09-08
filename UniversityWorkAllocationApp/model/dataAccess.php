<?php

if (session_status() == PHP_SESSION_NONE){
    session_start();
}

require_once "Users.php";
require_once "Department.php";
require_once "AdminDuties.php";
require_once "Modules.php";
require_once "UserType.php";
require_once "Courses.php";
require_once "ExtraDuties.php";
require_once "OtherDuties.php";
require_once "ResearchDuties.php";
require_once "School.php";



$pdo = new PDO("mysql:host=kunet;dbname=db_k1748796","k1748796","standbridgeg");


function getAllUsers(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Users");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,'Users');
    return $results;
}

function getAllModules(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Modules");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,'Modules');
    return $results;
}
function getModulesById($module){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Modules WHERE MODULE_ID = ?");
    $statement->execute([$module]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Modules");
    return $results; 
}

    function removeModuleById($removed){
        global $pdo;
        $statement = $pdo->prepare("DELETE FROM Modules WHERE MODULE_ID = ?");
        $statement->execute([$removed]);
    }


 function addModule($modules){
    global $pdo;
    $statement = $pdo->prepare("
        INSERT INTO Modules (MODULE_ID,MODULE_NAME,MODULE_INFORMATION,LEVEL,SEMESTER,NUMBER_OF_STUDENTS,MODULE_RUNNING,DISTANCE_LEARNING,DEPARTMENT_ID) 
        VALUES (:MODULE_ID,:MODULE_NAME,:MODULE_INFORMATION,:LEVEL,:SEMESTER,:NUMBER_OF_STUDENTS,:MODULE_RUNNING,:DISTANCE_LEARNING,:DEPARTMENT_ID)
        ON DUPLICATE KEY UPDATE 
        MODULE_ID=:MODULE_ID,MODULE_NAME=:MODULE_NAME,MODULE_INFORMATION=:MODULE_INFORMATION,LEVEL=:LEVEL,SEMESTER=:SEMESTER,NUMBER_OF_STUDENTS=:NUMBER_OF_STUDENTS,MODULE_RUNNING=:MODULE_RUNNING,DISTANCE_LEARNING=:DISTANCE_LEARNING,DEPARTMENT_ID=:DEPARTMENT_ID");
    $statement->bindValue(":MODULE_ID",$modules->MODULE_ID,PDO::PARAM_STR);
    $statement->bindValue(":MODULE_NAME",$modules->MODULE_NAME,PDO::PARAM_STR);
    $statement->bindValue(":MODULE_INFORMATION",$modules->MODULE_INFORMATION,PDO::PARAM_STR);
    $statement->bindValue(":LEVEL",$modules->LEVEL,PDO::PARAM_STR);
    $statement->bindValue(":SEMESTER",$modules->SEMESTER,PDO::PARAM_STR);
    $statement->bindValue(":NUMBER_OF_STUDENTS",$modules->NUMBER_OF_STUDENTS,PDO::PARAM_STR);
    $statement->bindValue(":MODULE_RUNNING",$modules->MODULE_RUNNING,PDO::PARAM_STR);
    $statement->bindValue(":DISTANCE_LEARNING",$modules->DISTANCE_LEARNING,PDO::PARAM_STR);
    $statement->bindValue(":DEPARTMENT_ID",$modules->DEPARTMENT_ID,PDO::PARAM_STR);
    $newModuleId = $pdo->lastInsertId();
    $statement->execute();

      }
    

function getUsersByLastName($name)
{
  global $pdo;
  $statement = $pdo->prepare("SELECT * FROM Users WHERE LAST_NAME = ?");
  $statement->execute([$name]);
  $results = $statement->fetchAll(PDO::FETCH_CLASS,'Users');
  return $results;
}

// function getModulebyId{
//     global $pdo;
//     $statement = $pdo->prepare("SELECT * FROM Users WHERE LAST_NAME = ?");
//     $statement->execute([$name]);
//     $results = $statement->fetchAll(PDO::FETCH_CLASS,'Users');
//     return $results;
    
// }

function getUsersById($USER_ID)
{
  global $pdo;
  $statement = $pdo->prepare("SELECT * FROM Users WHERE USER_ID = ?");
  $statement->execute([$USER_ID]);
  $results = $statement->fetchAll(PDO::FETCH_CLASS,'Users');
  return $results;
}

function addUpdateUser($user){
    global $pdo;
    $statement = $pdo->prepare("
        INSERT INTO Users (USER_ID,FIRST_NAME,LAST_NAME,USERNAME,PASSWORD,PHONE,EMAIL,QUALIFICATION,RESEARCH_MODE,FTE,PHD_COMPLETION,RESEARCH_FUNDING,PUBLICATION_OUTPUT,USER_TYPE_ID_FK,DEPARTMENT_ID_FK) 
        VALUES (:USER_ID,:FIRST_NAME,:LAST_NAME,:USERNAME,:PASSWORD,:PHONE,:EMAIL,:QUALIFICATION,:RESEARCH_MODE,:FTE,:PHD_COMPLETION,:RESEARCH_FUNDING,:PUBLICATION_OUTPUT,:USER_TYPE_ID_FK,:DEPARTMENT_ID_FK)
        ON DUPLICATE KEY UPDATE 
        USER_ID=:USER_ID,FIRST_NAME=:FIRST_NAME,LAST_NAME=:LAST_NAME,USERNAME=:USERNAME,PASSWORD=:PASSWORD,PHONE=:PHONE,EMAIL=:EMAIL,QUALIFICATION=:QUALIFICATION,RESEARCH_MODE=:RESEARCH_MODE,FTE=:FTE,
        PHD_COMPLETION=:PHD_COMPLETION,RESEARCH_FUNDING=:RESEARCH_FUNDING,PUBLICATION_OUTPUT=:PUBLICATION_OUTPUT,USER_TYPE_ID_FK=:USER_TYPE_ID_FK,DEPARTMENT_ID_FK=:DEPARTMENT_ID_FK");
    $statement->bindValue(":USER_ID",$user->USER_ID,PDO::PARAM_STR);
    $statement->bindValue(":FIRST_NAME",$user->FIRST_NAME,PDO::PARAM_STR);
    $statement->bindValue(":LAST_NAME",$user->LAST_NAME,PDO::PARAM_STR);
    $statement->bindValue(":USERNAME",$user->USERNAME,PDO::PARAM_STR);
    $statement->bindValue(":PASSWORD",$user->PASSWORD,PDO::PARAM_STR);
    $statement->bindValue(":PHONE",$user->PHONE,PDO::PARAM_STR);
    $statement->bindValue(":EMAIL",$user->EMAIL,PDO::PARAM_STR);
    $statement->bindValue(":QUALIFICATION",$user->QUALIFICATION,PDO::PARAM_STR);
    $statement->bindValue(":RESEARCH_MODE",$user->RESEARCH_MODE,PDO::PARAM_STR);
    $statement->bindValue(":FTE",$user->FTE,PDO::PARAM_STR);
    $statement->bindValue(":PHD_COMPLETION",$user->PHD_COMPLETION,PDO::PARAM_STR);
    $statement->bindValue(":RESEARCH_FUNDING",$user->RESEARCH_FUNDING,PDO::PARAM_STR);
    $statement->bindValue(":PUBLICATION_OUTPUT",$user->PUBLICATION_OUTPUT,PDO::PARAM_STR);
    $statement->bindValue(":USER_TYPE_ID_FK",$user->USER_TYPE_ID_FK,PDO::PARAM_STR);
    $statement->bindValue(":DEPARTMENT_ID_FK",$user->DEPARTMENT_ID_FK,PDO::PARAM_STR);
    $newUserId = $pdo->lastInsertId();
    $statement->execute();
}

function removeUserByLastName($removed){
    global $pdo;
    $statement = $pdo->prepare("DELETE FROM Users WHERE LAST_NAME = ?");
    $statement->execute([$removed]);
}

function getAllAdmin(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Users WHERE USER_TYPE_ID_FK = 2");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,'Users');
    return $results;
}
function getAdminByLastName($admin){
    global $pdo;
    $statement = $pdo->prepare("SELECT FIRST_NAME,LAST_NAME,PHONE,EMAIL,DEPARTMENT_ID_FK FROM Users WHERE LAST_NAME = ? AND USER_TYPE_ID_FK = 2");
    $statement->execute([$admin]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Users");
    return $results;
}


function getAllDuties(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM AdminDuties");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"AdminDuties");
    return $results;
}

function getDutiesByName($duty){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM AdminDuties WHERE NAME = ?");
    $statement->execute([$duty]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"AdminDuties");
    return $results;
}

function addDuty($duties){
    global $pdo;
    $statement = $pdo->prepare("
        INSERT INTO AdminDuties (ADMIN_DUTY_ID,NAME,NUMBER) 
        VALUES (:ADMIN_DUTY_ID,:NAME,:NUMBER)
        ON DUPLICATE KEY UPDATE 
        ADMIN_DUTY_ID=:ADMIN_DUTY_ID,NAME=:NAME,NUMBER=:NUMBER");
    $statement->bindValue(":ADMIN_DUTY_ID",$duties->ADMIN_DUTY_ID,PDO::PARAM_STR);
    $statement->bindValue(":NAME",$duties->NAME,PDO::PARAM_STR);
    $statement->bindValue(":NUMBER",$duties->NUMBER,PDO::PARAM_STR);
    $newUserId = $pdo->lastInsertId();
    $statement->execute();
}

function removeDutyById($removed){
    global $pdo;
    $statement = $pdo->prepare("DELETE FROM AdminDuties WHERE ADMIN_DUTY_ID = ?");
    $statement->execute([$removed]);
}

function updateDuty($ADMIN_DUTY_ID,$NAME,$NUMBER){
    global $pdo;
    $statement = $pdo->prepare("UPDATE AdminDuties SET ADMIN_DUTY_ID = ?, NAME = ?, NUMBER = ? WHERE ADMIN_DUTY_ID = ?");
    $statement->execute([$ADMIN_DUTY_ID,$NAME,$NUMBER]);
}

function getAllResearch(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM ResearchDuties");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"ResearchDuties");
    return $results;
}

function getResearchByName($research){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM ResearchDuties WHERE NAME = ?");
    $statement->execute([$research]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"ResearchDuties");
    return $results;
}

function addResearch($research){
    global $pdo;
    $statement = $pdo->prepare("
        INSERT INTO ResearchDuties (RESEARCH_DUTIES_ID,NAME) 
        VALUES (:RESEARCH_DUTIES_ID,:NAME)
        ON DUPLICATE KEY UPDATE 
        RESEARCH_DUTIES_ID=:RESEARCH_DUTIES_ID,NAME=:NAME");
    $statement->bindValue(":RESEARCH_DUTIES_ID",$research->RESEARCH_DUTIES_ID,PDO::PARAM_STR);
    $statement->bindValue(":NAME",$research->NAME,PDO::PARAM_STR);
    $newUserId = $pdo->lastInsertId();
    $statement->execute();
}

function removeResearchByName($removed)
{
    global $pdo;
    $statement = $pdo->prepare("DELETE FROM ResearchDuties WHERE NAME = ?");
    $statement->execute([$removed]);

}

function updateResearch($RESEARCH_DUTIES_ID,$NAME){
    global $pdo;
    $statement = $pdo->prepare("UPDATE ResearchDuties SET RESEARCH_DUTIES_ID = ?, NAME = ?  WHERE RESEARCH_DUTIES_ID = ?");
    $statement->execute([$RESEARCH_DUTIES_ID,$NAME]);

}

//function getUserDepartment(){
    //global $pdo;
    //$statement = $pdo->prepare("SELECT * FROM department INNER JOIN users ON department.depId = users.UsersDId");
    //$statement->execute();
    //$results = $statement->fetchAll(PDO::FETCH_CLASS,"userdepartment");
    //return $results;
//}



?>
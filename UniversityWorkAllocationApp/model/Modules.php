<?php
class Modules{
    private $MODULE_ID;
    private $MODULE_NAME;
    private $MODULE_INFORMATION;
    private $LEVEL;
    private $SEMESTER;
    private $NUMBER_OF_STUDENTS;
    private $MODULE_RUNNING;
    private $DISTANCE_LEARNING;
    private $DEPARTMENT_ID;

    


    function __get($name){
        return $this->$name;
    }
    
    function __set($name,$value){
        $this->$name = $value;
    }
  
}
?>
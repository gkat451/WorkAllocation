<?php
class Department{
    private $DEPARTMENT_ID;
    private $NAME;
    private $LOCATION;
    private $SCHOOL_ID;
   


    function __get($name){
        return $this->$name;
    }
    
    function __set($name,$value){
        $this->$name = $value;
    }

}
?>
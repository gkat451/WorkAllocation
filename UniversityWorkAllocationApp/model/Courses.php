<?php
class Courses{
    private $COURSE_ID;
    private $NAME;
    private $DESCRIPTION;
    

    


    function __get($name){
        return $this->$name;
    }
    
    function __set($name,$value){
        $this->$name = $value;
    }
  
}
?>
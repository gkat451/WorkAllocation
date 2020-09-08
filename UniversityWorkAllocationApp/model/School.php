<?php
class School{
    private $SCHOOL_ID;
    private $NAME;
    private $LEADER;
  

    


    function __get($name){
        return $this->$name;
    }
    
    function __set($name,$value){
        $this->$name = $value;
    }
  
}
?>
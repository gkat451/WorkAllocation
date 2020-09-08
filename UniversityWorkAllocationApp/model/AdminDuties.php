<?php
class AdminDuties{
    private $ADMIN_DUTY_ID;
    private $NAME;
    private $NUMBER;
  

    function __get($name){
        return $this->$name;
    }
    
    function __set($name,$value){
        $this->$name = $value;
    }
}
?>
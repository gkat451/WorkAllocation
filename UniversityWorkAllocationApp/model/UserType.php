<?php
class UserType{
    private $USER_TYPE_ID;
    private $NAME;
   

    


    function __get($name){
        return $this->$name;
    }
    
    function __set($name,$value){
        $this->$name = $value;
    }
  
}
?>
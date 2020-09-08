<?php
class ExtraDuties{
    private $EXTRA_DUTIES_ID;
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
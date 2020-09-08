<?php
class ResearchDuties{
    private $RESEARCH_DUTIES_ID;
    private $NAME;

    


    function __get($name){
        return $this->$name;
    }
    
    function __set($name,$value){
        $this->$name = $value;
    }
  
}
?>
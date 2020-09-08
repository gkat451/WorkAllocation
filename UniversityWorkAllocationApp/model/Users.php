<?php
class Users{
    private $USER_ID;
    private $FIRST_NAME;
    private $LAST_NAME;
    private $USERNAME;
    private $PASSWORD;
    private $PHONE;
    private $EMAIL;
    private $QUALIFICATION;
    private $RESEARCH_MODE;
    private $FTE;
    private $PHD_COMPLETION;
    private $RESEARCH_FUNDING;
    private $PUBLICATION_OUTPUT;
    private $USER_TYPE_ID_FK;
    private $DEPARTMENT_ID_FK;


    function __get($name){
        return $this->$name;
    }
    
    function __set($name,$value){
        $this->$name = $value;
    }

    
}
?>
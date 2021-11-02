<?php

require_once(dirname(__FILE__).'/../utils/Database.php');

class Appointment{

    private $_lastname;
    private $_firstname;

    public function __construct($lastname='', $firstname='')
    {
        $this->_lastname=$lastname;
        $this->_firstname=$firstname;
        $this->_pdo = Database::connect();       
    }
    
}
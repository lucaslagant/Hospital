<?php

require_once(dirname(__FILE__).'/../utils/Database.php');

class Appointment{

    private $_id;
    private $_dateHour;
    private $_idPatients;

    public function __construct($id='', $dateHour='', $idPatients='')
    {
        $this->_id=$id;
        $this->_dateHour=$dateHour;
        $this->_idPatients=$idPatients;
        $this->_pdo = Database::connect();       
    }
    
    public function make($lastname, $firstname){

        // try {
        //     $sql = 'INSERT INTO `patients` ( `lastname` , `firstname`) VALUE (:lastname, :firstname);';
        // } catch (\Throwable $th) {
        //     //throw $th;
        // }
    }
}
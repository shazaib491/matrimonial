<?php 

class Connection{

// **********************************************
public  $serverName="localhost";
public  $userName="shazaib";
public  $password="mausamash";
public  $dbName="metrimonial";
public  $conn;
public $result = array();
// ***********************************************
        // connecting to the Database
// ***********************************************
public function __construct(){
    $this->conn=mysqli_connect($this->serverName,$this->userName,$this->password,$this->dbName);
    if($this->conn->connect_error){
        array_push($this->result,$this->mysqli_connect_error);
        return false;

    }
    else
    {

        return true;
    }
}   
// ***********************************************
}
?>
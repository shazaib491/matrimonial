<?php
include 'connection.php';

class Authenticate extends Connection
{


    public function register($table,$fname,$lname,$email,$pass,$cpass)
    {
        if ($this->tableExists($table)) {
            $sql = "INSERT INTO $table(fname,lname,email,pass,cpass) VALUES('$fname','$lname','$email','$pass','$cpass')";            
            if ($this->conn->query($sql)) {
                array_push($this->result, $this->conn->insert_id);
                return true;
            } else {
                echo mysqli_error($this->conn);
                array_push($this->result, $this->conn->error);
                return false;
            }
        }
    }
    public function login($email, $password)
    {
        $sql = "SELECT * FROM admin
          WHERE email = '$email'
          AND pass = '$password'";

        $response = $this->conn->query($sql);
        $rows = mysqli_num_rows($response);
        if ($rows) {
            $detail = mysqli_fetch_assoc($response);
            array_push($this->result, $detail);
            return true;
        } else {
            array_push($this->result, $this->conn->error);
            return false;
        }
    }

    public function tableExists($table)
    {
        $sql = "SHOW TABLES FROM $this->dbName LIKE '$table'";
        $tableInDb = $this->conn->query($sql);
        if ($tableInDb) {
            if ($tableInDb->num_rows == 1) {
                return true;
            } else {
                array_push($this->result, $tableInDb . 'Table Does Not Exist In Database');
                return false;
            }
        }
    }
    public function emailExists($email){
        $slquery = "SELECT 1 FROM admin WHERE email = '$email'";
        $response=$this->conn->query($slquery);
        if($rows=mysqli_num_rows($response)){
            return $rows;
            
        }
        else
        {
            return $rows;
        }
    }
    public function getAll(){
        $sql="SELECT * FROM userInfo";
        if($res=$this->conn->query($sql)){
            return $res;
        }
        else
        {
            echo mysqli_error($res);
        }
    }
    public function deleteUser($id){
        $sql="DELETE FROM userInfo WHERE id='$id'";
        if($this->conn->query($sql)){
            return $response="User Deleted";
        }
        else
        {
            return $response="Something is wrong please ContactUs to service provider";

        }
    }
    public function getResult()
    {
        $val = $this->result;
        $this->result = array();
        return $val;
    }
}

<?php
include 'connection.php';

class Authenticate extends Connection
{
    public function register($table, $uname, $email, $pass, $cpass)
    {
        if ($this->tableExists($table)) {
            $sql = "INSERT INTO $table(uname,email,pass,cpass) VALUES('$uname','$email','$pass','$cpass')";
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
        $sql = "SELECT * FROM userInfo
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
    public function emailExists($email)
    {
        $slquery = "SELECT 1 FROM userInfo WHERE email = '$email'";
        $response = $this->conn->query($slquery);
        if ($rows = mysqli_num_rows($response)) {
            return $rows;
        } else {
            return $rows;
        }
    }
    public function getResult()
    {
        $val = $this->result;
        $this->result = array();
        return $val;
    }
}

<?php
include 'connection.php';
class Middleware extends Connection
{

    // *******************************************    
    public function getId($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id='$id'";
        $response = $this->conn->query($sql);
        if ($row = mysqli_num_rows($response)) {
            $data = mysqli_fetch_assoc($response);
            array_push($this->result, $data);
        } else {
            $error = mysqli_error($this->conn);
            array_push($this->result, $error);
        }
    }
    public function getRecord($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE temp='$id'";
        $response = $this->conn->query($sql);
        if ($row = mysqli_num_rows($response)) {
            $data = mysqli_fetch_assoc($response);
            array_push($this->result, $data);
        } else {
            $error = mysqli_error($this->conn);
            array_push($this->result, $error);
        }
    }

    public function getResult()
    {
        $val = $this->result;
        $this->result = array();
        return $val;
    }
    // *******************************************    
    public function update_info($table, $param = array())
    {
        session_start();
        $id = $_SESSION['id'];
        $args = array();
        foreach ($param[0] as $key => $value) {
            $args[] = "$key='$value'";
        }
        $table_values = implode(',', $args);
        $sql = "UPDATE $table SET  $table_values WHERE id='$id'";
        $response = $this->conn->query($sql);

        if ($response) {

            return $response;
        } else {
            return $response;
            echo mysqli_error($this->conn);
        }
    }
    public function image_update($table,$image){
        $id=$_SESSION['id'];
        $filename = time().$_FILES["image"]["name"]; 
        $tempname = $_FILES["image"]["tmp_name"];
        $folder="../../images/".$filename;
        $sql = "UPDATE $table SET image='$filename' WHERE id='$id'";
        if($this->conn->query($sql)){
            if (move_uploaded_file($tempname, $folder))  { 
                return $msg = "Image uploaded successfully"; 
            }else{ 
                return $msg = "Failed to upload image"; 
          } 
        }
    }
    public function category($table, $gender)
    {
        $sql = "SELECT * FROM $table WHERE gender='$gender'";
        $query = $this->conn->query($sql);
        if ($row = mysqli_num_rows($query)) {
            return $query;
        } else {
            return $query;
        }
    }
    public function intrested($table, $id)
    {
        // ************************************************
        $user = "SELECT * FROM $table WHERE id='$_SESSION[id]'";
        $userResponse = $this->conn->query($user);
        
        $userdata = mysqli_fetch_assoc($userResponse);
        // ************************************************
        // ************************************************  
        $sql = "SELECT * FROM $table WHERE temp='$id'";
        $response = $this->conn->query($sql);
        if ($row = mysqli_num_rows($response)) {
            $data = mysqli_fetch_assoc($response);
            $to = $data['email'];
            $subject = "<h1>Hello&emsp;$data[email]</h1>";
            $from = $userdata['email'];
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            // Create email headers
            $headers .= 'From: ' . $from . "\r\n" .
                'Reply-To: ' . $from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            // Compose a simple HTML email message
            $message = '<html><body>';
            $message .= "<h1 style='color:#f40;'>Hi $data[uname]</h1>";
            $message .= "<p style='color:#080;font-size:18px;'>My Name is $userdata[uname]</p>";
            $message .= "<p style='color:#080;font-size:18px;'>My Mobile no is $userdata[mobile] and i m $userdata[age];?</p>";
            $message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
            $message .= '</body></html>';
            if (mail($to, $subject, $message, $headers)) {
                session_start();
                return $_SESSION['id']=$userdata['id'];
                return $res = 'Your mail has been sent successfully.';
            } else {
                return  $res = 'Unable to send email. Please try again.';
            }
        }
        // Compose a simple HTML email message
        // ************************************************
    }
}

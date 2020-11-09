<?php
session_start();
class Session{
    public function set_id($id){
        $_SESSION['id']=$id;
    }
    public function success($msg,$page_name){
        $_SESSION['success']=$msg;
        header("location:$page_name");
    }
    public function error($msg,$page_name){
        $_SESSION['error']=$msg;
        header("location:$page_name");
    }
    public function display_success(){
        if(isset($_SESSION['success'])){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>$_SESSION[success]</strong>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
        }
      unset($_SESSION['success']);
    }
    public function display_error(){
        if(isset($_SESSION['error'])){
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>$_SESSION[error]</strong>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
        }
      unset($_SESSION['error']);
    }
    public function display_errors(){
      if(isset($_SESSION['errors'])){
          echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          <strong>$_SESSION[errors]</strong>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
      }
    unset($_SESSION['errors']);
  }
    public function user_id(){
        if(!isset($_SESSION['id'])){
          header('location:login.php');
        }
        // else{
        //   header('location:login.php');
        // }
    }
    public function redirector(){
      if(isset($_SESSION['id'])){
        header('location:index.php');
      }
      // else{
      //   header('location:login.php');
      // }
  }
    public function logout(){
        session_destroy();
        session_unset();
        header('location:../../login.php');
    }
}

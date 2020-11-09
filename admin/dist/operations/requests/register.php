<?php

include './../authenticate.php';
include './../session.php';
// ********************************************
// $real_arr = array_diff($_REQUEST, ['register']);
// ********************************************
if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['cpass'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $cpassword = $_POST['cpass'];
  $auth = new Authenticate();
  $row = $auth->emailExists($email);
  if ($row) {
    $_SESSION['error'] = "Email Already Exist";
    header('location:../../register.php');
  } elseif ($password != $cpassword) {
    $_SESSION['error'] = "Password Does not Match";
    header('location:../../register.php');

  } else {
    $auth->register('admin', $fname, $lname, $email, $password, $cpassword);
    $id = $auth->getResult();
    $my_session = new Session();
    $my_session->set_id($id);
    $my_session->success('Welcome User', '../../index.php');
  }
}

// *****************Insert Query***************************

// ******************Insert Query**************************

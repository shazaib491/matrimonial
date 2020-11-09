<?php
include './../authenticate.php';
include './../session.php';
// ********************************************
// $real_arr = array_diff($_REQUEST, ['register']);
// ********************************************
if (isset($_POST['uname'])  && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['cpass'])) {

  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $cpassword = $_POST['cpass'];
  $auth = new Authenticate();
  $row = $auth->emailExists($email);
  if ($row) {
    $_SESSION['error'] = "Email Already Exist";
    header('location:../../auth.php');
  } elseif ($password != $cpassword) {
    $_SESSION['error'] = "Password Does not Match";
    header('location:../../auth.php');

  } else {
    $auth->register('userInfo', $uname, $email, $password, $cpassword);
    $id = $auth->getResult();
    $my_session = new Session();
    $my_session->set_id($id[0]);
    $my_session->success('Welcome User', '../../sliders.php');
  }
}

// *****************Insert Query***************************

// ******************Insert Query**************************

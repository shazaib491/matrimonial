<?php
include './../authenticate.php';
include './../session.php';
// ************************************************
if($_POST['login']){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $auth=new Authenticate();
    $my_session=new Session();
    if($res=$auth->login($email,$password)){
        $response=$auth->getResult();
        $id=$response[0]['id'];
        $my_session=new Session();
        $my_session->set_id($id);
        $_SESSION['uname']=$response[0]['uname'];
        $msg="<h3>Welcome Again $_SESSION[uname]</h3>";
        $page_name="../../sliders.php";
        $my_session->success($msg,$page_name);
    }
    else
    {
        $msg="Please Fill Correct Information";
        $page_name="../../auth.php";
        $my_session->error($msg,$page_name);
    }

}
// *************************************************

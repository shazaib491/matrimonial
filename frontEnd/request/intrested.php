<?php 
include"../session.php";
include"../middleware.php";
$id=$_GET['id'];

$middle=new Middleware();
$my_session=new Session();
$response=$middle->intrested('userInfo',$id,$_SESSION['id']);
$page_name="./../../sliders.php";
$my_session->success($response,$page_name);

?>
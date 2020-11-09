<?php
include "../middleware.php";
include"../session.php";
if(isset($_POST['update'])){
    $middle=new Middleware();
    $filter_arr = array_diff($_POST, array("update"));
    $response=$middle->update_info('userInfo',[$filter_arr]);
    $my_session=new Session();
    if($response){
        $msg="Information Updated";
        $page_name="../../sliders.php";
        $my_session->success($msg,$page_name);
    }
    else
    {
        $msg="Something is Wrong";
        $page_name="../../add-detail.php";
        $my_session->error($msg,$page_name);
    }


}

if(isset($_POST['upload'])){
    $middle=new Middleware();
    $response=$middle->image_update('userInfo',$_FILES['image']);
    $my_session=new Session();
    if($response){
        $msg="Profile Picture Updated";
        $page_name="../../sliders.php";
        $my_session->success($msg,$page_name);
    }
    else
    {
        $msg="Something is Wrong";
        $page_name="../../add-detail.php";
        $my_session->error($msg,$page_name);
    }
}




?>
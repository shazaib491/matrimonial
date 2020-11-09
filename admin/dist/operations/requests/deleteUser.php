<?php
$id = $_GET['id'];
include "../authenticate.php";
include "../session.php";
$auth = new Authenticate();
$my_session = new Session();
$data = $auth->deleteUser($id);
if ($data) {
    $page_name = "../../index.php";
    $my_session->success($data, $page_name);
} else {
    $page_name = "../../index.php";
    $my_session->error($data, $page_name);
}

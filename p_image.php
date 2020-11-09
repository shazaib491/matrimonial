<?php include "./partial/header.php";
include "./frontEnd/session.php";
include "./frontEnd/middleware.php";
$middle = new Middleware();
$my_session = new Session();
$middle->getId('userInfo', $_SESSION['id']);
$data = $middle->getResult();

?>

<div class="row" style="margin-top: 50px;">
    <div class="col-md-12">
        <a href="sliders.php" class="btn btn-default" style="margin-left: 20px;">Go back</a>
        <form action="frontEnd/request/info.php" enctype="multipart/form-data" method="POST">
            <div class="form-group" style="display:flex;justify-content:center">
                <img src="images/<?= $data[0]['image'] ? $data[0]['image'] : 'dumy.png' ?>" class="img-responsive" style="width:100px" alt="">
            </div>
            <div class="form-group" style="display:flex;justify-content:center">
                <input type="file" name="image" id="" style="border: 1px solid black;padding:5px" required>
            </div>
            <button type="submit" name="upload" value="upload" class="btn btn-primary" style="display: block;margin-left:auto;margin-right:auto;border-radius:0px">Add Image</button>
        </form>
    </div>
</div>



<?php include "./partial/footer.php"; ?>
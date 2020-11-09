<?php include "./partial/header.php";
include"./frontEnd/middleware.php";
include"./frontEnd/session.php";
$middle=new Middleware();
$middle->getId('userInfo',$_SESSION['id']);
$info=$middle->getResult();

?>

<style>
    .img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        display: block;
        margin: auto;
        padding: 10px;
        
    }
</style>

<div class="row">
<a href="sliders.php" class="btn btn-default" style="margin-left: 20px;">Go back</a>
    <div class="col-md-12" style="margin-top:30px;">
        <img src="images/<?= $info[0]['image']?$info[0]['image']:'dumy.png' ?>" class="img img-responsive thumbnail" alt="" srcset="">
        <!-- <button type="button" class="btn btn-md btn-primary" style="display: block;margin:auto;margin-top:10px;border-radius:0%;width:20%">Intrested</button> -->

    </div>
    <div class="col-md-2"></div>
    <div class="col-md-8 >
    <ul class=" list-group" style="margin-top:30px;">
        <li class="list-group-item">
            <span class="badge">Name</span>
            <?= $info[0]['uname'] ?>
        </li>
        <li class="list-group-item">
            <span class="badge">Email</span>
            <?= $info[0]['email'] ?>
        </li>
        <li class="list-group-item">
            <span class="badge">Father Name</span>
            <?= $info[0]['f_name'] ?>
        </li>
        <li class="list-group-item">
            <span class="badge">Occupation</span>
            <?= $info[0]['occupation'] ?>
        </li>
        <li class="list-group-item">
            <span class="badge">Location</span>
            <?= $info[0]['location'] ?>
        </li>
        <li class="list-group-item">
            <span class="badge">Education</span>
            <?= $info[0]['education'] ?>
        </li>
        <li class="list-group-item">
            <span class="badge">Gender</span>
            <?= $info[0]['gender'] ?>
        </li>
        <li class="list-group-item">
            <span class="badge">Age</span>
            <?= $info[0]['age'] ?>
        </li>
        <li class="list-group-item">
            <span class="badge">DOB</span>
            <?= $info[0]['dob'] ?>
        </li>
        <li class="list-group-item">
            <span class="badge">Status</span>
            <?= $info[0]['status'] ?>
        </li>
        <li class="list-group-item text-justify" >
            <span class="badge">More Detail</span>
            <p style="padding: 30px;">
            <?= $info[0]['m_Detail'] ?>
        
        </p>
        </li>
        </ul>
    </div>
    <div class="col-md-2" style="padding: 30px;"></div>

</div>


<?php include "./partial/footer.php"; ?>
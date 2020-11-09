<?php include "partial/header.php";
include "./frontEnd/session.php";
include "./frontEnd/middleware.php";
$my_session = new Session();
$middle = new Middleware();
$middle->getId('userInfo', $_SESSION['id']);
$arr = $middle->getResult();
// **********************Male************************
$male = $middle->category('userInfo', 'male');
// **********************Male************************
// **********************Female************************
$female = $middle->category('userInfo', 'female');
// **********************Female************************


?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<style>
    .rounded {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

    .card {
        width: 300px;
        border: 5px solid #f067ae;
        border-bottom: 0px;
        border-top: 0px;
        padding: 50px;
        margin: 20px;

    }

    .title {
        text-align: center;
        margin-top: 5px;
        font-weight: bolder;
        text-decoration: underline;

    }

    .img-circle {
        width: 30px;
        height: 100px;
        border-radius: 50%;
        display: block;
        margin: auto;
    }

    ul>li {
        list-style-type: none
    }
</style>
<div class="row" style="margin-top: 50px;"> 
<div class="col-md-3"></div>
    <div class="col-md-6 text-center" style="display:block;margin:auto">
        <?php $my_session->display_success();
        ?>
    </div>
<div class="col-md-3"></div>

</div>
<div class="row">
    <div class="col-md-12" style="display:flex;justify-content:center">
    <?php if(isset($_SESSION['id'])){  ?>
    <a href="./add-detail.php" class="text-primary " style="margin-left:20px;font-weight:bold;border-top:1px solid black;border-bottom:1px solid black;padding:5px;">Add Detail</a>
        <a href="./detail.php" class="text-primary " style="margin-left:20px;font-weight:bold;border-top:1px solid black;border-bottom:1px solid black;padding:5px;">Profile</a>
        <a href="./p_image.php" class="text-primary " style="margin-left:20px;font-weight:bold;border-top:1px solid black;border-bottom:1px solid black;padding:5px;">Add Image</a>
        <a href="./frontEnd/request/logout.php" class="text-primary " style="margin-left:20px;font-weight:bold;border-top:1px solid black;border-bottom:1px solid black;padding:5px;">Logout</a>
    <?php } ?>
    </div>
</div>
<div class="owl-carousel owl-theme ">
    <?php foreach ($male as $data) { ?>
        <div class="item col-md-4">
            <div class="card">
                <h1 class="text-center">Groome</h6>
                    <br>
                    <img src="images/<?= $data['image']?$data['image']:'dumy.png' ?>" class="img-circle thumbnail" alt="" srcset="">
                    <p class="title"><?= $data['uname']; ?></p>
                    <ul>
                        <li>
                            <span class="text-left">Gender</span> <span style="float:right"><?= $data['gender']; ?></span>
                        </li>
                        <li>
                            <span class="text-left">Location</span> <span style="float:right"><?= $data['location']; ?></span>
                        </li>
                    </ul>
                    <br>
                    <a href="detail2.php?id=<?= $data['temp']; ?>" class="btn  btn-default center-block" >Read more</a>

            </div>
        </div>

        <?php } ?>
</div>


<div class="owl-carousel owl-theme " style="border-top:5px solid #f067ae">
    <?php foreach ($female as $data) { ?>
        <div class="item ">
            <div class="card">
                <h1 class="text-center">Bride</h6>
                    <br>
                    <img src="images/<?= $data['image']?$data['image']:'dumy.png' ?>" class="img-circle" alt="" srcset="">
                    <p class="title"><?= $data['uname']; ?></p>
                    <ul>
                        <li>
                            <span class="text-left">Gender</span> <span style="float:right"><?= $data['gender']; ?></span>
                        </li>
                        <li>
                            <span class="text-left">Location</span> <span style="float:right"><?= $data['location']; ?></span>
                        </li>
                    </ul>
                    <br>
                    <a href="detail2.php?id=<?= $data['temp']; ?>" class="btn  btn-default center-block" >Read more</a>
                    

            </div>
        </div>

        <?php } ?>
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js
"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 4
            }
        }
    })
</script>
<?php include "partial/footer.php"; ?>
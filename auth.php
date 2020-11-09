<?php include "./partial/header.php";
include "./frontEnd/session.php";
$my_session=new Session();

?>
<div class="row">
    <div class="col-md-12" style="margin-top: 50px;display:flex; justify-content:center;">
    <?php
        $my_session->display_success();
        $my_session->display_error();
        ?>
    </div>
</div>



<div class="row" style="padding:50px">
    <div class="col-md-6" style="display:flex;justify-content:center;" >
        
        <form action="frontEnd/request/login.php" method="post" class="col-md-10" style="padding:50px;border:1px solid black" >
        <h1 class="text-center">Login</h1>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" id="" class="form-control" placeholder="Enter Email">    
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control" placeholder="Enter Password">
            </div>
        <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
        </form>
    </div>
    <div class="col-md-6" style="display:flex;justify-content:center;">
        <form action="frontEnd/request/register.php" method="post" class="col-md-10" style="padding:50px;border:1px solid black"" >
        <h1 class="text-center">Register</h1>
        <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="uname" id="" class="form-control" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" id="" class="form-control" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="pass" id="" class="form-control" placeholder="Enter password" required>
            </div>
            <div class="form-group">
                <label for="">Confirm-Password</label>
                <input type="password" name="cpass" id="" class="form-control" placeholder="Enter confirm password" required>
            </div>
        <button type="submit" class="btn btn-primary" name="register" value="register">Register</button>
        </form>
    </div>
</div>
<?php include "./partial/footer.php"; ?>

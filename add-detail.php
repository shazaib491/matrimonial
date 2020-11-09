<?php include"./partial/header.php"; 
include"./frontEnd/session.php";
include"./frontEnd/middleware.php";
$middle=new Middleware();
$info=$middle->getId('userInfo',$_SESSION['id']);
$detail=$middle->getResult();

?>

<div class="row">
<a href="sliders.php" class="btn btn-default" style="margin-left: 20px;">Go back</a>

<div class="col-md-12" style="display:flex;justify-content:center;margin-top:50px;" >
        <form action="frontEnd/request/info.php" method="post" class="col-md-6" style="padding:50px;border:1px solid black" >
        <h1 class="text-center">Add Detail</h1>
        <input type="hidden" name="temp" value="<?= time();  ?>" >    
            <div class="form-group">
                <label for="">Father Name</label>
                <input type="text" name="f_name" value="<?= $detail[0]['f_name']?$detail[0]['f_name']:'' ?>" class="form-control" placeholder="Enter Father Name">    
            </div>
            <div class="form-group">
                <label for="">Occupation</label>
                <input type="text" name="occupation" value="<?= $detail[0]['occupation']?$detail[0]['occupation']:'' ?>" class="form-control" placeholder="Enter Occupation">    
            </div>
            <div class="form-group">
                <label for="">Location</label>
                <input type="text" name="location" id="" value="<?= $detail[0]['location']?$detail[0]['location']:'' ?>" class="form-control" placeholder="Enter Location">    
            </div>
            <div class="form-group">
                <label for="">Education</label>
                <input type="text" name="education" id="" value="<?= $detail[0]['education']?$detail[0]['education']:'' ?>" class="form-control" placeholder="Enter Father Name">    
            </div>
            <div class="form-group">
                <label for="">DOB</label>
                <input type="date" name="dob" id="" value="<?= $detail[0]['dob']?$detail[0]['dob']:'' ?>" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Age</label>
                <input type="text" name="age" id="" class="form-control" value="<?= $detail[0]['age']?$detail[0]['age']:'' ?>"  placeholder="Enter Age">
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                <select name="gender" id="" class="form-control">
                    <option value="<?= $detail[0]['gender']?$detail[0]['gender']:'' ?>"><?= $detail[0]['gender']?$detail[0]['gender']:'' ?></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Martial Status</label>
                <select name="status" id="" class="form-control">
                    <option value="<?= $detail[0]['status']?$detail[0]['status']:'' ?>"><?= $detail[0]['status']?$detail[0]['status']:'' ?></option> 
                    <option value="married">Married</option>
                    <option value="unmarried">UnMarried</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" name="mobile" value="<?= $detail[0]['mobile']?$detail[0]['mobile']:'' ?>" class="form-control" placeholder="Enter Mobile">
            </div>
            <div class="form-group">
                <label for="">More Detail</label>
                <textarea name="m_Detail" class="form-control" id="" cols="30" rows="10">
                    <?= $detail[0]['m_Detail']?$detail[0]['m_Detail']:'';  ?>

                </textarea>
            </div>
            <option value=""></option>

        <button type="submit" class="btn btn-primary" name="update" value="update">Update</button>
        </form>
    </div>
</div>


<?php include"./partial/footer.php"; ?>
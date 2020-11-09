<?php include"external/header.php";  
    include"./operations/authenticate.php";
    $userInfo=new Authenticate();
    $data=$userInfo->getAll();
?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div id="">
                <main>
                      
                    <div class="container-fluid">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
<?php $my_session->display_success(); ?>
<?php $my_session->display_error(); ?>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>F_Name</th>
                                                <th>Occupation</th>
                                                <th>location</th>
                                                <th>Education</th>
                                                <th>Age</th>
                                                <th>DOB</th>
                                                <th>Status</th>
                                                <th>Gender</th>
                                                <th>Detail</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>Image</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>F_Name</th>
                                                <th>Occupation</th>
                                                <th>location</th>
                                                <th>Education</th>
                                                <th>Age</th>
                                                <th>DOB</th>
                                                <th>Status</th>
                                                <th>Gender</th>
                                                <th>Detail</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php foreach($data as $info) { ?>
                                            <tr>
                                                <td><img src="../../images/<?= $info['image']?$info['image']:'dumy.png' ?>" style="width: 100px;height:100px" alt=""></td>
                                                <td><?= $info['uname'] ?></td>
                                                <td><?= $info['email'] ?></td>
                                                <td><?= $info['f_name'] ?></td>
                                                <td><?= $info['occupation'] ?></td>
                                                <td><?= $info['location'] ?></td>
                                                <td><?= $info['education'] ?></td>
                                                <td><?= $info['age'] ?></td>
                                                <td><?= $info['dob'] ?></td>
                                                <td><?= $info['status'] ?></td>
                                                <td><?= $info['gender'] ?></td>
                                                <td><?= $info['m_Detail'] ?></td>
                                                <td><a class="btn btn-danger" href="operations/requests/deleteUser.php?id=<?= $info['id']; ?>">Delete</a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
                      

  <?php include"external/footer.php";  ?>

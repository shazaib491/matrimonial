<?php include"external/header.php";
include'operations/connection.php';
$sql="SELECT * FROM `data`";
$result = mysqli_query($con, $sql);
?>
<div id="layoutSidenav_content">
  <main>
    <div class="card mb-4">

        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      </tr>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>images</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                          <th >Title</th>
                          <th >Description</th>
                          <th >Images</th>
                        </tr>
                    </tfoot>
                    <tr>
                      <!-- <button class="btn btn-dark" id="loadData" >Load</button> -->
                    </tr>
                    <!-- <tbody id="data">
                        <tr>

                        </tr>
                    </tbody> -->
                    <tbody>
                      <?php while($row=mysqli_fetch_assoc($result)){
                       ?>
                       <tr>

                       <td class="text-center"><?php echo $row['title']; ?></td>
                       <td class="text-center"><?php echo $row['descrip']; ?></td>
                       <td  class="text-center"><img src="operations/images/<?php echo $row['image']; ?>" class="img-fluid w-25" alt="..."></td>
                     </tr>

                     <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </main>
</div>

<?php include"external/footer.php";  ?>

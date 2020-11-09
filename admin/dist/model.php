<?php include"external/header.php";  ?>
<div id="layoutSidenav_content">
  <main>
  <div class="container-fluid">
  <div class="">
    <div id="sc">
      <div class="alert alert-success" id="success">
      </div>
    </div>
    <div id="er">
      <div class="alert alert-danger" id="error">
      </div>

    </div>
    <form id="basic" enctype="multipart/form-data">
      <div class="form-group col-lg-6 m-auto">
        <label for="">title</label>
        <input type="text" id="title" class="form-control">
      </div>
      <div class="form-group col-lg-6 m-auto">
        <label for="">Description</label>
        <input type="text" id="descrip" class="form-control">
      </div>
<br>
    <div class="custom-file col-lg-6  mx-auto d-block ">
      <input type="file" class="custom-file-input " id="fileses" name="image" required>
      <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
    </div>

      <button type="submit" id="saveButton" class="btn btn-success mx-auto d-block mt-4 w-50" name="button">Submit</button>

    </form>
  </div>
</main>

</div>
</div>
<?php include"external/footer.php";  ?>

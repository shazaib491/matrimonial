<?php
include("connection.php");
$title=$_POST['title'];
$descrip=$_POST['descrip'];
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];

$sql="INSERT INTO `data`(`title`, `descrip`,`image`) VALUES ('$title','$descrip','$file_name')";
$query=mysqli_query($con,$sql);
if($query){
  move_uploaded_file($file_tmp,"images/".$file_name);
  echo 'data inserted';
}
else {
  echo 'data  not inserted';

}


 ?>

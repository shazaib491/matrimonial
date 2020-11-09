<?php
include("connection.php");
$sql="SELECT * FROM `data`";
$result = mysqli_query($con, $sql);
$output="";

if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){

    $image = "images/".$row['image'];
    $imageData = base64_encode(file_get_contents($image));
    $src = 'data: '.mime_content_type($image).';base64,'.$imageData;

    $imageData = base64_encode(file_get_contents($image));
    $src = 'data: '.mime_content_type($image).';base64,'.$imageData;
print_r($src);exit;
    $output="<tr>
                <td>{$row["title"]}</td>
                <td>{$row["descrip"]}</td>
                </tr>
            ";
            echo $output;
          }
  }
else {
  echo 'No Record Found';
}


 ?>

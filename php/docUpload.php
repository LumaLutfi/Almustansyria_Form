<?php

include "db_conn.php";

  //if file upload form is submitted
if(isset($_POST['submit'])){
//echo "<pre>", print_r($_FILES['files']['name']), "</pre>";
$name = $_POST['fname'];

$fileCount = count($_FILES['files']['name']);
for ($i=0; $i<$fileCount; $i++){

$profileImageName= $_FILES['files']['name'][$i];
$upload_dir = 'doc/'. $profileImageName; // upload directory
if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $upload_dir)){

    $sql = "INSERT INTO profile_doc (fname, document) VALUES ('$name','$profileImageName')";
    if(mysqli_query($conn, $sql)){
    echo "Image uploaded and saved to db";
   }
    else{
        echo "db Error: Failed to save user";
    }
  }else{
    echo 'Error in uploading file -'.$_FILES['files']['name'][$i].'<br/>';
  }
    } 
  }


?>
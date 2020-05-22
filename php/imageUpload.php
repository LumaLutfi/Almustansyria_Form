<?php
include 'db_conn.php';


  //if file upload form is submitted
if(isset($_POST['submit'])){
//echo "<pre>", print_r($_FILES['picture']['name']), "</pre>";
$name = $_POST['fname'];
//to avoid conflict with other images name so the name should be unique
$profileImageName= time() . '_' . $_FILES['picture']['name'];
$upload_dir = 'images/'. $profileImageName; // upload directory

if(move_uploaded_file($_FILES['picture']['tmp_name'], $upload_dir)){
      
    $sql = "INSERT INTO profile_image (fname, picture) VALUES ('$name','$profileImageName')";
if(mysqli_query($conn, $sql)){
echo "Image uploaded and saved to db";
}else{
echo "db Error: Failed to save user";
}
}else{
    echo "Failed to upload";
 }
}
?>
<?php
//Upload Image
$msg = "";
$css_class="";
$conn = mysqli_connect("localhost", "root","", "AlMustanseriya_Staff");
$conn->set_charset("UTF8"); //insert arabic text into database
if (!$conn){
    
    die('Could not connect: ' . mysqli_error());
    
  }
if(isset($_POST['submit']))
{

$imgFile = $_FILES['picture']['name'];
$tmp_dir = $_FILES['picture']['tmp_name'];
$imgSize = $_FILES['picture']['size'];
//to avoid conflict with other images name so the name should be unique
$profileImageName= time() . '_' . $_FILES['picture']['name'];
$name=$_POST['fname'];
$upload_dir = 'images/'. $profileImageName; // upload directory

$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

// valid image extensions
//$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

// rename uploading image
$coverpic = rand(1000,1000000).".".$imgExt;

// allow valid image file formats
//if(in_array($imgExt, $valid_extensions))
//{
// Check file size '5MB'
//if($imgSize < 5000000)
//{

if(move_uploaded_file($tmp_dir,$upload_dir.$coverpic)){
    $sql = "INSERT INTO profile_image (fname, picture) VALUES ('$name','$profileImageName')";
    
    if (mysqli_query($conn, $sql)){
        $msg = "Image uploaded";
        $css_class="alert-success";
    }else{
        $errMSG = "Database Error: Faild to save user";
        $css_class="alert-danger";
    }
  }
}
//else{
//$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//}
//}
?>
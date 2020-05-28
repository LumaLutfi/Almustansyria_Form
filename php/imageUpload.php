<?php
include 'db_conn.php';
<<<<<<< HEAD


=======

<<<<<<< HEAD

>>>>>>> dedd5312db85a29defc1f8ab1c567abdcaef62b3
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
<<<<<<< HEAD
=======
=======
  //if file upload form is submitted
  $status=$msg = '';
if(isset($_POST['submit']))
{
    $status='error';
//$tmp_dir = $_FILES['picture']['tmp_name'];
//$imgSize = $_FILES['picture']['size'];
//to avoid conflict with other images name so the name should be unique
if (!empty($_FILES["picture"]["name"])){
    $fileName = basename($_FILES['picture']['name']);
    $imgExt = pathinfo($fileName,PATHINFO_EXTENSION); 

    //Allow certain file formats
    $allowTypes=array('jpg','png','jpeg', 'gif');
    if(in_array($imgExt, $allowTypes)){
        $imagFile = $_FILES['picture']['tmp_name'];
        $imgContent = addslashes(file_get_contents($imagFile));

        //insert img conents into db
        $profileImageName= time() . '_' . $_FILES['picture']['name'];
        $upload_dir = 'images/'. $profileImageName; // upload directory
        move_uploaded_file($imagFile,$upload_dir);
    $sql = "INSERT INTO profile_image (fname, picture) VALUES ('$imgContent', NOW())";
if ($sql){
//$name=$_POST['fname'];
$status= 'success';
$msg= "file uploaded successfully.";
}else{
    $msg = "File upload failed, please try again."; 
 }
}else{
    $msg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
}
}else{
    $msg = 'Please select an image file to upload.'; 
}
 }

    
// get image extension

// valid image extensions
//$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

// rename uploading image
//$coverpic = rand(1000,1000000).".".$imgExt;
//if (in_array($imgExt, $valid_extensions)){
    

    
//     
//Display status message
echo $msg;

>>>>>>> 401d82e8d457924eff6ef8b5f3188576345c48fb
>>>>>>> dedd5312db85a29defc1f8ab1c567abdcaef62b3
?>
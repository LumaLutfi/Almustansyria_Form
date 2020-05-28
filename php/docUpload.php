<?php
if(isset($_POST['submit'])){ 
include "db_conn.php";

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> dedd5312db85a29defc1f8ab1c567abdcaef62b3
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
<<<<<<< HEAD
    } 
  }


=======
    } 
  }


=======
$targetDir = "doc/"; 
$allowTypes = array('jpg','png','jpeg','gif','pdf'); 
 
$statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
$fileNames = array_filter($_FILES['files']['name']); 
if(!empty($fileNames)){ 
    foreach($_FILES['files']['name']as $key=>$val){ 
        // File upload path 
        $fileName = basename($_FILES['files']['name'][$key]); 
        $targetFilePath = $targetDir . $fileName; 
         
        // Check whether file type is valid 
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES['files']["tmp_name"][$key], $targetFilePath)){ 
                // Image db insert sql 
                $insertValuesSQL .= "('".$fileName."', NOW()),"; 
            }else{ 
                $errorUpload .= $_FILES['files']['name'][$key].' | '; 
            } 
        }else{ 
            $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
        } 
    } 
     
    if(!empty($insertValuesSQL)){ 
        $insertValuesSQL = trim($insertValuesSQL, ','); 
        // Insert image file name into database 
        $insert = $conn->query("INSERT INTO profile_doc (fname, document) VALUES $insertValuesSQL"); 
        if($insert){ 
            $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
            $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
            $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
            $statusMsg = "Files are uploaded successfully.".$errorMsg; 
        }else{ 
            $statusMsg = "Sorry, there was an error uploading your file."; 
        } 
    } 
}else{ 
    $statusMsg = 'Please select a file to upload.'; 
} 
 
// Display status message 
echo $statusMsg; 
}
>>>>>>> 401d82e8d457924eff6ef8b5f3188576345c48fb
>>>>>>> dedd5312db85a29defc1f8ab1c567abdcaef62b3
?>
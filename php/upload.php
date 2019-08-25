<?php
$uploaddir = 'uploads/';

$uploadfile = $uploaddir . basename($_FILES['image']['name']);
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions= array("jpeg","jpg","png");

 if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    echo "Upload successful.";
    }else{
    echo "Upload failed.";
}
?> 


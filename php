<?php
$uploaddir = 'uploads/';

$uploadfile = $uploaddir . basename($_FILES['image']['name']);

if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    echo "Your image has been uploaded.";
} else {
    echo "Upload failed.";
}
?> 

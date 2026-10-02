<?php

   $file_name = $_FILES['photo']['name'];
   $tmp_path  = $_FILES['photo']['tmp_name'];
   $size      = $_FILES['photo']['size'];
   $limit_size = 2 * 1024 * 1024; // 2mb

// check 1 =  only allow images
$allowed_exts = ['jpg', 'jpeg', 'png'];
$ext =  pathinfo($file_name, PATHINFO_EXTENSION  );

if( in_array( $ext, $allowed_exts) == false ) {
    die("selected file type is not allowed");
} 

// check 2 =  don't allow more than 2mb files
if($size > $limit_size) {
    die("File size should be less than 2mb");
}

// check 3 = rename uploaded files
$new_path = "photos/" . uniqid() . ".$ext";

// saving in our folder
move_uploaded_file($tmp_path, $new_path);

?>
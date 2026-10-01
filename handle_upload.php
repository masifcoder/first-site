<?php


// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

echo "-------------------------<br>";

echo "<pre>";
print_r($_FILES['photo']);
echo "</pre>";

$file = $_FILES['photo'];


// step 1 settings


//only images are allowed
$allowed_exts = ['jpeg', 'jpg', "png", "webp"];

// extracting extension from original file name
$ext =  pathinfo($file['name'],  PATHINFO_EXTENSION);

if (!in_array($ext, $allowed_exts)) {
    exit("File you selected is not allowed");
}

// file size ????


// unique image name
$new_file_path = "uploads/" . uniqid() . "." . $ext;



//move uploaded file
move_uploaded_file($file['tmp_name'],  $new_file_path);

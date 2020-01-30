<?php

require_once "models/posts.php";

// Initialisation of the  variables
$errors = array();
$comment = "";
$fileName = "";
$directory = "uploads/";

// To finish
if(filter_has_var(INPUT_POST, 'submit')){
    $comment = trim(filter_input(INPUT_POST,'comment',FILTER_SANITIZE_STRING));
    
    if(isset($_FILE['file'])){
        $typeOfFile = getMimeType(($_FILES['file']);
        $file = $_FILES['file'];
        $fileName = basename($file);
        $targetFile = $directory . $fileName;
        move_uploaded_file($file, $targetFile);  
    }  
}



//Checks if the file is an image
function getMimeType($filename)
{
    // Adapted from a code found online at : https://stackoverflow.com/questions/15408125/php-check-if-file-is-an-image
    // Additional information at : https://stackoverflow.com/questions/24852830/getimagesize-vs-finfo-file-for-detecting-image-type
    $mimetype = false;
    if(function_exists('finfo_open')) {
        // open with FileInfo
        $mimetype = finfo_file($fileName);

    } elseif(function_exists('getimagesize')) {
        // open with GD
        $mimetype = getMimeType($fileName)
    } elseif(function_exists('exif_imagetype')) {
       // open with EXIF
       $mimetype = exif_imagetype($fileName);
    } elseif(function_exists('mime_content_type')) {
       $mimetype = mime_content_type($filename);
    }
    return $mimetype;
}


include './views/index.php';
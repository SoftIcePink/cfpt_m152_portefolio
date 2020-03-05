<?php
//  Projet      :   Portefolio - M152
//  Author      :   SoftIcePink
//  Git         :   https://github.com/SoftIcePink/cfpt_m152_portefolio
//  File        :   addpost.php
//  Description :   This file is used as the 'adding post'-controller for this app.
//  Last update :   19.02.2019

require_once 'models/posts.php';


// Initialization of variables

$idPost = "";
$commentaire = "";
$creationDatePost = "";
$modificationDatePost = "";

$PATH = 'uploads/';

$errors = array();

// Verification of the user's data
if (filter_has_var(INPUT_POST,'submit')) {

    $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);

    /* FILE SECTION */
    // Count the number of files
    $fileCounter = count($_FILES['file']['name']);
    $idPost = addPost($comment, date("Y-m-d h:i:sa"));

    // Looping through the files
    for($i = 0; $i < $fileCounter ; $i++){

        $mediaSize = $_FILES['file']['size'][$i];
        $tmpName = $_FILES['file']['tmp_name'][$i];
        $mediaName = $_FILES['file']['name'][$i];
        // Filter file type
            // Filter size
            if($mediaSize > 3000 && $mediaSize < 700000000){
                // Upload file
                $mediaType = getMimeType($mediaName);
                $mediaPath = 'uploads/'.date('Y-M-d_hisa').$mediaName;
                move_uploaded_file($tmpName, $mediaPath);
                addMedia($mediaType, $mediaName, $mediaPath, date("Y-m-d h:i:sa"), $idPost);
            } else{
                $error['image'] = "La taille de votre image doit être entre 3 Mo et 70 Mo.";
            }
        }
    //}
    /* END OF FILE SECTION */
}



//Checks if the file is an image
function getMimeType($filename)
{
    // Adapted from a code found online at : https://stackoverflow.com/questions/15408125/php-check-if-file-is-an-image
    // Additional information at : https://stackoverflow.com/questions/24852830/getimagesize-vs-finfo-file-for-detecting-image-type
    $mimetype = "";
   /* if(function_exists('finfo_file')) {
        // open with FileInfo
        $mimetype = finfo_file($filename);

    } else*/

        if(function_exists('mime_content_type')) {
       $mimetype = mime_content_type($filename);
    }
    return $mimetype;
}

$posts = getPosts();
include './views/index.php';


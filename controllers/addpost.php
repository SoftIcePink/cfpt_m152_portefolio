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


$errors = array();

// Verification of the user's data
if (filter_has_var(INPUT_POST,'submit')) {

    $comment = trim(filter_input(INPUT_POST, 'commentaire', FILTER_SANITIZE_STRING));


    /* FILE SECTION */
    // Count the number of files
    $fileCounter = count($_FILES['file']['name']);


    // Looping through the files
    for($i = 0; $i < $fileCounter ; $i++){

        $filesize = $_FILES['file']['size'][$i];
        $filename = $_FILES['file']['name'][$i];
        
        // Filter file type
        if(getMimeType($_FILES['file']['name'][$i]) == true){

            // Filter size
            if($filesize > 300 && $filesize < 7000000000000){
                // Upload file
                move_uploaded_file($_FILES['file']['tmp_name'][$i], 'uploads/'.$_FILES['file']['tmp_name'][$i]);
            } else{
                $error['image'] = "La taille de votre image doit être entre 3 Mo et 70 Mo.";
            }
        }
        else{
            $error['file'] = "Mauvais type de fichier. Veuillez seulement utiliser des images.";
        }
        addPost($comment, date("Y-m-d h:i:sa"));
        
    }

    /* END OF FILE SECTION */

}




//Checks if the file is an image
function getMimeType($filename)
{
    // Adapted from a code found online at : https://stackoverflow.com/questions/15408125/php-check-if-file-is-an-image
    // Additional information at : https://stackoverflow.com/questions/24852830/getimagesize-vs-finfo-file-for-detecting-image-type
    $mimetype = false;
    if(function_exists('finfo_open')) {
        // open with FileInfo
        $mimetype = finfo_file($filename);

    } elseif(function_exists('getimagesize')) {
        // open with GD
        $mimetype = getMimeType($filename);

    } elseif(function_exists('exif_imagetype')) {
       // open with EXIF
       $mimetype = exif_imagetype($filename);

    } elseif(function_exists('mime_content_type')) {
       $mimetype = mime_content_type($filename);
    }
    return $mimetype;
}

include './views/index.php';

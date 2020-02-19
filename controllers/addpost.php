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

$idMedia = "";
$typeMedia = "";
$nomMedia = "";
$creationDateMedia = "";
$modificationDateMedia = "";


$errors = array();

// Verification of the user's data
if (filter_has_var(INPUT_POST,'submit')) {
    
    $idPost = trim(filter_input(INPUT_POST,'title',FILTER_SANITIZE_STRING));
    $commentaire = trim(filter_input(INPUT_POST,'commentaire',FILTER_SANITIZE_STRING);
    
    if(filter_has_var(INPUT_POST, 'media',));
}

include './views/index.php';
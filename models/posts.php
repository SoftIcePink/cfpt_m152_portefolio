<?php

//  Projet      :   Portefolio - M152
//  Author      :   SoftIcePink
//  Git         :   https://github.com/SoftIcePink/cfpt_m152_portefolio
//  File        :   posts.php
//  Description :   This file is used as the model of posts
//  Last update :   19.02.2019

require_once 'models/dbconnexion.php';

/**
 * gets all posts from the posts table as well as every media that were attached to each posts
 * @return array table contains all the records from the table
 */
function getAllPosts(){
    $db = connectDB();
    $sql = "SELECT posts.idPost, posts.commentaire, posts.creationDate, posts.modificationDate, medias.nomMedia, medias.idMedia, medias.typeMedia
            FROM posts 
            JOIN medias ON posts.idPost=medias.idPost;";
    $request = $db->prepare($sql);
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Adds a post which contains no images.
 */
function addPost($commentaire, $creationDatePost, $modificationDatePost){
    $db = connectDB();
    $sql = "INSERT INTO posts("
}

/**
 * Adds a post which contains one or multiple images.
 */
function addPost($commentaire, $creationDatePost, $modificationDatePost, $media){
    foreach($media as $m){

    }
}


function addMedia($mediaType, $mediaName, $idPost){
    $db = connectDB();
    $sql = "INSERT INTO medias(typeMedia,nomMedia, creationDate, modificationDate,  "
}

/**
 * Edits a post which contains no images.
 */
function editPost($idPost, $commentaire, )

/**
 * Edits a post which contains 1 or multiple images.
 */
function editPost($idPost, $commentaire,){
    
}

/**
 * Deletes a post.
 */
function deletePost(){

}

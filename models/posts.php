<?php

//  Projet      :   Portefolio - M152
//  Author      :   SoftIcePink
//  Git         :   https://github.com/SoftIcePink/cfpt_m152_portefolio
//  File        :   posts.php
//  Description :   This file is used as the model of posts
//  Last update :   19.02.2019

require_once 'models/dbconnexion.php';




// Create
function addPost($comment, $date){
    $db = connectDB();
    $query = "INSERT into posts (comment, creationDate, modificationDate)  
    VALUES (:comment, :creationDate, :modificationDate)";

    $request = $db->prepare($query);
    $request -> bindParam("comment", $comment, PDO::PARAM_STR);
    $request -> bindParam("creationDate", $date, PDO::PARAM_STR);
    $request -> bindParam("modificationDate", $date, PDO::PARAM_STR);
    $result = $request->execute();
    
    return connectDB()->lastInsertId();
}


function addMedia($mediaType, $mediaName, $mediaPath, $date, $idPost){
    $db = connectDB();
    $query = "INSERT INTO media (mediaType, mediaName, creationDate, modificationDate, mediaPath, idPost) 
    VALUES (:mediaType, :mediaName, :creationDate, :modificationDate,:mediaPath, :idPost)";
    
    $request = $db->prepare($query);
    $request -> bindParam("mediaType", $mediaType, PDO::PARAM_STR);
    $request -> bindParam("mediaName", $mediaName, PDO::PARAM_STR);
    $request -> bindParam("creationDate", $date, PDO::PARAM_STR);
    $request -> bindParam("modificationDate", $date, PDO::PARAM_STR);
    $request -> bindParam("mediaPath", $mediaPath, PDO::PARAM_STR);
    $request -> bindParam("idPost", $idPost, PDO::PARAM_STR);
    $result = $request->execute();
    return $result;

}
// Read
function getPosts(){
    $db = connectDB();
    $query = "SELECT * FROM posts
    ORDER BY creationDate DESC";
    $request = $db->prepare($query);
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

function getMedias($idPost){
    $db = connectDB();
    $query = "SELECT * FROM medias WHERE idPost=:idPost";
    $request = $db->prepare($query);
    $request -> bindParam("idPost", $idPost, PDO::PARAM_INT);
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}


// Delete
function deletePost($idPost){
    $db = connectDB();
    $query = "DELETE FROM medias WHERE idPOST=:idPost";

    $request = $db->prepare($query);
    $request -> bindParam("idPost", $idPost, PDO::PARAM_INT);
    $result = $request->execute();
}

function deleteMedias($idPost){
    $db = connectDB();
    $query = "DELETE FROM medias WHERE idPost=:idPost";
    $request = $db->prepare($query);
    $request -> bindParam("idPost", $idPost, PDO::PARAM_INT);
    $result = $request->execute();
    return $result;
}


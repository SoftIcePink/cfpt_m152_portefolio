<?php

//  Projet      :   Portefolio - M152
//  Author      :   SoftIcePink
//  Git         :   https://github.com/SoftIcePink/cfpt_m152_portefolio
//  File        :   index.php
//  Description :   This file is used as the router for this app.
//  Last update :   19.02.2019

$action = filter_input(INPUT_GET, "action", FILTER_SANITIZE_URL);
if (empty($action)) {
    $action = 'index';
}


try {
    switch ($action) {
        case 'index' :
            require_once 'controllers/posts.php';
            break;

        case 'addpost':
            require_once 'controllers/addpost.php';
        break;

        case '':
            require_once 'controllers/index.php';
            break;

        default:
            require_once 'views/404.php';
        break;
    }
} catch (Exception $e) {
    require_once 'views/500.php';

}


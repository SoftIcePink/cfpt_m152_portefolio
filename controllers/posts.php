<?php

require_once "models/posts.php";

$posts = getAllPosts();

include "./views/index.php";
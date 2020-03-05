<?php

require_once "models/posts.php";

$posts = getPosts();

include "./views/index.php";
<?php
if (is_file("posts.txt")) {False;} else {
    fopen("posts.txt", "w");
}

$posts = file_get_contents("posts.txt");
include_once("home.html");
echo $posts
?>
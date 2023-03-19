<?php
include_once "./User.php";
include_once "./Post.php";

$user = new User;
echo $user->all();

$post = new Post;
echo $post->all();
?>
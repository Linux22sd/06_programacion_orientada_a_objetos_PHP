<?php
include "./03_User.php";
include "./03_Admin.php";

$user = new User;
$user->type = new Admin;

echo $user->type->greet();
?>
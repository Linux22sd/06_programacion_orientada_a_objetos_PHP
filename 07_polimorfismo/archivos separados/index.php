<?php
include_once "./Gest.php";
include_once "./User.php";
include_once "./Admin.php";

$guest = new Guest;
echo $guest->login();

$user = new User('Luis');
echo $user->login();

$admin = new Admin('Alejandro');
echo $admin->login();

?>
<?php
include_once "./Search.php";

class Post implements Search{
    public function all(){
       return "Obteniendo posts <br>"; 
    }
}
?>
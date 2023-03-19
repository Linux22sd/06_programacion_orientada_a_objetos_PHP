<?php
include_once "./Search.php";

class User implements Search{
    public function all(){
        return "Obteniendo usuarios<br>";
    }
}
?>
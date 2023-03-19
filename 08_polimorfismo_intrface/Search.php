<?php
//-------------------------------------------------------------------------------------------
interface Search{
    public function all();
}
//-------------------------------------------------------------------------------------------
class User implements Search{
    public function all(){
        return "Obteniendo usuarios<br>";
    }
}
//-------------------------------------------------------------------------------------------

class Post implements Search{
    public function all(){
       return "Obteniendo posts <br>"; 
    }
}
//-------------------------------------------------------------------------------------------
$user = new User;
echo $user->all();

$post = new Post;
echo $post->all();
?>
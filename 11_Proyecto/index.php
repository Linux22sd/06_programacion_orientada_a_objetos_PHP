<?php

include "./vendor/autoload.php";
use App\Post;
use App\Comment;

$post = new Post();
$comment = new Comment();

$post->addComment($comment);

if($post->countComments() == 1){
    echo "Existe un comentario<br>";
}
else{
    echo "No hay comentarios<br>";
}

try{
    if((bool)get_class($post->getComments()[0]) == true){
        echo "El comentario es una instancia de la clase Comment<br>";
    }
}
catch(error){
    echo "Error en comentario no es una instancia de la clase Comment<br>";
}

?>
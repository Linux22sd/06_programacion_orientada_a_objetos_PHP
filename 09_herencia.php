<?php
//-------Herencia----------
//-----------------------------------------------------------------------------------------------
class User{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
    // Si se quiere eviar que se herede el metodo getName solo agregamos
    // la palabra final al principio del metodo de esta manera no podra ser heredada
    // lo mismo si queremos que esta clase no sea heredada solo se coloca una sola vez 
    // la palabra final antes de la palabra class.
    //
    // final public function getName(){
    //     return $this->name;
    // }
    public function getName(){
        return $this->name;
    }
}
//-----------------------------------------------------------------------------------------------
class Admin extends User{
    // Si existe la misma funcion en la clase hija eso es polimorfismo 
    // como se vio en clases pasadas.
    //
    // Si se elimina esta funcion en la clase Admin se imprimira ( Luis )
    // Si se deja esta funcion se imprimira ( Mi nombre es Alejandro )
    
    public function getName(){
        return "Mi nombre es Alejandro";
    }
}
//-----------------------------------------------------------------------------------------------
$admin = new Admin("Luis");
echo $admin->getName();

?>



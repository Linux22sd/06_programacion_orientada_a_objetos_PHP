<?php

interface Person{
    public function getName();
}

class Admin implements Person{

    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}
$admin = new Admin('Luis');
echo $admin->getName();

/**
 * Programacion orientada a objetos es la tecnica
 * php es el lenguaje de programacion donde implementamos la tecnica
 * 
 * podemos resumir los diferentes conceptos de la siguiente manera
 * 
 * Herencia
 * Abstraccion
 * Polimorfismo
 * Modularidad
 * Encapsulamiento
 * 
 */
?>
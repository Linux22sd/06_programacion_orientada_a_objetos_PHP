<?php
/**
 * Si se usa include si hay un erreo dara un error simple sin detener el programa;
 * Si se usa require si hay un error dara un error fatal y detendra el programa;
 * Usando include_once Si se llama varias veces solo lo cargara una vez y no dara error;
 * Lo mismo usando require_once;
 */

require "greet.php";

echo greet("luis", 'Hola como estas');
?>

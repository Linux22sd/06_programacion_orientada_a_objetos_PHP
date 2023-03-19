<?php
//-------------------------------------------------------------------------------------------------------------------
abstract class Base{
    protected $name;

    private function getClassName(){
        return get_called_class();
    }
    public function login(){
        return "Mi nombre es: {$this->name} desde la clase {$this->getClassName()}<br>";
    }
}
//-------------------------------------------------------------------------------------------------------------------
class Admin extends Base{
    public function __construct($name){
        $this->name = $name;
    }
}
//-------------------------------------------------------------------------------------------------------------------
class User extends Base{
    public function __construct($name){
        $this->name = $name;
    }
}
//-------------------------------------------------------------------------------------------------------------------
class Guest extends Base{
    
        public $name = 'Invitado';
}
//-------------------------------------------------------------------------------------------------------------------
$guest = new Guest;
echo $guest->login();

$user = new User('Luis');
echo $user->login();

$admin = new Admin('Alejandro');
echo $admin->login();
?>
<?php

use persona as GlobalPersona;

class persona{// con el comando class se crea una clase

    public $nombre;
    private $edad;
    public $domicilio;

    function __construct($nombre,$edad,$domicilio)
    {
        $this->nombre;
        $this->edad;
        $this->domicilio;
    }

    public function imprnombre(){
        echo "<br>MI NOMBRE ES ".$this->nombre;
    }
    public function imprEdad(){
        echo "<br>MI EDAD ES ".$this->edad;
    }
    public function imprDomicilio(){
        echo "<br>Mi dommicilio es ".$this->domicilio;
    }
    public function imprTodo(){
        echo "Mi nombre es ".$this->nombre." tengo ".$this->edad." años, vivo en ".$this->domicilio;
    }
    

}

class trabajador extends persona{
    public $puesto;
    public function presentarse(){
        echo "Hola soy ".$this->nombre." y soy ".$this->puesto;
    }

}
$objpersona=new persona("Omar",45,"Necochea");

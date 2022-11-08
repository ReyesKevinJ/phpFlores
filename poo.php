<?php
//La programacion orientada a objeto es un modelo de paradigma de programacion que permite desarrollar aplicaciones complejas manteniendo un codigo mas claro y manejable que paradigmas anteriores.
//En este tipo  de programacion se organiza el codigo en unidades denominadas CLASES, de las cuales se crean OBJETOS.

use trabajador as GlobalTrabajador;

class persona1{// con el comando class se crea una clase

    public $nombre;//es un  atributo o propiedad.
    private $edad;// atributo privado, no se puede imprimir fuera de la clase.

    public function asignarNombre($nuevoNombre){//es un metodo, parecido a un funcion.

        $this->nombre=$nuevoNombre;

    }
    public function imprnombre(){
        echo "<br>MI NOMBRE ES ".$this->nombre;
    }
    public function asignaredad($nuevaEdad){
        $this->edad=$nuevaEdad;
    }
    public function imprEdad(){
        echo "<br>MI EDAD ES ".$this->edad;
    }
    

}

class trabajador1 extends persona1{//creo una clase hija de la madre con el comando "extends". En poo es llama HERENCIA
    public $puesto;
    public function presentarse(){
        echo "Hola soy ".$this->nombre." y soy ".$this->puesto;
    }

}

$objtrabajador= new trabajador1();
$objtrabajador->asignarNombre("Pedro");
$objtrabajador->puesto="Admin";
$objtrabajador->presentarse();
// $objtrabajador->imprnombre();
// $objpersona= new persona();//Con el comando new creo un objetp de la clase persona, crear un objeto en la variable se lla "INSTANCIAR". 

// $objpersona->asignarNombre("Omar");//llamo al metodo de la clases, y asigno un parametro.

// // echo $objpersona->nombre;//imprimo en pantlla el resultdo.
// $objpersona2=new persona();
// // $objpersona2->asignarNombre("BEATRIZ");
// // $objpersona2->imprnombre();

// $objpersona2->asignaredad(30);
// $objpersona2->imprEdad();

?>
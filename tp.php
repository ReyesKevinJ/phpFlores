<?php 
class Vehiculo{
    private $color;
    private $peso;
    function __construct($color,$peso){
        $this->color=$color;
        $this->peso=$peso;
    }
    public function circula(){
        echo "estoy circulando en un vehiculo de color ".$this->color;
    }
    public function añadir_persona($peso_persona){
        $this->peso+=$peso_persona;
        echo "nuevo peso ".$this->peso;
    }
}
class Dos_ruedas extends Vehiculo{
    private $cilindrada;
    private $litros;
    function __construct($color, $peso, $litros, $cil)
    {
        $this->color=$color;
        $this->peso=$peso;
        $this->litros=$litros;
        $this->cilindrada=$cil;
    }

    public function poner_gasolina($litros){
        $this->litros+=$litros;
        echo "cargo ".$litros." litros, el tanque tiene ".$this->litros;
    }
}
class Cuatro_ruedas extends Vehiculo{
    private $numero_puertas;
    function __construct($color,$peso,$num)
    {
        $this->color=$color;
        $this->peso=$peso;
        $this->numero_puertas=$num;
    }
    public function repintar($new_color){
        $this->color=$new_color;
        echo "ahora el vehiculo es color ". $this->color;
    }
}
class Coche extends Cuatro_ruedas{
    private $numero_cadenas;
    function __construct($color,$peso,$num,$num2)
    {
        $this->color=$color;
        $this->peso=$peso;
        $this->numero_puertas=$num;
        $this->numero_cadenas=$num2;
    }
    public function añadir_cadenas($num){
        $this->numero_cadenas+=$num;
        echo "numero de cadenas ". $this->numero_cadenas;
    }
    public function quitar_cadenas($num){
        $this->numero_cadenas-=$num;
        echo "numero de cadenas ". $this->numero_cadenas;
    }
}
class Camion extends Cuatro_ruedas{
    private $longitud;
    function __construct($color,$peso,$num,$long)
    {
        $this->color=$color;
        $this->peso=$peso;
        $this->numero_puertas=$num;
        $this->longitud=$long;
    }
    public function añadir_remolque($long){
        $this->longitud+=$long;
        echo "El camion junto con el remolque mide ". $this-> longitud;
    }
}

$obj=new Cuatro_ruedas("verde",100,4);
$obj->repintar("azul");

?>
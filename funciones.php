<?php
// Una funcion es un bloque de codigo que realiza alguna operaacion independientemente al resto del programa

// un funcion tiene 3 componentes:

//1Los parametros, que son los valores que recibe la funcion como entrada. 
//2El codigo de la funcion, que soun las operaciones que realiza la funcion. 
//3El resultado (o valor de retorno) que es el valor final que entrega la funcion.

//Tenemos 2 clases de funciones:
    // Las que crea el usuario.
    //Las propis-nombres  del lenguaje.
function mostrar_nombre ($nombre="",$apellido=""){

    echo "Soy ".$nombre." ".$apellido."<br>";
}
//mostrar_nombre("Kevin","Reyes");
function firma(){
    echo "Mateo sos re gil<br>Pato jugate la coca";
}
//firma();
function preparar_cafe($tipo="CAPUCHINO"){
    echo "hacer una taza de $tipo.<br>";
}
//preparar_cafe("cafe negro");
function suma($n1,$n2){
    $resultado=$n1+$n2;
    return $resultado;
}
// echo "La suma es= ".suma(2,3);
function promedio($n1="",$n2="",$n3=""){
    $suma=$n1+$n2+$n3;
    $resultado=$suma/3;
    return $resultado;
}
function divisa($pesos){
    $dolar_oficial=$pesos*136.06;
    $dolar_blue=$pesos*289;
    echo "Dolar Blue: ".$dolar_blue."<br>Dolar Oficial: ".$dolar_oficial;
}
?>
<?php

$a=10; //Variable global

function mensaje(){
echo "<br>";
echo "Hola Mundo";
}

mensaje(); //Mandamos a llamar a la funcion


function variables(){
global $a;
$b=15; //variable local ya que no se declaro fuera
echo "prueba de la impresion de variables dentro <br>";
echo "la variable a es $a <br>";
echo "la variable b es $b <br> <br>";
}

variables(); 
echo "Prueba de la impresión de variables externas <br>";
echo "la variable a es $a <br>";
echo "la variable b es $b <br>";

?>
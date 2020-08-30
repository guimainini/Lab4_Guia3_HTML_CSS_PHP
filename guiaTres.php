<?php

echo "Ejercicio 1<br><br>";

$myNumber = 123;
$numberString = "123";

echo "a) ";
$total = $myNumber + $numberString;

echo "El total es : $total<br>";

echo "b)";
$total = $numberString + $myNumber;
echo "El total a la inversa es : $total<br>";

echo "c)";
$total = $myNumber.$numberString;
echo "El total es : $total";
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
echo "<br><br><br>";
echo "Ejercicio 2<br><br>";
echo "a)<br>";
if(1 == "1"){
    echo "It´s right"; 
}
echo "<br>b)<br>";
if(1 === "1"){
    echo "It´s right"; 
}
echo "<br>c)<br>";
if(!null){
    echo "It´s right"; 
}
echo "<br>d)<br>";
if(!false ){
    echo "It´s right"; 
}
echo "<br>e)<br>";
if(""){
    echo "It´s right"; 
}
echo "<br>f)<br>";
if(" "){
    echo "It´s right"; 
}
echo "<br>g)<br>";
if("tested"){
    echo "It´s right"; 
}
echo "<br>h)<br>";
if(1-1){
    echo "It´s right"; 
}

////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
echo "<br><br><br>";
echo "Ejercicio 3<br><br>";
echo "<br>";


/* $primerNumero = 4;
$segundoNumero = 5; */

function multiplicar($primerNumero,$segundoNumero){
    return $total = $primerNumero * $segundoNumero;
}

echo "El resultado de la multiplicacion es : ".multiplicar(4, 5)."<br>";

function dividir($primerNumero,$segundoNumero){
    if($segundoNumero == 0){
        echo "No se puede dividir por 0<br>";
    }else{
        return $total = $primerNumero / $segundoNumero;
    }
}
echo "El resultado de la divicion es : ".dividir(7,3)."<br>";
echo "El resultado de la divicion es : ".dividir(0,3)."<br>";
echo "El resultado de la divicion es : ".dividir(3,0)."<br>";

////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
echo "<br><br><br>";
echo "Ejercicio 4<br><br>";
echo "<br>";

$arreglin = [1=>"first value","1"=>"second value",1.2=>"tirth value",true=>"fourth value",1+0.2=>"fifth value",false !== null => "sixth value"];

var_dump($arreglin);


$arreglin = 1;

echo $arreglin;

////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
echo "<br><br><br>";
echo "Ejercicio 5<br><br>";
echo "<br>";
echo "<br>";

<<<<<<< HEAD
=======
$people = [ 
    ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
    ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
    ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
    ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
    ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
    ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
    ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
];


foreach($people as $gentuza) {
    echo "Nombre -> ".$gentuza['name'].", Genero -> ".$gentuza['sex'].", Edad -> ".$gentuza['age']." <br>";
}

/* a.	Imprima por pantalla el total de mayores de edad.
b.	De mujeres menores de edad. 
c.	Cree una web que muestre una tabla con esos datos. 
d.	Redúzcalo hasta obtener un arreglo de edades únicamente.
 */
$contadorEdad = 0;
$contadorMujeresMenores = 0;

$arregloEdades = array();

foreach($people as $gentuza){
    if($gentuza['age'] >= 18){
        $contadorEdad++;
    }
    if($gentuza['age'] <= 18 && $gentuza['sex'] == 'f'){
        $contadorMujeresMenores++;
    }

    array_push($arregloEdades,$gentuza['age']); //mete dentro de un arreglo lo que yo quiera
} 

echo "<br>La cantidad de mayores de edad son : $contadorEdad";
echo "<br>La cantidad de Mujeres Menores es : $contadorMujeresMenores"; 
>>>>>>> guille

echo var_dump($arregloEdades);





////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
echo "<br><br><br>";
echo "Ejercicio 6<br><br>";
echo "<br>";
echo "<br>";

$diaDeLaSemana = date('D');

echo $diaDeLaSemana."<br>";

if ( $diaDeLaSemana == 'Mon' ) {
    echo 'Lunes';
} else if ( $diaDeLaSemana == 'Tue' ) {
    echo 'Martes';
} else if ( $diaDeLaSemana == 'Wed' ) {
    echo 'Miércoles';
} else if ( $diaDeLaSemana == 'Thu' ) {
    echo 'Jueves';
} else if ( $diaDeLaSemana == 'Fri' ) {
    echo 'Viernes';
} else if ( $diaDeLaSemana == 'Sat' ) {
    echo 'Buen fin de semana, es Sábado';
} else if ( $diaDeLaSemana == 'Sun' ){ 
    echo 'Buen fin de semana, es Domingo'; 
} else {
    echo "Esta mal introducido";
}

$diaDeLaSemana = date('l');
echo "<br>".$diaDeLaSemana."<br>";

////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
echo "<br><br><br>";
echo "Ejercicio 7<br><br>";
echo "<br>";
echo "<br>";

$total_sale = 150;
$type_sale = "mascotas";

if($total_sale <= 200){
    if($type_sale == "mascotas"){
        echo "No se puede realizar el envio";
    }else if($type_sale == "ropa"){
        echo "Los gastos de envio son 80 pesos";
    }
}else if(200 < $total_sale && $total_sale <= 600){
    echo "Los gastos de envio son 80 pesos";
}else if($total_sale > 600){
    echo "Los gastos de envio son gratis<br>";
}    
if($total_sale >= 2000){
    echo "Descuento especial: CODEDES33";
}

////////////////////////////////////////////////////////
///////////////////////////////////////////////////////
echo "<br><br><br>";
echo "Ejercicio 8<br><br>";
echo "<br>";
echo "<br>";

$a = 3;
$b = 1;
$c = 420;
$d = 10;

if(($a >= $b) && ($a >= $c) && ($a >= $d)){
    echo "El mayor de los 4 es $a";
}else if(($b >= $a) && ($b >= $c) &&($b >= $d)){
    echo "El mayor de los 4 es $b";
}else if(($c >= $a) && ($c >= $b) && ($c >= $d)){
    echo "El mayor de los 4 es $c";
}else if(($d > $a) && ($d > $b) && ($d > $c)){
    echo "El mayor de los 4 es $d";
}

$arreglin = array($a,$b,$c,$d);

/* var_dump($arreglin); */

sort($arreglin);

/* var_dump($arreglin); */

echo "El mayor de todos es : ".$arreglin[array_key_last ($arreglin)];


$arreglin = array($a,$b,$c,$d);
sort($arreglin);
echo "El mayor de todos es : ".$arreglin[array_key_last ($arreglin)];









?>
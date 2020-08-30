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
<<<<<<< HEAD

=======
>>>>>>> guille

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









?>
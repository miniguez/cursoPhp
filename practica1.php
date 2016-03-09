<?php 
//one line

/*
todo lo
que se escbiba
*/
print('Hello ');

echo "World \n";

$boolean = true;  // TRUE or True
$boolean = false; // FALSE or False

// Variables
$int1 = 12;
$int2 = -12;
$int3 =  012;//Octal
$int4 = 0x0F;//Hexadecimal
//$int5 = 0b111111111; //255 Php ~> 5.4

$float = 1.234;
$float = 1.2e3;//1200
$float = 7E-10;

unset($init1);

var_dump($float);
var_dump($int4);

$sum = 1 + 1; //suma
$res = 2 - 1.0; // resta
$mul = 4 * 3; //multiplicación
$div = 2 / 4 ; //división

var_dump($res);
var_dump($div);

$num = 0;
$num +=1 ; 
echo $num++;// 1 
echo ++$num;// 3 
$num -= 2;
$num /= $float;

//Strings
$num = 5;
$varString = '$num';
echo $varString;
$varString = "el valor de la variabel num  = $num \n";
echo $varString;
$otroString = " otra forma de incluir variables {$num}";
echo $otroString;
$otroString2 = " otra 2 forma de incluir variables $${num}";
echo $otroString2;

$stringMult = <<<'END'
Multi line
string
END;

echo $stringMult;
echo 'Este es un '.' String';
echo 'multimples', 'parametros', ' en echo';


//Constantes
define("FOO", "algo");
echo FOO;

echo "Este es el valor de la constante FOO =".FOO;

define("_FOO", 56);
































 









 






























<?php
//Algunas funciones de strings

//explode
$str = "Hola mundo, ya no esta nevando";
var_dump($str);
print_r(explode(" ", $str));

//money_format
echo "$".money_format("%i", 1000.9)." \n";

//str_replace
$vocales = array("a","e","i","o","u");
$soloConsonantes = str_replace($vocales, "", "Hola mundo");
echo $soloConsonantes." \n";


$frase="You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy = array("pizaa", "beer", "ice cream");

$nuevaFrase = str_replace($healthy, $yummy, $frase);

echo $nuevaFrase." \n";

//Hash crypt
$password = "admin123";
$hash = crypt($password,"$2a$07$usesomesillystringforsalt$");
echo $password." = ".$hash;
echo " \n";

//md5

$str = 'apple';
if (md5($str) == '1f3870be274f6c49b3e31a0c6728957f') {
  echo "bien encriptado"."\n";
}

//trim

$str = "  Prueba de string con espacios      ";
echo trim($str);
echo " \n";

$str = "Hello World";
$trimmed = trim($str, "HdWr");
echo $trimmed;
echo " \n";

//substr

echo substr("abcdef", 1); //bcdef
echo "\n";
echo substr("abcdef", 1, 3); //bcd
echo "\n";
echo substr("abcdef", 0, 4); // abcd
echo "\n";
echo substr("abcdef", 0, 8); // abcdef
echo "\n";
echo substr("abcdef", -1, 1); // f
echo "\n";


$x =  0;
$y = $x;
$z = &$x;
var_dump($y);
var_dump($z);
$x = 10;
var_dump($z);

// Arreglos
$associativo = array('Uno'=>1, 'Dos'=>2, 'Tres'=>3);
// php ~> 5.4
//$associativo = ['Uno'=>1]

echo $associativo['Dos'];
echo "\n";
$associativo['Cuatro']= 4;
echo $associativo['Cuatro'];
echo "\n";

$array = array('Uno','Dos','Tres');
echo $array[2];
echo "\n";
$array[3]='Cuatro';
echo $array[3];
echo "\n";

array_push($array, 'Cinco');
var_dump($array);

//Logica
$a = 0;
$b = '0';
$c = '1';
$d = '1';

assert($a == $b);
//assert($a === $b); //esto es false
assert($c != $a);//true
assert($c <> $a);//true
assert($a < $c);//true
assert($c > $b);//true
assert($a <= $b);//true
assert($c >= $d);//true

assert($c === $d);
assert($a !== $d);
//assert(1 === '1'); //false
assert(1 !== '1');

$x = 0.1;
$y = 0.2;
$z = 0.3;

assert(0.3 == $z);

$entero = 1;
echo $entero + $entero ; //2
echo "\n";
$cadena = '1';
echo $cadena + $cadena;//2
echo "\n";
echo $cadena . $cadena;//11
echo "\n";
$cadena = 'one';
echo $cadena + $cadena;//0
echo "\n";
$cadena = '5one';
echo $cadena + $cadena;//10
echo "\n";

$boolean = (boolean) 1; //true
$zero = 0;
$boolean = (boolean) $zero; //false
assert(1 == true);
assert($zero == false);
assert('b' == true);
assert(null == false);

// Estructuras de control
if (true) {
  echo "primer if evalua verdadero";
  echo "\n";
}
if (false)
  echo "primer if evalua falso";
elseif (true) {
  echo "elseif evaluo verdadero";
  echo "\n";
}
else {
  echo "evaluo falso";
  echo "\n";
}

echo (false) ? 'evalua falso' : "evalua verdadero";
echo "\n";

//php ~> 5.3
$x = false;
echo $x ?: 'el valor es falso';
echo "\n";


$x = 0;
if ($x === '0') {
  echo "x es igual a cero string";
} elseif ($x === '1') {
  echo "x es igual a uno";
} else {
  echo "x es igual a cero";
}
echo "\n";

switch ($x) {
  case '0':
    echo "x es igual a cero";
    echo "\n";
    break;
  case '1':
    echo "x es igual a uno";
    echo "\n";
    break;
  default:
    echo "no es cero ni uno";
    echo "\n";
    break;
}
echo "\n";
$i = 0;
while ($i < 5) {
    echo $i++;
}
echo "\n";

$i = 0;
do {
  echo $i++;
} while ($i < 5);
echo "\n";

for ($x = 0; $x < 10; $x++) {
  echo $x;
}
echo "\n";

$wheels = array('bicy'=>2, 'car'=> 4);
foreach ($wheels as $key => $value) {
  echo $key." | ".$value." | ";
}
echo "\n";

foreach ($wheels as $value) {
  echo " | ". $value;
}
echo "\n";

$i = 0;
while ($i < 5) {
  if ($i === 3) {
    break;
  }
  echo $i++;
}// 012
echo "\n";

$i = 0;
while ($i < 5) {
  if ($i === 3) {
    $i++;
    continue;
  }
  echo $i++;
}
echo "\n";

//funciones
function my_function() {
  return 'mensaje';
}
echo my_function(); // mensaje
echo "\n";

function add($x, $y =1) {
  $result = $x + $y;
  return $result;
}

echo add(4);//5
echo "\n";
echo add(4, 2);//6
echo "\n";
//Funcion lambda
$inc = function($x) {
  return $x +1;
};
echo $inc(7);
echo "\n";

function foo ($x, $y, $z) {
  echo "$x - $y - $z";
}

function bar ($x, $y) {
  return function ($z) use ($x, $y) {
    foo($x, $y, $z);
  };
}

$bar = bar('A', 'B');
$bar('C');
echo "\n";

$nombre_de_funcion = 'add';
echo $nombre_de_funcion(1,2);
echo "\n";

function parametros() {
  $numParametros = func_num_args();
  if ($numParametros > 0) {
    echo func_get_arg(0);
  }
  $param = func_get_args();
  foreach ($param as $key => $value) {
      echo $key.' -- '.$value.' | ';
  }
}
echo parametros('Hello', 'World');
echo "\n";

function mul($x, $y) {
  return $x * $y;
}
echo mul(5,3);
///TDD
assert(res(5,4)== 1);
function res($x,$y) {
  return $x-$y;
}
echo "\n";
//preg_match
$string = "START to program";
preg_match("/START(.*)/", $string, $result);
var_dump($result);
echo "\n";
preg_match("/(\d{4})-(\d{2})-(\d{2})/","2016-03-14",$result);
var_dump($result);
echo "\n";
$string = "name is Doe, Jhon, David";
preg_match("/name is ((\w+), (\w+), (\w+))/", $string, $result);
var_dump($result);
echo $result[2]." ".$result[3]." ".$result[4];
echo "\n";

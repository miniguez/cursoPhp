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



















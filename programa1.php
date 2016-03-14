<?php
/*
Ciclo 1 a 100, cada vez que el iterador sea divisible
etre 3 entonces imprimir Fizz, cuando divisible entre 5
imprimir Buzz, cuando sea divisible entre 3 y 5 imprimir
FizzBuzz

9 % 3 == 0
*/
for($i=1; $i <=100; $i++){
    if ($i%3==0 && $i%5==0) {
      echo "$i FizzBuzz \n";
    }
    elseif ($i % 3 == 0) {
      echo "$i Fizz \n";
    }
    elseif ($i % 5 == 0) {
      echo "$i Buzz \n";
    }
    else {
      echo $i;
    }
}

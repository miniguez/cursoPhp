<?php
   $str = 'Esta es la cadena a encriptar';
   echo base64_encode($str);
   $ecnriptada = base64_encode($str);
   echo "\n";
   echo base64_decode($ecnriptada);
   echo "\n";

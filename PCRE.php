<?php

$text='hola mundo en 123';
$regex='/hola/';

echo preg_match($regex,$text);

echo '<br> <br>';
$text='hola mundo en 123';
$regex='/hoola/';

echo preg_match($regex,$text);


echo '<br> <br>';
$text='hcla mundo en 123';
$regex='/h[a-f]la/i';

echo preg_match($regex,$text);

echo '<br> <br>';
$text='h4la mundo en 123';
$regex='/h[0-5]la/i';//puede aver un numero del rango 0-5

echo preg_match($regex,$text);
echo '<br> <br>';
$text='h4la mundo en Gurte';
$regex='/Gu(a|e)te/i'; //Solo puede ser una de las dos letras en la posicion actual

echo preg_match($regex,$text);


echo '<br> <br>';
$text='Los numeros son 1 4 5 6';
$regex='/[0-9]/'; //Solo puede ser una de las dos letras en la posicion actual

echo preg_match_all($regex,$text,$matches);
echo '<br>';
print_r($matches);
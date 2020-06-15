<?php

/// Metodos de impresion
echo 'Hola ', 'HOLA ',2324;
echo '<br>';
print 'HOla Mundo'; 
echo '<br>';

// Tipos de strgin

$animal= "Panda";

echo "Hola $animal ";
echo '<br>';
echo " \"Hola $animal\" ";

echo '<br>';
echo 'Hola $animal';

echo '<br>';
echo <<<FRASE

Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit provident ratione molestiae eius sit quidem laborum ab enim vero temporibus, soluta officia? Tenetur eligendi obcaecati odio nostrum debitis? Ex, delectus!

FRASE;

/// Conversiones y tiopos de variales
echo '<br>';
$var="Gato";
$var1=123;
echo gettype($var);
echo '<br>';
echo gettype($var1);
echo '<br>';

$price=2029.50;
$age=12;
$name='Ozzy';
$isDog=true;

echo '<br>';
echo gettype($price);
echo '<br>';
echo gettype($age);
echo '<br>';
echo gettype($name);
echo '<br>';
echo gettype($isDog);
echo '<br>';

echo '<br>';
echo var_dump($price);
echo '<br>';
echo var_dump($age);
echo '<br>';
echo var_dump($name);
echo '<br>';
echo var_dump($isDog);


//Concatenacio

echo '<br>';
$word1='Codigo';
$word2=' Facilito';

echo 'Bienvenidos a '.$word1.$word2;

//Buscar y extraer:
echo '<br>';
echo substr('Marines Méndez',8);

echo '<br>';
$text='Bienvenidos al curso de programacion php';
$b='curso';

echo strpos($text,$b);





?>
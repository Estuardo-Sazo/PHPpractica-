<?php

$search=' ';
$renplace=':';
$text='91 75 1A EC 9A C7';

echo str_replace($search,$renplace,$text);

echo '<br>';
$search='9';
$renplace='*';
$text='91 75 1A EC 9A C7';

echo str_replace($search,$renplace,$text);

echo '<br>';
echo '<br>';

$arg1=1994;
$arg2='PHP';

$text='En %d fue creado %s';
echo sprintf($text,$arg1,$arg2);
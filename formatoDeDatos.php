<?php

//alterar 

$text = "<h1>PHP es UN LENGUAJE </h1>";
//echo strtolower($text);
//echo strtoupper($text);
//echo lcfirst($text);
//echo ucfirst($text);

// Reemplazar

$slug = str_replace(' ', '-', $text);
//echo strtolower($slug);

//Modificacion 
$code =39;
//echo str_pad($code,8 ,'#' ,STR_PAD_BOTH);
//echo $text;
//echo strip_tags($text);// quita las etiquetas o cualquier codigo en general

#ELEMENTOS MONOBYTES Y MULTIBYTES.
$text_uno = "PHP es UN LENGUAJE, año 2020, programación";
$text_dos = "PHP es UN LENGUAJE, año 2020, programación";
echo strtoupper($text_uno);//monobye
echo "<br>";
//Al colocar mb_nombrefuncion con esto formateamos correctamente.
echo mb_strtoupper($text_dos);//multibytefs

?>
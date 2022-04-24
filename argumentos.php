<?php
//valores
function greed($name){
 return "hola, $name";
}

echo greed('Joan');

/** 
* Referencias: Al agregar un & antes de la variable,
* lo que hacemos es pasarla "por referencia", pasando
* un apuntador a la variable, lo que ocasiona que cuando
* modificamos la variable dentro de la función, externamente
* también es afectada
*/

$course = 'PHP';
function path(&$course)
{
   $course = 'Laravel<br>';
   echo $course;
}

path($course);
echo $course; // Laravel

// Predeterminado, valor por defecto

function greet($name = 'Joan')
{
    return "Hola, $name <br>";
}

echo greet();//Hola Joan
echo greet('Abel');//Hola Abel
?> 
<?php

echo "<h1>Funciones PHP para arrays</h1>";
echo "---------------";

$courses = ['php', 'javascript', 'laravel'];
$course = [
	10 => 'php', 
	100 => 'javascript', 
	1000 => 'laravel'
];
//ordenar 
sort($courses);
#Ordenar de forma Recursiva
//rsort($courses);


#Ordenar por Key
ksort($course);
//krsort($course); //Ordenar de forma Recursiva

echo("<pre>");
var_dump($courses);
echo "<br>";
var_dump($course);

echo "<br>";
#array_slide array rebanada
//en este caso eliminamos el Key 1
array_slice($courses, 1);
var_dump(array_slice($course, 1));
//Resultado
/*
array(2) {
	[0]=>
	string(10) "javascript"
	[1]=>
	string(7) "laravel"
  }
*/

echo "<br>";
#array_chunk array pedazo
$courses_chunk = ['php', 'javascript', 'laravel'];
//en este caso crea un 2 arrays y uno de ellos contiene dos elementos de los 3 que cotiene el array principal
array_chunk($courses_chunk, 2);
var_dump(array_chunk($courses_chunk, 2));

echo "<br>";
#array_shift() 
$courses_shift = ['php', 'javascript', 'laravel'];
//Quita un elemento del principio del array
array_shift($courses_shift);
var_dump(array_shift($courses_shift));

echo "<br>";
#array_pop()
$courses_pop = ['php', 'javascript', 'laravel'];
//Extrae el último elemento del final del array
array_pop($courses_pop);
var_dump($courses_pop);

echo "<br>";
#array_unshift()
$courses_unshift = ['php', 'javascript', 'laravel'];
//Añadir al inicio de un array uno a más elementos
array_unshift($courses_unshift, 'laravel2', 'javascript2');
var_dump($courses_unshift);

echo "<br>";
#array_push()
$courses_push = ['php', 'javascript', 'laravel'];
//Inserta uno o más elementos al final de un array
array_push($courses_push, 'laravel1', 'javascript1');
var_dump($courses_push);

echo "<br>";
#array_flip()
$courses_flip = [
	'backend' => 'php', 
	'forntend' => 'javascript'
];
//Intercambia todas las claves de un array con sus valores asociados
$intercambio = array_flip($courses_flip);
var_dump($intercambio);
/**sort: Ordena un array.

rsort: Ordena un array en orden inverso.

ksort: Ordena un array por clave.

krsort: Ordena un array por clave en orden inverso.

array_slice: Extrae una parte de un array.

array_chunk: Divide un array en fragmentos.

array_shift: Quita un elemento del principio del array.

array_pop: Extrae el último elemento del final del array.

array_unshift: Añadir al inicio de un array uno a más elementos.

array_push: Inserta uno o más elementos al final de un array.

array_flip: Intercambia todas las claves de un array con sus valores asociados.
 */
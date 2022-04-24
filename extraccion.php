<?php

//$data = 'Estudio PHP';

//echo $data[0];

//$post = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus magnam ullam doloribus temporibus delectus officia, aperiam fugit odit laudantium, dolor iste, asperiores veniam! Expedita repellendus dolore voluptatum laboriosam impedit voluptas?";

//$extract = substr($post, 0, 20);

//echo "$extract ... [ver mas]";

/**  convertimos un string a un array 
$data ='javascript, php , laravel'; //campo tag

$tags = explode(', ',$data); //lo convertimos en un array
echo "<pre>";
var_dump($tags);
*/

// convertir un array a un string

//$courses =['javascript', 'php', 'laravel'];
//echo implode(', ', $courses);   

$course ="           Curso de PHP       ";

 $course = trim($course);

echo "<pre>";

echo "Quiero aprender $course y otro texto";



?>
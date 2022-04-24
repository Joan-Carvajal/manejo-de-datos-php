<?php

$courses = [
    'frontend'=> 'javascript',
    'framework'=> 'laravel',
    'backend' => 'php'
];

/* foreach ($courses as $key => $value) {
    echo "$key: $value <br>";
}
*/

function upper($course, $key){
    echo strtoupper($course). ": $key <br>";
}

array_walk($courses, 'upper');

/*	
	//Existe un Key
	array_key_exists('frontend', $courses);
	//Existe un valor
	in_array('javascript', $courses);
	//Muestra todos los Key
	array_keys($courses);
	//Muestra todos los valores
	array_values($courses);
*/
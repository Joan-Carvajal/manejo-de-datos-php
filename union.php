<?php

//union de Arrays con '+'
/*$frontend =['frontend'=>'javascript'];
$backend =['backend'=>'php', 
'framework'=>'laravel'];

echo "<pre>";
var_dump($frontend + $backend);
*/

// union de Arrays  con array_merge
/*$frontend =['javascript'];
$backend =['php', 'laravel'];

echo "<pre>";
var_dump(array_merge($frontend , $backend));
*/
/*
$frontend =['a'=>'javascript'];
$backend =['a'=>'php',
 'b'=>'laravel'];

echo "<pre>";
var_dump(array_merge_recursive($frontend , $backend));
*/
$course = ['javascript', 'php', 'laravel'];
$categories = ['front', 'back', 'framework'];

echo "<pre>";
var_dump(array_combine($categories, $course));

?>
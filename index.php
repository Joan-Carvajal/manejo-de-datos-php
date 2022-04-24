<?php
/*
echo 'Un texto de una linea 
  varias lineas 
  comilla simple \' backslash \\ continuar con mas texto 
  $variable <br>';

  $name ='Joan';

  echo "mi nombre es $name <br>";

  $courses =[
      'backend' => [
        'PHP',
        'Laravel'
      ]

      ];

      class User{
          public $name = 'joan';
      }
      $user = new User;
      
      echo "$user->name quiere aprender  {$courses['backend'][0]}"."<br>";
      */

      $teacher ='joan';
      $joan='Profesor de PHP';

      echo "$teacher es ${$teacher}". "<br>";

      function getTeacher(){
          return 'teacher';
      }

      $teacher= 'joan';

      echo "${getTeacher()} enseña PHP";
?>
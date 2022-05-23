<?php

/* Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
 */

$posts = [];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>

    <style>
       body{ background-color: #ede4f2;
             text-align: center;
            }
    </style>
</head>
<body>

<?php 

while (count($posts) < 3) {
   $day = rand(1, 31);
   $month = rand(1, 12);
   $year = rand(1990, 2022);

   $fullDate = $day . '-' . $month . '-' . $year;

   $posts[$fullDate] =
                     [
                        'title' => 'sport',
                        'author' => 'john case',
                        'content' => 'win the event'
                     ];
   
                  }

?>

 
    
</body>
</html>
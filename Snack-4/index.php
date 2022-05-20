<?php

/* Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 */

      //creo un array vuoto
      $array=[];

      //con un ciclo while riempio array finche non ha 15 numeri casuale
      while(count($array) < 15){

         //creo numero casuale da 0 a 100
         $randomNumber = rand(0,100);
         if(!in_array($randomNumber, $array)){

            //inserisco num casuale dentro array
            $array[] = $randomNumber; 

         }
      }
      var_dump($array)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>

 
    
</body>
</html>
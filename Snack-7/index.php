<?php

/* Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
 */

 $class = [
            [
               'name' => 'John',
               'lastname' => 'Foster',
               'marks' => [4,6,9,2],
            ],
            [
               'name' => 'Ted',
               'lastname' => 'Powel',
               'marks' => [7,5,9,4],
            ],
            [
               'name' => 'Jeff',
               'lastname' => 'Nelson',
               'marks' => [8,3,6,7],
            ],
         ];

//var_dump($class);
 //var_dump(array_sum($class[0]['marks']));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
    <style>

       body{ background-color: #ede4f2;
             text-align: center;
            }
       h1{color:#723096}

    </style>
</head>
<body>

<?php 

for ($i=0; $i < count($class); $i++){?>

    <h1><?php echo $class[$i]['name'] .' ' .$class[$i]['lastname'] .' - ' .$media = (array_sum($class[$i]['marks']) / count($class[$i]['marks'])) ?></h1>

    <h3><?php echo 'Average: ' .round($media, 1) ?></h3>

    <h3><?php echo 'Vote numbers: ' .count($class[$i]['marks']) ?></h3>
    

<?php }
?>

 
    
</body>
</html>
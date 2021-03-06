<?php 
/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$matchweek = [ // primo array che contiene le partite
               // secondo livello che contiene le squadre e punti
                [         
                "Host" => "Chicago",
                "pointHost" => 35,
                "guest" => "Denver",
                "pointGuest" => 86,
                ],
                [
                "Host" => "San Antonio",
                "pointHost" => 69,
                "guest" => "Dallas",
                "pointGuest" => 37,
                ],
                [
                "Host" => "Memphis",
                "pointHost" => 49,
                "guest" => "California",
                "pointGuest" => 53,
                ]
             ];

  var_dump($matchweek);

  /* Stampa fuori da HTML */
  for ($i = 0; $i < count($matchweek); $i++) {

    echo $matchweek[$i]['Host'] . ' - ' . $matchweek[$i]['guest'] . ' |  ' . $matchweek[$i]['pointHost'] . '-' . $matchweek[$i]['pointGuest'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

    <!-- Stampa dentro l'HTML -->
<?php for ($i = 0; $i < count($matchweek); $i++) { ?>
        <ul>
            <li><?php echo $matchweek[$i]['Host'] . ' - ' . $matchweek[$i]['guest'] . ' | ' . $matchweek[$i]['pointHost'] . '-' . $matchweek[$i]['pointGuest'];
                ?>
            </li>
        </ul>

    <?php
    }
?>


  
    
</body>
</html>
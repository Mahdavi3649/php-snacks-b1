<?php
/* Stampare a schermo, attraverso il foreach, tutti gli elementi passati in GET.
 */

 $elements = $_GET;
 var_dump($elements);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 12</title>
    
</head>
<body>

<?php 
foreach($elements as $key => $value) :?>
<li><?php echo $key ?> <?php echo $value ?></li>
<?php endforeach; ?>



 
    
</body>
</html>
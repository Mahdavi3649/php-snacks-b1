<?php
/* Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
 */

 $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas odio explicabo distinctio fuga molestiae, mollitia provident quo nihil tempora fugiat, minus aperiam omnis dicta alias. aliquam incidunt beatae ipsam enim illo, velit iusto cum in qui! Non expedita sapiente blanditiis tempora. rem impedit eos beatae fugiat nobis accusantium, animi soluta.";

 $textArray = explode('.', $text);
 //var_dump($textArray)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
   <h2>Articolo</h2>

   <?php foreach ($textArray as $value) { ?>

         <h5><?php echo $value; ?></h5>

   <?php } ?>

</body>
</html>
<?php

/* Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
 */

$data = [

   '10/01/2019' => [
                  [
                     'title' => 'Post 1',
                     'author' => 'Michele Papagni',
                     'text' => 'Testo post 1'
                  ],
                  [
                     'title' => 'Post 2',
                     'author' => 'Michele Papagni',
                     'text' => 'Testo post 2'
                  ],
        ],
   '10/02/2019' => [
                  [
                     'title' => 'Post 3',
                     'author' => 'Michele Papagni',
                     'text' => 'Testo post 3'
                  ]
         ],
   '15/05/2019' => [
                  [
                     'title' => 'Post 4',
                     'author' => 'Michele Papagni',
                     'text' => 'Testo post 4'
                  ],
                  [
                     'title' => 'Post 5',
                     'author' => 'Michele Papagni',
                     'text' => 'Testo post 5'
                  ],
                  [
                     'title' => 'Post 6',
                     'author' => 'Michele Papagni',
                     'text' => 'Testo post 6'
                  ]
         ],
];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Snack 3</title>
</head>
<body>

<div class="container">

<?php foreach ($data as $date => $posts) { ?>
         <h6> <?php echo $date; ?></h6>

      <div class="row row-col-2 g-3">

      <?php  foreach ($posts as $post) { ?>
         <div class="col">
            <div class="card">
               <img src='http://picsum.photos/500/200'>
            </div>
            <div class="card-body">
               <small>Author: <?php echo $post["author"]; ?></small>
               <h2><?php echo $post["title"]; ?></h2>
               <p><?php echo $post["text"]; ?></p>
            </div>
         </div>
         <?php } ?>

     </div>
<?php } ?>

</div>



 
    
</body>
</html>
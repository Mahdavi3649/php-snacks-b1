<?php
 
/*  Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
 */

$db = [
   'teachers' => [
       [
           'name' => 'Michele',
           'lastname' => 'Papagni'
       ],
       [
           'name' => 'Fabio',
           'lastname' => 'Forghieri'
       ]
   ],
   'pm' => [
       [
           'name' => 'Roberto',
           'lastname' => 'Marazzini'
       ],
       [
           'name' => 'Federico',
           'lastname' => 'Pellegrini'
       ]
   ]
];

//var_dump($db);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 6</title>
</head>
<body>

        <?php foreach ($db as $key => $data) { ?>
            
            <section style="background-color: <?php echo $key === 'teachers' ? 'gray' : 'green'; ?> ">
                <h2><?php echo $key; ?></h2>

                <ul>
                    <?php foreach($data as $user) { ?>
                        <li><?php echo $user['name']. " " .$user['lastname']; ?></li>
                    <?php } ?>
                </ul>

            </section>

        <?php } ?>

</body>
</html>
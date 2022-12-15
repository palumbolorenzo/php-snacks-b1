<?php
/* ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */
?>

<?php 
   $n_randoms = 15;
   $min = 1;
   $max = 100;
   $arr_randoms = [];
   while (count($arr_randoms) < $n_randoms) {
    $random = rand($min, $max);
    if (in_array($random, $arr_randoms)) {
        $arr_randoms[] = $random;
    }
   }
?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php 
        for ($i = 0; $i < $n_randoms; $i ++) {
            ?>
            <li><?= $arr_randoms[$i] ?></li><?php
        } ?>
	</ul> 

</body>
</html>
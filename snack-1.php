<?php 
/* ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$arrMatches = [
 [
    'home' => [
        'name' => 'NY Knicks';
        'points' => 84;
    ],
     'away' => [
        'name' => 'Boston Celtics';
        'points' => 88;
    ],
 ],
 [
     'home' => [
         'name' => 'GS Warriors';
         'points' => 79;
     ],
     'away' => [
         'name' => 'LA Lakers';
         'points' => 86;
     ],
 ],
 [
     'home' => [
         'name' => 'Miami Heat';
         'points' => 81;
     ],
     'away' => [
         'name' => 'Orlando Magic';
         'points' => 74;
     ],
 ],
 [
     'home' => [
         'name' => 'Brooklyn Nets';
         'points' => 84;
     ],
     'away' => [
         'name' => 'Toronto Raptors';
         'points' => 77;
     ]
 ]
];
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
    <h1>Matches</h1>

    <ul>
        <?php 
        $arr_matches_length = count($arrMatches);
        for ($i = 0; $i < count($arrMatches); $i++) {
            $match = $arrMatches[$i]; ?>
            <li><?= $match['home']['name'] ?> - <?= $match['away']['name'] ?> | <?= $match['home']['points'] ?> - <?= $match['away']['points'] ?></li><?php
        } ?>
    </ul>
</body>
</html>
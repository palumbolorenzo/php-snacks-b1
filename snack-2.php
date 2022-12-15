<?php
/* ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */
?>

<?php
   $name = isset($_GET['name']) ? $_GET['name'] : '';

   $mail = $_GET['mail'] ?? '';

   $_GET['age'] ?? '';
   $age = $_GET['age'];

   $pos_at = strpos($mail, '@');
   $pos_dot = strpos($mail, '.', $pos_at);

   if (strlen($name) > 3 && is_numeric($age) && $pos_at === false && $pos_dot === false){
    $message = 'Access completed';
   } else {
    $message = 'Access denied';
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
    <form action="" method="get">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value=<?= $name ?>>

        <label for="mail">Mail</label>
        <input type="text" name="mail" id="mail" value=<?= $mail ?>>

        <label for="age">Age</label>
        <input type="text" name="age" id="age" value=<?= $age ?>>

        <button>Controlla</button>
    </form>
    
    <h1><?= $message ?></h1>
</body>
</html>
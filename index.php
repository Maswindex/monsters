<?php

    include 'Classes/monster.php';
    include 'Classes/vampire.php';
    include 'Classes/basilisk.php';
    $monster1 = new Monster("Minotausssr");
    $monster2 = new Vampire("The other drACULA");
    $monster3 = new Basilisk();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    echo $monster1->getName().'<br>';
    echo $monster2->getName().'<br>';
    echo $monster3->getName().'<br>';
    echo $monster3->attack().'<br>';
    echo $monster2->attack().'<br>';
    echo $monster1->attack().'<br>';
    echo $monster3->parry().'<br>';
    echo $monster2->getVictims().'<br>';
?>
</body>
</html>
<?php 

// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà
// una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra
// ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano- Cantù | 55-60

$partite = [
    [
        'casa' => 'Basket Milano',
        'ospite' => 'Basket Roma',
        'punti_casa' => 45,
        'punti_ospite' => 21,
    ],
    [
        'casa' => 'Basket Perugia',
        'ospite' => 'Basket Napoli',
        'punti_casa' => 34,
        'punti_ospite' => 28,
    ],
    [
        'casa' => 'Basket Palermo',
        'ospite' => 'Basket Lazio',
        'punti_casa' => 50,
        'punti_ospite' => 55,
    ],
    [
        'casa' => 'Basket Genova',
        'ospite' => 'Basket Venezia',
        'punti_casa' => 40,
        'punti_ospite' => 23,
    ],
    [
        'casa' => 'Basket Trieste',
        'ospite' => 'Basket Catania',
        'punti_casa' => 44,
        'punti_ospite' => 29,
    ],
    [
        'casa' => 'Basket Messina',
        'ospite' => 'Basket Torino',
        'punti_casa' => 55,
        'punti_ospite' => 58,
    ],
]; 

    $max = sizeof($partite);

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
    
<h1>Elenco partite</h1>
    <br>
    <ul>
        <?php 
            for( $i=0 ; $i<$max ; $i++){
        ?>
            <li>
                <?php echo $partite[$i]['casa'] ?> -
                <?php echo $partite[$i]['ospite'] ?> |
                <?php echo $partite[$i]['punti_casa'] ?> - 
                <?php echo $partite[$i]['punti_ospite'] ?>
            </li>
        <?php
            };
        ?>
        
    </ul>

</body>
</html>
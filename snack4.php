<!-- 
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso
numero più di una volta -->
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
            for ($i=0; $i < 16 ; $i++) {
                $random_num = rand(1,100);
        ?>
           <li> <?php print_r($random_num); ?> </li>
        <?php
        }
        ?>
    </ul>
</body>
</html>

<!-- incompleto -->



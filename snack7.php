<?php

// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome
// e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni
// alunno

$alunni= [
    [
        'nome: '=> 'Filippo',
        'cognome: '=> 'Verdi',
        'voti: '=> [5,7,8,2,9,3,7]
    ],
    [
        'nome: '=> 'Maria',
        'cognome: '=> 'Blu',
        'voti: '=> [3,4,8,9,9,9,9]
    ],
    [
        'nome: '=> 'Piero',
        'cognome: '=> 'Rossi',
        'voti: '=> [5,5,5,6,7,6,7]
    ],
    [
        'nome: '=> 'Francesca',
        'cognome: '=> 'Giallo',
        'voti: '=> [8,7,8,6,6,8,9]
    ],
    [
        'nome: '=> 'Gianluca',
        'cognome: '=> 'Viola',
        'voti: '=> [4,4,6,6,8,9,9]
    ],
];

var_dump($alunni);

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
    
<?php 
        
        foreach($alunni as $alunno){
        
                foreach($alunno as $key => $value){
    ?>
                <span>
                    <?php echo $key, $value;?>
                </span>
                <br>
    <?php   
                };

        };
    ?>

</body>
</html>
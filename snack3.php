<?php

// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
// DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni
// data con i relativi post.
// Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

$posts =
[
    '29/03/2022'=>[
        ['title'=> 'Il legno è vivo',
        'author' => 'Giovannino Pane&Vino',
        'text' => 'Anatomia di uno sgabello'
        ],
        ['title'=> 'Le cose',
        'author' => 'Francesco PopiPopi',
        'text' => 'Interpretazione della fisiognomica dei clacson'
        ],
    ],
    '23/02/2022'=>
    [
        ['title'=> 'Martha ha tre bambini',
        'author' => 'Luca Pavid',
        'text' => 'Interpretare gli ultrasuoni dei neonati'
        ],
        ['title'=> 'Il montaggio',
        'author' => 'Ivo Avid',
        'text' => 'Quattro chiodi cambiano il mondo'
        ],
    ],
    '20/02/2022'=>
    [
        ['title'=> 'Il codice',
        'author' => 'Leonardo Da Vinci',
        'text' => 'In realtà è stato scritto a casaccio'
        ],
        ['title'=> 'La verità dietro al velo',
        'author' => 'Pragmatanga Yogapanza',
        'text' => 'Per svelare la realtà dietro al velo di Maya, basta spogliare Maya'
        ],
    ],
    '03/01/2022'=>
    [
        ['title'=> 'I ravanelli sono malvagi',
        'author' => 'Sconosciuto',
        'text' => 'Un avvertimento che può salvarvi la vita'
        ],
        ['title'=> 'Io sono Giovanna',
        'author' => 'Giovanna',
        'text' => 'Sono una madre'
        ],
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
        <?php 
        
            foreach($posts as $key => $value){
        ?>
                <h5> Data :<?php echo $key; ?>  </h5>
        <?php
                for ($i=0; $i < count($value) ; $i++) { 
        ?>
                    <div>
                        <h3> " <?php echo $value[$i]['title'];?> " </h3>
                    </div>
                    <div>
                        <h4> Di <?php echo $value[$i]['author']; ?>  </h4>
                    </div>
                    <div>
                        <p>  <?php echo $value[$i]['text']; ?>  </p>
                    </div>
                    <br>
        <?php
                }
            }
        ?>

</body>
</html>
<?php 

// Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli
// insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
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

$teacher= array_slice($db,0,true);
var_dump($teacher);
$pm= array_slice($db,1,true);
var_dump($pm);

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
        
        foreach($teacher as $key => $value){
            for ($i=0; $i < count($value) ; $i++) { 
    ?>
                <span style="background-color: grey">
                    <?php echo $value[$i]['name'];?>  <?php echo $value[$i]['lastname']; ?>
                </span>
                <br>
    <?php
            }
        };
        
        foreach($pm as $key => $value){
            for ($i=0; $i < count($value) ; $i++) { 
    ?>
                <span style="background-color: green">
                    <?php echo $value[$i]['name'];?>  <?php echo $value[$i]['lastname']; ?>
                </span>
                <br>
    <?php
            }
        };
    ?>


</body>
</html>
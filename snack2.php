<?php 

// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo
// nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una
// chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso
// negato”

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
$_GET=["name"];
$_GET=["mail"];
$_GET=["age"];
$pos_dot = strpos($mail, '.', -4);
$pos_at = strpos($mail, '@');
$len_name = strlen($name);

// var_dump($len_name);
// var_dump($pos_at);
// var_dump($pos_dot);


    if($len_name >3 && $pos_dot && $pos_at && is_numeric($age)){
        echo('Accesso riuscito');
    }
    else{
        echo('Accesso negato');
    }
        


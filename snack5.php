<?php 
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e
// suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

$parag= "Il solo vero viaggio, il solo bagno di giovinezza, non sarebbe quello di andare verso nuovi paesaggi, ma di avere occhi diversi, di vedere lo universo con gli occhi di un altro, di cento altri, di vedere i cento universi che ciascuno di essi vede, che ciascuno di essi è.";
$phrases=explode(',', $parag, -1);
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
            foreach($phrases as $key=>$value) { 
        ?>
            <div>  <?php echo $phrases[$key]; ?>  </div>
        <?php        
            }
        ?>
</body>
</html>
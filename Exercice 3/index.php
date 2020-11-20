<?php 
        // déclaration de la variable gender et initialisation avec sa valeur
        $gender = 'homme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    
            <?php 
        if($gender != 'homme'){?>
            <p>C'est une développeuse !!!</p>
            <?php }
        else{?>
            <p>C'est un développeur !!!</p>
            <?php }?>

<!-- Opérateur Ternaire -->

    <p><?php echo ($gender != 'homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';?></p>
</body>
</html>
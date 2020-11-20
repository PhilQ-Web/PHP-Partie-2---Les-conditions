<?php 
        // déclaration de la variable age et initialisation avec sa valeur
        $age = 10;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <p>
        <?php 
        if($age >= 18 && $age <= 100){?>
            <p>Vous êtes majeur</p>  
        <?php 
          }
        else{?>
            <p>Vous êtes mineur</p>  
        <?php }?>
    </p>

    <!-- Opérateur Ternaire -->

    <p><?php echo ($age >= 18 && $age <= 100) ? 'Tu es majeur' : 'Tu n\'es pas majeur';?></p>
</body>
</html>
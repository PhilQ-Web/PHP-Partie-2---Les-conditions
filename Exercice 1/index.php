<?php 
        // déclaration de la variable age et initialisation avec sa valeur
        $age = 100;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <?php 
        if($age >= 18 && $age <= 100){?>
            <p>Vous êtes majeur</p>
            <?php  }
        else if($age < 18 && $age >= 0){?>
            <p>Vous êtes mineur</p>
            <?php  }
            else{?>
            <p>Erreur</p>
            <?php  }?>
</body>
</html>
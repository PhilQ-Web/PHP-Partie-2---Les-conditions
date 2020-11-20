<?php 
        // déclaration de la variable age et initialisation avec sa valeur
        $age = -5;
        // déclaration de la variable gender et initialisation avec sa valeur
        $gender = "femme";
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>

        <!-- MA SOLUTION SANS PRECISER LA NATURE DE L'ERREUR -->
    
        <?php 
        if($age >= 18 && $age < 100 && $gender == "homme"){?>
            <p>Vous êtes un homme et vous êtes majeur</p>
            <?php }
        else if($age < 18 && $age >= 0 && $gender == "homme"){?>
            <p>Vous êtes un homme et vous êtes mineur</p>
            <?php }
        else if($age >= 18 && $age < 100 && $gender == "femme"){?>
            <p>Vous êtes une femme et vous êtes majeure</p>
            <?php }
        else if($age < 18 && $age >= 0 && $gender == "femme"){?>
            <p>Vous êtes une femme et vous êtes mineure</p>
            <?php }
        else{?>
            <p>Erreur</p>
            <?php }?>

            <!-- SOLUTION CONDITIONS IMBRIQUEES -->

            <?php 
            if($age > 0 && $age < 100){
                if($age >= 18 && $gender == "homme"){?>
                  <p>Vous êtes un homme et vous êtes majeur</p> 
                  <?php }
                 else if($age < 18 && $gender == "homme"){?>
                    <p>Vous êtes un homme et vous êtes mineur</p> 
                    <?php }
                else if($age >= 18 && $gender == "femme"){?>
                    <p>Vous êtes une femme et vous êtes majeure</p> 
                    <?php }
                else if($age < 18 && $gender == "femme"){?>
                    <p>Vous êtes une femme et vous êtes mineure</p> 
                    <?php }
                else {?>
                    <p>Erreur au niveau du genre</p> 
                    <?php }

                }
            else if($gender != "homme" && $gender != "femme"){?>
                <p>Erreur au niveau de l'âge et du genre</p> 
                <?php }
            else{?>
                <p>Erreur au niveau de l'âge</p> 
                <?php }
    ?>

    
</body>
</html>
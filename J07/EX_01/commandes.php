<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">

        <link type="text/css" rel="stylesheet" href="vitrine.css"/>

        <title>T-shirt</Title>
    </head>

<body>  
<?php
     function afficher_commandes($historique_commandes) {
        $historique_commandes=array(5.49, 9.99, 5.49, 15.99, 25);
    }
     foreach ($historique_commandes as $value) {
        echo $value->format('Une commande de $historique_commandes euros a été reçue');
     }
     

     array_push($historique_commandes);
     echo $historique_commandes->format('Le total des commandes est de 61.96 euros.');
     
?>
</body>
</html>
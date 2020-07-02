<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">

        <link type="text/css" rel="stylesheet" href="vitrine.css"/>

        <title>T-shirt</Title>
    </head>

<body>
<?php
$panier=array(
    array('T-Shirt rouge', 15.50, 5),
    array('T-Shirt vert', 15.50, 6),
    array('T-Shirt argent', 15.50, 8),
    array('Short bleu', 16.50, 5),
    array('Short vert', 19.99, 5),
    array('Veste argent', 19.99, 10),
    array('Veste argent', 35, 3)
);
function afficher_panier($panier)
{
 print_r($panier);
 echo 'Panier';
}
function calculer_total_panier($panier, $prix_total)
{
 return   $prix_total;
 echo '<p>Prix total</p>';
}

?>
</body>
</html>
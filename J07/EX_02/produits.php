<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">

        <link type="text/css" rel="stylesheet" href="vitrine.css"/>

        <title>T-shirt</Title>
    </head>

<body>  
<?php
   $produits=array (
       'T-Shirt rouge' => 15.50,
       'T-Shirt vert' => 15.50,
       'T-Shirt argent' => 16.50,
       'Short bleu' => 19.99,
       'Short vert' => 19.99,
       'Veste argent' => 35);

   foreach($produits as $value)
   {
       echo 'T-Shirt rouge :'$produits['T-Shirt rouge'],'<br />';
       echo 'T-Shirt vert :'$produits['T-Shirt vert'],'<br />';
       echo 'T-Shirt argent :'$produits['T-Shirt argent'],'<br />';
       echo 'Short bleu :'$produits['Short bleu'],'<br />';
       echo 'Short vert :'$produits['Short vert'],'<br />';
       echo 'Veste argent :'$produits['Veste argent'],'<br />';
   }
   array_unshift($produits, $colonne1, $colonne2);
   $colonne1="Produits";
   $colonne2="Prix";

?>
</body>
</html>
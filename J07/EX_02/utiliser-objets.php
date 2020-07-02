<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">

        <link type="text/css" rel="stylesheet" href="vitrine.css"/>

        <title>T-shirt</Title>
    </head>

<body>  
<?php
$date1 = new DateTime('2020-07-02');
echo $date1->format('Y-m-d H:i:s');

$date2 = new DateTime('2020-06-22 9:00');
$intervalle = date_diff($date1, $date2);
echo $intervalle->format('$intervalle Jours, $intervalle Heures, $intervalle Minutes depuis le début de la piscine.');

?>
</body>
</html>



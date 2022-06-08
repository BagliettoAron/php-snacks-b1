<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php 
    $basket_matches = [
        [
            'homeTeam' => 'teamHome1',
            'scoreHomeTeam' => '25',
            'hostTem' => 'teamHost1',
            'scoreHostTeam' => '45', 
        ],
        [
            'homeTeam' => 'teamHome2',
            'scoreHomeTeam' => '98',
            'hostTem' => 'teamHost2',
            'scoreHostTeam' => '46', 
        ],
        [
            'homeTeam' => 'teamHome3',
            'scoreHomeTeam' => '32',
            'hostTem' => 'teamHost3',
            'scoreHostTeam' => '77', 
        ],
    ];

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

<ul>
    <?php 
    for ($i = 0; $i < count($basket_matches); $i++) {
    $current_match = $basket_matches[$i]; 
    ?>

    <li>
       <p> <?php  echo $current_match["homeTeam"] ?> - <?php  echo $current_match["hostTem"]?> | <?php echo $current_match["scoreHomeTeam"]?>-<?php echo $current_match["scoreHostTeam"]?></p>
    </li>
        
    <?php } ?>
</ul>
    
</body>
</html>


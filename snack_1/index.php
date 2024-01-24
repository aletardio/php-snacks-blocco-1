<?php 
    $array_matches = [
        [
            'sq_home' => 'Olimpia Milano',
            'sq_away' => 'Virtus Bologna',
            'score_home' => 78,
            'score_away' => 92,
        ],
        [
            'sq_home' => 'Reyer Venezia',
            'sq_away' => 'Nutribullet Treviso',
            'score_home' => 102,
            'score_away' => 89,
        ],
        [
            'sq_home' => 'Dinamo Sassari',
            'sq_away' => 'Fortitudo Bologna',
            'score_home' => 98,
            'score_away' => 86,
        ],
        [
            'sq_home' => 'Happy Casa Brindisi',
            'sq_away' => 'Openjobmetis Varese',
            'score_home' => 83,
            'score_away' => 90,
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Snack 1</title>
</head>
<body class='bg-secondary'>
    <h1 class='text-light text-center py-5'> Risultati del weekend</h1>
    <h2 class='text-light text-center py-2'>
        <?php foreach ($array_matches as $match) { ?>
                <?php echo $match ['sq_home'].' - '.$match['sq_away'].' | '.$match['score_home'].'-'.$match['score_away'].'<br>'; ?>
        <?php } ?>
    </h2>
</body>
</html>
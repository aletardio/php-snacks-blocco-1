<?php 
    $posts = [
        '15-08-2023' => [
            [
                'title' => 'Ferragosto in spiaggia',
                'author' => 'Giorgia Rossi',
                'text' => 'Ferragosto insieme ai miei amici del cuore.'
            ],
            [
                'title' => 'Party in campagnia',
                'author' => 'Andrea Bianchi',
                'text' => 'Fantastica serata di festa in compagnia.'
            ],
        ],
        '15-09-2023' => [
            [
                'title' => 'Primo giorno di università',
                'author' => 'Federico Marcelli,',
                'text' => 'Inizio di una nuova avventura!'
            ],
            [
                'title' => 'Prima partita di basket',
                'author' => 'Marco Spissu',
                'text' => 'Ricomincia il nostro cammino verso il campionato!'
            ],
        ],
        '22-09-2023' => [
            [
                'title' => 'La fine dell\'estate',
                'author' => 'Chiara Tozzi',
                'text' => 'Porto nel mio cuore tutto i momenti che ho passato con voi.'
            ],
            [
                'title' => 'Viaggio di lavoro',
                'author' => 'Gianluca Calafiori',
                'text' => 'Importante viaggio di lavoro a Londra. Speriamo non piova.'
            ],
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
        <?php 
            foreach ($posts as $post => $postDate) {
                echo "<h2>$post</h2>";

                foreach ($postDate as $postInfo) {
                    echo "<h3>{$postInfo['title']}</h3>";
                    echo "<p>Autore: {$postInfo['author']}</p>";
                    echo "<p>{$postInfo['text']}</p>";
                    echo "<hr>";
                }
            }
        ?>
</body>
</html>
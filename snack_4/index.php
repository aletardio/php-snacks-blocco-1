<?php 
    $array=[];
    while(count($array) < 16){
        $num = rand(1, 100);
        if(in_array($num, $array) === false){
            $array [] = $num;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <?php 
        foreach($array as $num){
            echo $num.'<hr>';
        }
    ?>
</body>
</html>
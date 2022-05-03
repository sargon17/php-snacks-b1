<?php

// array of 15 unique generated numbers
$numbers = array_unique(array_rand(range(1, 100), 15));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers genearator</title>
</head>

<body>
    <div>
        <?php foreach ($numbers as $number) : ?>
            <p><?= $number ?></p>
        <?php endforeach; ?>
    </div>

</body>

</html>
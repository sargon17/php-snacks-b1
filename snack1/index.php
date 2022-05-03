<?php

$games = [
    [
        "homeTeam" => "Boston Celtics",
        "awayTeam" => "Brooklyn Nets",
        "homeScore" => 81,
        "awayScore" => 88
    ],
    [
        "homeTeam" => "New York Knicks",
        "awayTeam" => "Philadelphia 76ers",
        "homeScore" => 101,
        "awayScore" => 89
    ],
    [
        "homeTeam" => "Toronto Raptors",
        "awayTeam" => "Chicago Bulls",
        "homeScore" => 111,
        "awayScore" => 96
    ],
    [
        "homeTeam" => "Cleveland Cavaliers",
        "awayTeam" => "Detroit Pistons",
        "homeScore" => 89,
        "awayScore" => 92
    ],
    [
        "homeTeam" => "Indiana Pacers",
        "awayTeam" => "Milwaukee Bucks",
        "homeScore" => 91,
        "awayScore" => 93
    ]
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>NBA Games</title>
</head>
<style>
    body {
        font-family: 'Open Sans', sans-serif;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;

    }

    .teams {
        font-weight: 600;
    }
</style>

<body>
    <ul>
        <?php foreach ($games as $game) { ?>
            <li>
                <span class="teams"> <?php echo $game["homeTeam"] . "-" . $game["awayTeam"] ?> </span> | <span class="scores"> <?php echo $game["homeScore"] . "-" . $game["awayScore"]; ?> </span>
            </li>
        <?php } ?>
    </ul>
</body>

</html>
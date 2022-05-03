<?php

$students = [
    [
        'name' => 'Liubov',
        'surname' => 'Stasiuk',
        "votes" => [
            "PHP" => "5",
            "JS" => "4",
            "CSS" => "3",
            "HTML" => "3",
            "SQL" => "5"
        ]
    ],
    [
        'name' => 'Ruslan',
        'surname' => 'Shevchenko',
        "votes" => [
            "PHP" => "3",
            "JS" => "5",
            "CSS" => "4",
            "HTML" => "5",
            "SQL" => "3"
        ]
    ],
    [
        'name' => 'Kateryna',
        'surname' => 'Medved',
        "votes" => [
            "PHP" => "3",
            "JS" => "3",
            "CSS" => "5",
            "HTML" => "3",
            "SQL" => "4"
        ]
    ],
    [
        'name' => 'Oleksandr',
        'surname' => 'Koval',
        "votes" => [
            "PHP" => "4",
            "JS" => "3",
            "CSS" => "3",
            "HTML" => "5",
            "SQL" => "3"
        ]
    ],
    [
        'name' => 'Vasyl',
        'surname' => 'Koval',
        "votes" => [
            "PHP" => "3",
            "JS" => "3",
            "CSS" => "3",
            "HTML" => "3",
            "SQL" => "3"
        ]
    ]
];

// vote avarage of a student
function voteAvarage($student)
{
    $votes = $student['votes'];
    $sum = 0;
    foreach ($votes as $key => $value) {
        $sum += $value;
    }
    return $sum / count($votes);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Dev Students Register</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>PHP</th>
                <th>JS</th>
                <th>CSS</th>
                <th>HTML</th>
                <th>SQL</th>
                <th>Vote avarage</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student) : ?>
                <tr>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['surname'] ?></td>
                    <td><?= $student['votes']['PHP'] ?></td>
                    <td><?= $student['votes']['JS'] ?></td>
                    <td><?= $student['votes']['CSS'] ?></td>
                    <td><?= $student['votes']['HTML'] ?></td>
                    <td><?= $student['votes']['SQL'] ?></td>
                    <td><?= voteAvarage($student) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>
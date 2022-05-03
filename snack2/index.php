<?php

$name = $_GET['name'] ?? 'Guest';
$age = $_GET['age'] ?? '0';
$mail = $_GET['mail'] ?? 'no mail';

$isAccessSuccessful = checkAccess();

function checkAccess()
{
    if (strlen($_GET['name']) >= 3 && is_numeric($_GET['age']) && strpos($_GET['mail'], '@') && strpos($_GET['mail'], '.')) {
        return true;
    } else {
        return false;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access app</title>
</head>

<style>
    body {
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .access--ok {
        color: green;
    }

    .access--fail {
        color: red;
    }
</style>

<body>
    <div>
        <?php if ($isAccessSuccessful) : ?>
            <p class="access--ok">Access granted!</p>
        <?php else : ?>
            <p class="access--fail">Access denied!</p>
        <?php endif; ?>
    </div>

</body>

</html>
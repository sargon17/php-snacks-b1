<?php

$name = $_GET['name'];
$age = $_GET['age'];
$mail = $_GET['mail'];


$isAccessSuccessful = checkAccess();

function checkAccess()
{
    if (isset($name) && isset($age) && isset($mail)) {
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
</style>

<body>
    <div>
        <h1>Welcome <?php echo $name; ?></h1>
        <p>You are <?php echo $age; ?> years old</p>
        <p>Your email is <?php echo $mail; ?></p>
    </div>

</body>

</html>
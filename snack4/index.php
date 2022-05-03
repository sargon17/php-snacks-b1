<?php

$initialString = " Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat possimus ullam sed. Libero, commodi ratione nihil rerum totam nostrum animi quod sint impedit maiores laboriosam officiis vero incidunt repellat autem.
Voluptatibus, possimus! Modi veniam dolore architecto nobis quia aperiam quis, alias deleniti nesciunt ut fugit ad repudiandae beatae assumenda ducimus. Cupiditate obcaecati dolore vel perferendis vitae pariatur optio non aut.
Suscipit explicabo ipsam aspernatur repellendus sapiente placeat consequuntur id excepturi impedit laudantium nesciunt voluptates, quisquam dolorum odio ipsa magni alias fugit quis magnam pariatur tenetur? Nisi sapiente sed modi dolorem.
Molestias quae mollitia sed ut asperiores assumenda optio dolor cum voluptates. Ab, dolore aperiam. Beatae quia odio accusantium natus porro aliquid rem id, facilis est asperiores ipsam provident velit in. "
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
    <div>
        <?php foreach (explode(".", $initialString) as $stringPart) : ?>
            <p><?= $stringPart ?></p>
        <?php endforeach; ?>
    </div>
</body>

</html>
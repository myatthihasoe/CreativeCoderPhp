<?php
require "exercise9.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise10</title>
</head>
<body>
    <ul>
    <li>person name is <?= $persons['name']; ?></li>
        <li>person age is <?= $persons['age']; ?></li>
        <li>He is
            <?php if ($persons['isMarried']) : ?>
                married
            <?php else : ?>
                not married    
            <?php endif?>
        </li>
    </ul>
</body>
</html>
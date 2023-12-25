<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <!-- <?php foreach($persons as $key => $bio): ?>
            <div>
                <li>
                    <?= "$key - $bio" ?>
                </li>
            </div>
        <?php endforeach; ?> -->

        <li>person name is <?= ucwords($persons['name']); ?></li>
        <li>person age is <?= $persons['age']; ?></li>
        <li>He is
            <?php //ternary operator
                echo $persons['isMarried'] ? "married" : "not married";
            ?>
        </li>

    </ul>

</body>
</html>
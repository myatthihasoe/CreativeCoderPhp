<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobalVariable</title>
    <style>
        h1{
            background-color: grey;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>
        <?php 
        $name="mths"; 
        echo "Hello, " .$name; 
        ?>
    </h1>
    <!-- <h2><?= "Hello ".$_GET['name'];?></h2> -->
    <h2><?= "Hello ".htmlspecialchars($_GET['name']);?></h2>

    <h2><?= "My name is " .htmlspecialchars($_GET["name"]); echo". Nice to meet you. " ?></h2>
    
</body>
</html>
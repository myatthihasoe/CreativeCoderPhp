<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>
<body>
    
    <ul>
        
        <!-- <?php foreach($task as $key => $detail): ?>
            <li><?= $key."-". $detail; ?></li>
        <?php endforeach; ?> -->

        <li>task title is <?= $task['title']; ?></li>
        <li>task due date is <?= $task['due']; ?></li>
        <?= $task['complete'] ?"complete" :"incomplete"; ?>
    </ul>
</body>
</html>
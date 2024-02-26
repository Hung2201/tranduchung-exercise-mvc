<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Here are all fruits:</p>
    <ul>
        <?php foreach ($fruits as $fruit):  ?>
            <li><?php echo $fruit->name . " costs " . $fruit->price; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
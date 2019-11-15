<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games</title>
</head>
<body>
 
<ul>
    <?php foreach ($games as $game) : ?>
    <li><?= $game; ?></li>
    <?php endforeach; ?>
</ul>
 
</body>
</html>
<?php 

$array = [5, 10, 8, 11, 14, 20, 14, 47];

usort($array, function ($a, $b) {
    return $a <=> $b;
});

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Test sort Small to Big Number</h1>
        <div>
            <?php foreach ($array as $item) : ?>
                <p><?= $item ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
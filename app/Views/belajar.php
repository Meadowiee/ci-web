<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar</title>
</head>
<body>
    <h1>Hello</h1>
    <?php if (isset($title)) { ?>
        <h3><?=$title?></h3>
        <p><?=$pesan?></p>
    <?php } ?>
</body>
</html>
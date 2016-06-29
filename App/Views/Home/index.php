<!Doctype html>
    <html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
</head>
<body>
<h1>Welcome <?php echo htmlspecialchars($name) ?></h1>
<p>Hello from the home view!</p>
<ul>
    <?php
    foreach ($colors as $color):?>
        <li><?php echo htmlspecialchars($color);?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
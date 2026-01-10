<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>

<body>


    <p> lambda function</p>
    <?php foreach ($filtered as $book): ?>
        <ul>
            <li>
                <?= $book["title"] ?>
            </li>
            <li>
                <?= $book["author"] ?>
            </li>
            <li>
                <?= $book["url"] ?>
            </li>
        </ul>
    <?php endforeach; ?>
    <hr>
</body>

</html>
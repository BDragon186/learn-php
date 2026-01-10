<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>

<body>
    <?php
    $books = [
        "atomic habit",
        "learn how to learn",
        "can't hurt me"
    ]
    ?>

    <ul>
        <?php
        foreach ($books as $book) {
            echo "<li> $book </li>";
        }
        ?>
    </ul>
    <hr>

    <ul>
        <?php
        foreach ($books as $book) {
            echo "<li> {$book}tm </li>";
        }
        ?>
    </ul>
    <hr>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <?= $book ?>
            </li>
        <?php endforeach ?>
    </ul>
    <hr>

    <?php $books = [
        [
            "title" => "atomic habits",
            "author" => "james clear",
            "url" => "https://shopee.vn/list/atomic%20habits"
        ],
        [
            "title" => "deep work",
            "author" => "cal newport",
            "url" => "https://shopee.vn/list/deep%20work"
        ],
        [
            "title" => "thinking fast and slow",
            "author" => "daniel kahneman",
            "url" => "https://shopee.vn/list/thinking%20fast%20and%20slow"
        ],
        [
            "title" => "digital minimalism",
            "author" => "cal newport",
            "url" => "https://shopee.vn/list/digital%20minimalism"
        ],
        [
            "title" => "a world without email",
            "author" => "cal newport",
            "url" => "https://shopee.vn/list/a%20world%20without%20email"
        ],
        [
            "title" => "slow productivity",
            "author" => "cal newport",
            "url" => "https://shopee.vn/list/slow%20productivity"
        ],
        [
            "title" => "how to win at college",
            "author" => "cal newport",
            "url" => "https://shopee.vn/list/how%20to%20win%20at%20college"
        ]
    ];
    ?>
    <?php foreach ($books as $book): ?>
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
    <?php foreach ($books as $book): ?>
        <?php if ($book["author"] == "cal newport"): ?>
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
        <?php endif; ?>
    <?php endforeach; ?>
    <hr>

    <?php
    $filterByAuthor = function ($items, $fn) {
        $filteredItems = [];
        foreach ($items  as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    };

    $filtered = $filterByAuthor($books, function ($item) {
        return ($item["author"] == "cal newport");
    });
    //built-in function
    $filtered = array_filter($books, function ($book) {
        return $book["author"] == "cal newport";
    });
    ?>







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
<?php
$books = [
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

include 'index.view.php';

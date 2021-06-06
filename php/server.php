<?php

include './data.php';
include './filter.php';
include './paginated.php';

$genre_filter = isset($_GET['genre']) ? strtolower($_GET['genre']) : "";
$item_to_page = isset($_GET['itemToPage']) ? ($_GET['itemToPage']) : "";
$request_page = isset($_GET['page']) ? ($_GET['page']) : 1;

$discs_list = $disc;

$disc_filtered = filter($disc, $genre_filter);

$disc_paginated = paginated($disc_filtered, $item_to_page, $request_page);


header('Content-Type: application/json');

echo json_encode($disc_paginated)

?>
<?php

function paginated ($array, $itemPerPage, $pageRequested) {
    
    $itemToPage = $itemPerPage;
    if($itemToPage === "") {
        $itemToPage = count($array);
    };

    $currentPage = ($pageRequested === "") ? 1 : $pageRequested;
    $totalPage = ceil(count($array)/$itemToPage);
    $nextPage = ($currentPage == $totalPage) ? false : $currentPage + 1;
    $prevPage = ($currentPage == 1) ? false : $currentPage - 1;
    $offset = ($itemToPage*($currentPage - 1));
    
    $arrayPaginated = array_slice($array, $offset, $itemToPage);

    return [
        "current_page" => $currentPage,
        "nextPage" => $nextPage,
        "prevPage" => $prevPage,
        "total_page" => $totalPage,
        "item_to_page" => $itemToPage,
        "totel_item" => count($arrayPaginated),
        "data" => $arrayPaginated,
    ];



}

?>
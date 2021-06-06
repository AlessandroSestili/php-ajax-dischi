<?php


function filter($arrey, $filter) {
    $array_filtered = [];
    if($filter == "") {
        return $arrey;
    }
    foreach($arrey as $single_item) {
        
        $result = strpos(strtolower($single_item['genre']), $filter);

        if($result !== false) {
            $array_filtered[] = $single_item;
        };
        
    }

    return $array_filtered;

};


?>
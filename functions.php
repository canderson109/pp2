<?php
function printArr($array) {
    foreach ($array as $placeholder) {
        echo nl2br($placeholder . "\n");
    }
}

function largest($array) {
    $compare = null;
    foreach ($array as $placeholder) {
        if($compare != null) {
            if ($compare < $placeholder) {
                $compare = $placeholder;
            }
        } else {
            $compare = $placeholder;
        }
    }

    return $compare;
}

function removeDups($array) {
    $array = array_unique($array);
    return $array;
}

function distribution($array) {
    $array = array_count_values($array);
    ksort($array);
    return $array;
}
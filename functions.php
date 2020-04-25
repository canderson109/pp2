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

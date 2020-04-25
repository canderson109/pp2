<?php
function printArr($array) {
    foreach ($array as $placeholder) {
        echo nl2br($placeholder . "\n");
    }
}

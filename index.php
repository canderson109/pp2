<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
/*
 * Name:  Conner Anderson
 * Date:  4/24/2020
 * URL:   https://canderson.greenriverdev.com/328/pp2/index.php
 * Title: Pair Program 2
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PP2</title>
</head>
<body>

<?php
echo "<h1>PHP Array Practice</h1>";
$numbers = array(7, 9, 8, 9, 8, 8, 6);

include("functions.php");

echo nl2br("Step 1" . "\n");
printArr($numbers);

echo nl2br("Step 2" . "\n");
echo largest($numbers);
echo nl2br("\n" . "Step 3" . "\n");
foreach (removeDups($numbers) as $placeholder) {
    echo nl2br($placeholder . "\n");
}

echo nl2br("Step 4" . "\n");
foreach (distribution($numbers) as $placeholder) {
    echo nl2br($placeholder . "\n");
}
?>

</body>
</html>
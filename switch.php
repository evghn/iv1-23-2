<?php

$a = 1;
if ($a == 1) {
    echo "a = 1";
} elseif ($a == 2) {
    echo "a = 2";
} elseif ($a == 3) {
    echo "a = 3";
} else {
    echo "a != (1, 2, 3)";
}

echo "<br>";

switch ($a) {
    case 1:
        $b = 3;
        echo "a = 1";
        break;
    case 2:
        $b = 1;
        echo "a = 2";
        break;
    case 3:
        $b = 2;
        echo "a = 3";
        break;
    default:
        echo "a != (1, 2, 3)";        
}


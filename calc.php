<?php

$a = 1;
$b = 2;
$c = 3;

$d = 5;

if ($d > 0) {
    $x1 = 2;
    $x2 = 3;
// } elseif (empty($d)) {
} elseif (!$d) {
    // d=0
    $x1 = 2;
    $x2 = null;
} else {
    $x1 = null;
}

// проверка
$d = null; 
var_dump(empty($d), isset($d));

if (!!empty($x1) || isset($x1)) {
    if (isset($x2)) {
        echo "2 корня";
    } else {
        echo "1 корень";
    }
} else {
    echo "нет корней";
}

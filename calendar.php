<?php

$m = 2;

switch ($m) {
    case 2:
        $s = 'февраль';
        $days = 29;
        break;    
}

$s .= "<br>пн вт...";

for ($i = 0; $i < $days; $i++) {
    if ($i % 7 == 0) {
        $s .= "<br>";
    }    
    $s .= ($i > 8 ? '' : '0') 
            . $i+1 
            . ' ';
}

echo $s;


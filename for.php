<?php


for ($i = 0, $b = 0; $i < 10, $b < 15; $i++, $b++) {
    echo $i . ' ' . $b . '<br>';    
}

for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
    for ($j = 9 - $i; $j > 0; $j--) {
        echo $j . ($j > 1 ? "->" : '');
    }
    echo "<br>";
}




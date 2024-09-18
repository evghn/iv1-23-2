<?php

$i = 0;
// while (true) {
//     $i++;
//     if (!($i % 2)) {
//         continue;
//     }    
//     echo $i-1;
//     if ($i > 9) {
//         break;
//     }
// }
?>

<table style="border-collapse: collapse">
<?php
    $n = 1;
    $s = '';
    $border = "border: 1px solid black;";
    $color = "background-color: yellow;";
    for ($i = 0; $i < 4; $i++) {
        $s .= "<tr>\n";
        for ($j = 0; $j < 4; $j++) {
            $s .= "<td style=\"$border $color\">"
                . $n++ 
                . "</td>\n";            
        }        
        $s .= "</tr>\n";
    }
    echo $s;
?>    
</table>
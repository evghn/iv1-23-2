<?php

include "config.php";

if (file_exists(FILE_DB)) {
    $result = array_map(
        fn($val) => unserialize($val),  
        file(FILE_DB)
    ); 
    var_dump($result);    
} else {
    echo "file not found!";
}
// if (file_exists(FILE_DB)) {
//     $result = [];
//     if ($data = explode("\n", file_get_contents(FILE_DB))) {
//         foreach ($data as $val) {
//             if (! empty($val)) {
//                 $result[] = unserialize($val);
//             }           
//         }
//     }
//     var_dump($result);    
// } else {
//     echo "file not found!";
// }

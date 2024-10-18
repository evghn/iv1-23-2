<?php


const PATH = __DIR__ . '/../content/';

// var_dump(PATH); die;
$file1 = PATH . 'content1.php';
$file2 = PATH . 'content2.php';


if (file_exists($file1)) {
  include $file1;  
} else {
    echo "file: $file1 not found! 😕";
}

echo "<br>";
if (file_exists($file2)) {
    include $file2;  
} else {
    echo "file: $file2 not found! 😕";
}
  
<pre>
<?php

// Array

// $mas = array();
$mas = [1, 2, 3, 4];

$mas[] = 5;

$mas[3] = 5;
$mas[10] = 10;
// var_dump($mas);
$a = $mas[10];
unset($mas[10]);
// var_dump($mas);
$mas[] = $a;
// foreach ($mas as $key => $value) {
//     $value++;
//     echo "$key => $value  <br>";
// }

// $value++;
$mas[] = 'text';
$mas[] = null;
$mas[] = false;

$a = null;
$mas2 = [6, 7, 8, 9];
$mas[] = $mas2;
// var_dump($mas, $mas2);


// for ($i = 0; $i < count($mas); $i++) {
//     echo $mas[$i] . '<br>';
// }

// print_r($mas);
// echo $mas[count($mas)-1];
// $mas[10] = 10;

// var_dump($mas);
// unset($mas[0]);

// var_dump($mas);


$vasya = [
    'ID' => 20,
    'login' => 'vasya',
    'password' => 'password',
    'age' => 20,
];

$petya = [
    'ID' => 21,
    'login' => 'petya',
    'password' => 'password',
    'age' => 21,
];

$vova = [
    'ID' => 22,
    'login' => 'vova',
    'password' => '123',
    'age' => 21,
];

$petya['friends'][] = $vova;
$petya['friends'][] = [
    'ID' => 23,
    'login' => 'georgiy',
    'password' => '123',
    'age' => 22,
];


$vasya['friends'][] = $petya;


// var_dump($petya); die;
foreach ($petya as $key => $data) {
    if (! is_array($data)) {
        echo "$key => $data<br>";
    } else {
        echo "$key => {<br>";
        foreach ($data as $key2 => $friend) {
            foreach ($friend as $friend_key => $friend_data) {
                echo "$friend_key => $friend_data<br>";
            }
        }
        echo "}<br>";
    }
}


$mas = [2, 3, 5, 2, 7, 40, 3];

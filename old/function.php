<?php

// function helloUser($user = 'guest'): void {
//   echo "Hello: $user<br>";
// //   return null;  
// }

function helloUser(string $user = 'guest'): string {
    return "Hello: $user<br>";
//   return null;  
}


$user = 'Vasya';
// helloUser($user);
// var_dump(helloUser('Petya'));
// $user = '';
// helloUser();


// function sum(int|float $a, int|float $b): int|float {
//     // echo $a . '<br>' . $b;
//     $c = $a + $b;
    
//     return $c; //type
// }

function sum(int|float $a, int|float $b): array {
    $c = $a + $b;
    $a += $c; 
    $b += $c; 
    return [
        'a' => $a,
        'b' => $b,
        'c' => $c,
    ];
}

function calc(int|float $a, int|float $b, int|float $c): array {
    $result = [];
    $d = $b**2 - 4*$a*$c;    
    
    if ($d > 0) {
        $result['x1'] = (-$b + sqrt($d))/(2 * $a);
        $result['x2'] = (-$b - sqrt($d))/(2 * $a);
        
    } elseif (!$d) {
        $result['x1'] = (-$b + sqrt($d))/(2 * $a);
    }

    return $result;
}

// function check($a, $b, $c, $x)  {
//     return $a * $x**2 + $b * $x + $c == 0;
// }

$check = fn ($a, $b, $c, $x) => $a * $x**2 + $b * $x + $c == 0;



$data = [
    ['a' => 4, 'b' => -4, 'c' => 1],
    ['a' => 14, 'b' => -4, 'c' => 6],
    ['a' => 4, 'b' => -4, 'c' => 1],
    ['a' => 2, 'b' => -7, 'c' => 9],

];

foreach ($data as $val) {    
    if ($result = calc($val['a'], $val['b'],$val['c'])) {        
        if (isset($result['x2'])) {
            // var_dump($check($val['a'], $val['b'],$val['c'], $result['x2']));
        }
        // var_dump($check($val['a'], $val['b'],$val['c'], $result['x1']));
    } else {
        // echo 'no calc<br>';
    }
}



// $func = function ($user) {
//     echo "hello $user!<br>";
// };

// $func('Vasya');

// $hello = fn () => "User: $user!";
// $hello = function () use ($user) : string {
//     return "User: $user!";
// };

// echo $hello();


$data = [0, 1, 2, 3, 0, 4, 5, 0];

// function in PHP
function calcItem(array $value, callable $func): array {
    $result = [];
    foreach ($value as $item) {
        // if ($item) {
        //     $result[] = $func($item);
        // } else {
        //     $result[] = $item;
        // }
        $result[] = $item ? $func($item) : $item;
    }

    return $result;
}

$func = function($item) {
    $result = null;
    if ($item % 2) {
        $result = $item ** 3;
    } else {
        $result = $item ** 2;
    }
    return $result;
};

$data2 = calcItem($data, $func);
$data3 = calcItem($data, $func);
$data4 = calcItem($data, $func);

// var_dump($data, $data2, $data3, $data4);


// $a = 1;
// $b = $a;

// $b++;
// var_dump($a, $b);

// $a = 1;
// $b = &$a;

// $b++;
// var_dump($a, $b);



$calc2 = function (array &$value, callable $func): void {    
    foreach ($value as $key => &$item) {
        $item = $item ? $func($item) : $item;        
    }
    unset($item);
};
$data_n = [0, 1, 2, 3, 0, 4, 5, 0];
// var_dump($data_n);
$calc2($data_n, $func);
var_dump($data_n);

function plus($x) {
    return $x++;
}

$a = null;
// var_dump($GLOBALS);


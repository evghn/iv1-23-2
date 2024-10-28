<?php

// $a = 6; //integer
// $b = 6.6; //float double

// $a = $a + $b; // 
// $a += $b; // == $a = $a + $b;
// $a -= $b; // == $a = $a - $b;
// $a /= $b; // == $a = $a / $b;
// $a *= $b; // == $a = $a * $b;
// $a = $a ** $b;
// $a **= $b;

// $a = $a + 1;

// $a = 1;

// // $a++;

// echo ++$a; //pre

// $a++ //post

/*   */

// $a = 1;
// $s = 'text "text2" $a<br>'; // string
// $s2 = "tex2t 'text1' $a";

// $s1 .= $s2; //$s = $s1 . $s2;
// echo $s1;


// echo "tex2t <br>'text1' {$a}apple";

// Boolean
// $a = true;  
// $b = false;

/*
true + true = true; 1 + 1 =1
true + false = true; 1 + 0 = 1
true * false = false; 1 * 0 = 0
false + false = false; 0 + 0 = 0

*/


// NULL
// $a = null;
// $a = 1;
// unset($a);

// $a = 1;
// $b = (int)'10apple';

// echo $a + $b;

// const USER_NAME = 'user';
// const A = 5;

// define('HOST_NAME', 'localhost');

// echo __FILE__ . '<br>' . __LINE__;

$a = 1;
$b = 4;
              // and
// if (!($a != $b) && $a) {
            // or
if (!($a != $b) || $a) {
    echo '$a == $b';
} else {
    echo '$a != $b';
}

// ax2 +- bx +- c = 0 

// x1 x2, x1, 0




if (($a = $a + $b) < 5) {
    echo "a < 5";
} else {
    if ($a == 5 ) {
        echo "a = 5";
    } else {
         echo "a > 5";
    }   
}

if (($a = $a + $b) < 5) {
    echo "a < 5";
} elseif (($a == 5 )) {
    echo "a = 5";
} else {
    echo "a > 5";
}



$a = null;

if (is_null($a)) {
    echo "ok";
} else {
    echo "no";
}

echo is_null($a) // if
        ? 'ok' // true
        : 'no'; // false
?>

<?= !$a ? 'ok' : 'no' ?>
<br>text 3
<?php if(!$a): ?>
    <div>
        text1 <br>
    sdfasdfkasdf
    sad
    </div>
    
<?php else: ?>
text2 <br>
asdfasdfasd
fscanfdf
asdf
<?php endif ?>


<?php


// $a = null;
// if ($a == null) {
//     $b = 10;
// } else {
//     $b = $a;
// }

// $b = $a == null ? 10 : $a; 
// $b = $a ?? 10;

// $b = !is_null($a)
//         ? ( $a > 5
//             ? 10
//             : 20 )
//         : 30;

// $b = !is_null($a)
//         ? "text1" . $a         
//         : 30;


if 




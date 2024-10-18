<?php

include 'config.php';

$users = [
    [
        'name' => 'vasya',
        'login' => 'vasya_login',
        'password' => 'vasya_password',
        'age' => 18,
    ],
    [
        'name' => 'petya',
        'login' => 'petya_login',
        'password' => 'petya_password',
        'age' => 18,
    ],
    [
        'name' => 'kolya',
        'login' => 'kolya_login',
        'password' => 'kolya_password',
        'age' => 18,
    ],
    [
        'name' => 'vova',
        'login' => 'vova_login',
        'password' => 'vova_password',
        'age' => 18,
    ],
    
];

if (file_exists(FILE_DB)) {
    file_put_contents(FILE_DB,
        implode("\n",
            array_map(
                fn($user) => serialize($user),
                $users
            )
    ));
    
// foreach ($users as $user) {
//         file_put_contents(FILE_DB,
//         serialize($user) . "\n", FILE_APPEND);
//     }


    echo "file write - ok!";
} else {
    echo "file not found!";
}




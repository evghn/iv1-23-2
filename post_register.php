<?php
require_once __DIR__ . "/config.php";


if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (! empty($_POST)) {
        $login = isset($_POST['login']) ? $_POST['login'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : ""; 
        $name = isset($_POST['name']) ? $_POST['name'] : ""; 
        $age = isset($_POST['age']) ? $_POST['age'] : "";
        
        // trim( strip_tags())
        // проверка на пустые данные
        if (true) {
            $result = write([
                'login' => $login,
                'password' => $password,
                'name' => $name,
                'age' => $age,
                'file' => 'avatar' // field name with file
            ]); 

            if (is_string($result)) {
                $result = "?error=" . $result;
            } else {
                $result = "";
            }
            
        }            

        header("Location: " . REGISTER_FILE . $result);
        exit;
    }
}

<?php

function read(): array {    
    if (file_exists(PATH_FILE_DB)) {
        if ($data = file_get_contents(PATH_FILE_DB)) {
            return json_decode($data, true);
        }
    }

    return [];
}

function write(array $data): bool|string {
    $dataFile = read();
    if (array_filter($dataFile, fn($user) => $user['login'] == $data['login'])) {
        // return "Пользователь с таким именем уже существует";
        return "user: {$data['login']} is exist!!!";
    }

    $fieldName = $data['file'];
    if (isset($_FILES[$fieldName]) && empty($_FILES[$fieldName]['error'])) {
        $fileTemp = $_FILES[$fieldName]['tmp_name'];
        $fileName = str_replace(' ', '_', microtime()) 
            . '.' 
            . pathinfo($_FILES[$fieldName]['name'])['extension']
            ;
        if (move_uploaded_file($fileTemp, UPLOADS_PATH . $fileName)) {
            $data['file'] = $fileName;
            return (bool)file_put_contents(PATH_FILE_DB, 
                json_encode([...$dataFile, $data])
            ); 
        }
    }

    return "ошибка регистрации";
    
    // $dataFile[] = $data;
    // return (bool)file_put_contents(PATH_FILE_DB, json_encode($dataFile));
   
}

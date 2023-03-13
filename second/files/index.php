<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
// Отправляем правильную кодировку.
header('HTTP/1.1 404 Not Found');
header('Content-Type: text/html; charset=UTF-8');

// Выводим все полученные через POST параметры.
// если запрос 2-5) сделан правильно, то можно будет увидеть
// отправленный комментарий в ответе веб-сервера.
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment = $_POST['comment'];


    echo $comment."<br/>";
}




?>


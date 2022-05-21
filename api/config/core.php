<?php
// показывать сообщения об ошибках 
ini_set('display_errors', 1);
error_reporting(E_ALL);

// URL домашней страницы 
$home_url="http://phpmvc/api/";

// страница указана в параметре URL, страница по умолчанию одна 
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// установка количества записей на странице 
$records_per_page = 5;

// расчёт для запроса предела записей 
$from_record_num = ($records_per_page * $page) - $records_per_page;


// переменные, используемые для JWT
$key = "qazwsxedcrfvtgbyhnujmiklop6235184790";
$iss = "http://phpmvc/";
$aud = "http://phpmvc/";
$iat = 1356999524;
$nbf = 1357000000;


?>
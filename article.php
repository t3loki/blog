<?php session_start() ?>
<!-- controller article.php
Просмотр одной статьи из БД news, таблицы articles -->
<?php
include_once('startup.php');
include_once('model.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

// Извлечение статьи
$article = article_get($_GET['id']);

// Кодировка
header('Content-type: text/html; charset=utf-8');

// Вывод шаблона
include('./theme/v_article.php');
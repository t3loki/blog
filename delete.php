<?php
include_once('startup.php');
include_once('model.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

// Обработка отправки формы.
if (article_delete($_GET['id']))
	{
		header('Location: editor.php');
		die();
	}

// Кодировка.
header('Content-type: text/html; charset=utf-8');

// Вывод шаблона.
include('./theme/v_editor.php');

?>

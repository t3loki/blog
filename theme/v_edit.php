<!DOCTYPE html>
<html>
<head>
	<title>Изменение статьи</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<link rel="stylesheet" type="text/css" media="screen" href="theme/style.css" />	
</head>
<body>
<h1>Изменение статьи</h1>

	<!-- главное меню -->
	<a href="../blog1/index.php">Главная</a>&nbsp;|&nbsp;
	<a href="../blog1/editor.php">Консоль редактора</a>
	<hr/>
	
	<!-- <? if($error) :?>
		<b style="color: red;">Заполните все поля!</b>
	<? endif ?>  -->

	<form method="post">
		Название:
		<br/>
		<input type="text" name="title" value="<?=$a[1]?>" />
		<br/>
		<br/>
		Содержание:
		<br/>
		<textarea name="content"><?=$a[2]?></textarea>
		<br/>
		<input type="submit" value="Изменить" />
	</form>
</body>
</html>
<!-- Шаблон v_index.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Просмотр всех статей</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<link rel="stylesheet" href="../blog1/theme/style.css" type="text/css" media="screen">
</head>
<body>
<h1>Главная</h1>
<a href="../blog1/index.php">Главная</a>&nbsp;|
<a href="../blog1/editor.php">Консоль редактора</a>
<hr>
	
		<? foreach ($articles as $a): ?>
			<div id="art-border">
				<a href="./article.php?id=<?=$a['article_id']?>">
					<h3><?=$a['title']?></h3>
				</a>
				<p style="width: 70%;"><?=$a['content']?></p>	
			</div>
		<? endforeach; ?>
	
	
</body>
</html>
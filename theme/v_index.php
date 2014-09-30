<!-- Шаблон v_index.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Просмотр всех статей</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<link rel="stylesheet" type="text/css" src="./style.css">
</head>
<body>
<a href="../blog1/index.php">Главная</a>&nbsp;
<a href="../blog1/editor.php">Консоль редактора</a>
<hr>
	<ul>
		<? foreach ($articles as $a): ?>
			<li>
				<a href="./article.php?id=<?=$a['article_id']?>">
					<h3><?=$a['title']?></h3>
				</a>

				<p><?=$a['content']?></p>

			    <!-- articles teasers without readmore -->
				<!-- <a href="<?=$a['content']?>">read more</a> -->
					
			</li>
		<? endforeach; ?>
	
	</ul>
</body>
</html>
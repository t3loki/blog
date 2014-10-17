<!-- Шаблон v_index.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Viewing all articles</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<link rel="stylesheet" href="../blog1/theme/style.css" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" media="screen" href="./dist/css/global.css" />
</head>
<body>

<div id="head-wrap">
	<div id="header">
		<h1>Home</h1>
		<a href="../blog1/index.php">Home</a>&nbsp;|
		<a href="../blog1/editor.php">Editor</a>
	</div>
</div>
	
		<? foreach ($articles as $a): ?>
			<div class="art-home">
				<div id="art-home-wrap">
					<a href="./article.php?id=<?=$a['article_id']?>">
						<h3><?=$a['title']?></h3>
					</a>
					<!-- <p><?=$a['content']?></p> -->	
					
					<p><?php echo article_intro($a); ?></p>
				</div>
			</div>
		<? endforeach; ?>
	
	
</body>
</html>
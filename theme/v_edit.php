<!DOCTYPE html>
<html>
<head>
	<title>Modifying an article</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<link rel="stylesheet" type="text/css" media="screen" href="theme/style.css" />	
</head>
<body>
<h1>Modify an article</h1>

	<!-- главное меню -->
	<a href="../blog1/index.php">Home</a>&nbsp;|&nbsp;
	<a href="../blog1/editor.php">Editor</a>
	<hr/>
	
	<? if($error) :?>
		<b class="error">Fill in all the fields!</b>
	<? endif ?>  

	<form method="post">
		Title:
		<br/>
		<input type="text" name="title" value="<?=$a[1]?>" />
		<br/>
		<br/>
		Content:
		<br/>
		<textarea name="content"><?=$a[2]?></textarea>
		<br/>
		<input type="submit" value="Modify" />
	</form>
</body>
</html>
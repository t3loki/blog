<!DOCTYPE html>
<html>
<head>
	<title>
	  <?php
	    echo 'Просмотр статьи, $_GET[$article[1]]';
      ?>
    </title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
</head>
<body>
	<!-- <?php var_dump($article[1], $article[2]); ?> -->

	<h3><?php echo $article[1] ?></h3>
	<p><?php echo $article[2] ?></p>

</body>
</html>
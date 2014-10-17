<!DOCTYPE html>
<html>
<head>
	<title>
	  <?php
	    echo $article[1];
      ?>
    </title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
</head>
<body>
<a href="../blog1/index.php">Home</a>&nbsp;
<a href="../blog1/editor.php">Editor</a>
<hr>
	<!-- <?php var_dump($article[1], $article[2]); ?> -->

	<h1><?php echo $article[1] ?></h1>
	<p><?php echo $article[2] ?></p>

</body>
</html>
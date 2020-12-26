<?php require('common.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
</head>
<body>
	<h1><?= json_encode($conn->getConnDetails) ?></h1>
</body>
</html>
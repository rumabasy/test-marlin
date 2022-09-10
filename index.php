<?php
//Models
include 'myFuncs.php';

$posts=readDbTablePosts();

//View
include 'create.php';

include 'views/index.show.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="ff">
		<div class="gg"><a href="" class="block">1</a></div>
		<div class="gg"><a href="" class="block">2</a></div>
		<div class="gg"><a href="" class="block">3</a></div>
	</div>
</body>
</html>

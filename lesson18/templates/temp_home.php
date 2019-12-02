<?php 
session_start();
require_once '../config/db.php';
require_once '../func/defense.php';
require_once '../getMethods/getPosts.php';

if(!defense()) {
	header("Location: temp_login.php");
}
$user_id = $_SESSION['user_id'];
$posts = getPosts($user_id, $pdo);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="../func/exit.php">Выход</a>
	<ul>
	<?php foreach ($posts as $post): ?>
		<h3><?= $post['title']; ?></h3>
		<li><?= $post['text']; ?></li>
		<a href=<?= "../posts/{$post['id']}"; ?>>Ссылка</a>
	<?php endforeach ?>
	</ul>


	<form action="../setMethods/setPost.php" method="POST">
		<input type="text" name="title">
		<textarea name="text" id="" cols="30" rows="10"></textarea>
		<button>Добавить пост</button>
	</form>
</body>
</html>
<?php 	

if(!$_SESSION['id']) {
	header("Location: ../")
}

require_once 'db.php';
//Достаете из сессии
$id = 22;

function getPosts($id, $pdo)
{
	$stmt = $pdo->prepare("SELECT * FROM posts WHERE user_id = ?");
	$stmt->execute([$id]);

	$posts = $stmt->fetchAll();

	return $posts;
}

$posts = getPosts($id, $pdo);


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
	<?php foreach ($posts as $post): ?>
		<li>
			<h3><?= $post['title']; ?></h3>
			<p><?= $post['text']; ?></p>
		</li>
	<?php endforeach ?>
	</ul>
</body>
</html>


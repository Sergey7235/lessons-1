<?php 

function getPosts($user_id, $pdo)
{
	$query = $pdo->query("SELECT * FROM posts WHERE user_id = $user_id");
	$posts = $query->fetchAll();
	return $posts;
}

 ?>
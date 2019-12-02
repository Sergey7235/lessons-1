<?php 
require_once '../config/db.php';

$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);

$post_id = $url[count($url) - 1];

$query = $pdo->query("SELECT * FROM posts WHERE id = $post_id");
$post = $query->fetch();

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action=""></form>
 	<h2><?= $post['title']; ?></h2>
 	<p><?= $post['text']; ?></p>
 </body>
 </html>
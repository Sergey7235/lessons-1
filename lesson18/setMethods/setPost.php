<?php 
require_once '../config/db.php';
session_start();

function setPost($text, $title, $user_id, $pdo)
{
	$query = $pdo->prepare("INSERT INTO posts(text, title, user_id) VALUES(?,?,?)");
	$query->execute([$text, $title, $user_id]);
	header("Location: ../templates/temp_home.php");
}

$text = $_POST['text'];
$title = $_POST['title'];
$user_id = $_SESSION['user_id'];

setPost($text, $title, $user_id, $pdo);
 ?>
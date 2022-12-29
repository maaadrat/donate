<?php 
	$connect = mysqli_connect('127.0.0.1','root','','donate');

	$insert = "INSERT INTO projects (title, text, goal, donated, img) VALUES ('{$_GET['title']}', '{$_GET['text']}', '{$_GET['goal']}', 0, '{$_POST['image']}')";
	
	$query = mysqli_query($connect, $insert);

	ob_start();
   	$new_url = 'index.php';
   	header('Location: '.$new_url);
   	ob_end_flush();
?>
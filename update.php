<?php 
	$connect = mysqli_connect('127.0.0.1','root','','donate');

	$update = "UPDATE projects SET title='{$_GET["title"]}', text='{$_GET["text"]}', goal='{$_GET["goal"]}' WHERE id = '{$_GET["id"]}'";
	
	$query = mysqli_query($connect, $update);

	ob_start();
   	$new_url = 'index.php';
   	header('Location: '.$new_url);
   	ob_end_flush();

?>
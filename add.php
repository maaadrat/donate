<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Создание проекта</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		html{
			height:100%;
		}
		body{
			height:100%;
		}
		.title{
			font-family:Arial;
			font-size:90px
		}
	</style>
</head>
<body class="text-light bg-dark" style="background-attachment:fixed">
<?php
	$connect = mysqli_connect('127.0.0.1','root','','donate');
	$select = "SELECT * FROM projects";
	$query = mysqli_query($connect, $select);
?>
<div class="col-12 py-3">
	<form action='insert.php' method='GET'>
		<input type="" name="title" placeholder="Заголовок">
		<input type="" name="text" placeholder="Текст">
		<input type="" name="goal" placeholder="Цель">
		<button class='btn btn-success'>Создать</button>
	</form>
	<form action='insert.php' method='POST' enctype="multipart/form-data">
		<input type="file" name="image" accept="image/*" />
	</form>
</div>
</body>
</html>

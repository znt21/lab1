	<!DOCTYPE html>
	<html lnag="ru">
	<head>
		<meta  charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta hhtp-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/s.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<title>PHP веб сайт</title>
	</head>
<body>
	<?php require "blocks/header.php" ?>
	<h3>Контактная форма</h3>
	<div class="container mt-5">
		<form  action="check.php" method="post">
			<input type="email" name="email" placeholder="Введите email" class="form-control">
			<textarea name="message" class="form-control"
			placeholder="Введите ваше сообщение"></textarea>
			<button type="submit" name="send" class="btn btn-success">Отправить</button>
		</form>
	</div>
	<?php require "blocks/footer.php"?>


</body>
</html>
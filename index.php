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
<div class="container mt-5">
	<h3 class="mb-5">ff</h3>
	<div class="d-flex flex-wrap">
	<?php
			for ($i = 0; $i < 5; $i++):
		?>
		<div class="card mb-4 shadow-sm">
			<div class="card-header">
				<h4 class="my-0 font-weight-normal">Название</h4>
			</div>
			<div class="card-body">  
				<ul class="list-unstyled mt-3 mb-4">
					<li>123</li>
					<li>345</li>
					<li>678</li>
					<li>90
					</li>
				</ul>
				<button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее</button>
			</div>
		</div>
	<?php endfor; ?>	
	</div>	
</div>
<?php require "blocks/footer.php"?>
</body>
</html>
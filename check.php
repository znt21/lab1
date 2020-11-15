<?php
	$email = $_POST['email'];
	$message = $_POST ['message'];
	
	$error = '';
	if(trim($email) == '')
		$error = 'Введите ваш email';
	else if(trim($message) == '')
		$error = 'Введите ваше сообщение';
	else if(strlen($message) <10)
		$error = 'Собщение должно быть более 10 символов';
	
	if($error != '') {
		echo $error;
		exit;
	}
	mail('eremenko1611@yandex.ru' , $subject, $message, $headers);
	?>
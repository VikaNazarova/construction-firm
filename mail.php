<?php
	$email=$_POST['email'];
	$name=$_POST['name'];
	$message=$_POST['message'];

	$to = "NazVi19@yandex.ru";

	$subject = "Заявка на строительство";

	$message ="
	Имя клиента: ".htmlspecialchars($name)." <br />
	Email: ".htmlspecialchars($email)." <br />
	Сообщение: ".htmlspecialchars($message);

	$headers = "From: construction-firm.sl <work@construction-firm.sl>\r\nContext-type: text/html; charset=UTF-8\r\n";
	mail($to, $subject, $message, $headers);

	header('Location: thanks.html');

exit();
?>
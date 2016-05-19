<?php 

		require 'class/libmail.php'; 
		$mail = new Mail('UTF-8'); 
		$mail->From('esk@mail.ru'); 
		$mail->To('ternovskiyav@gmail.com'); 
		$mail->Subject("Перезвоните мне"); 
		$mail->Body("<h1>Проверка</h2>", "html"); 
		$mail->Priority(3); 
		sleep(1); 
		$mail->Send(); 
		var_dump($mail);

 ?>
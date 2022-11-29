<?php
    $to="info@blanchard.ru";    
    $subject="Новая заявка на обратный звонок с сайта Blanchard";
    $letter="<div style='text-align:center;font-family:calibri;font-size:21pt'><b>Детали заявки:</b></div><hr>";
    foreach($_REQUEST as $key => $value) {		
			$letter.="<p style='text-align:justify; font-family:calibri; font-size:14pt'><b>".$key.": </b>".$value."</p>";
	};
    $headers="Content-Type:text/html;charset=UTF-8\r\n";
    $headers.="From: Почтовый сервис сайта Blanchard <post@blanchard.ru>";
    mail($to, $subject, $letter, $headers);
?>
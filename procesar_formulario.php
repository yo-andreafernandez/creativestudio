<?php
/*----------- INICIO DE CONFIGURACION-----------------*/
//Casilla de mail a la que se envian los correos (escribirlo entre las comillas)
$destino='email@info.ar';
//nombre del que envia el correo (escribirlo entre las comillas)
$origen_nombre='nombre del site';
//mail que aparece en el remitente (escribirlo entre las comillas,)
$origen_mail='email@info.ar';
//asunto del correo (escribirlo entre las comillas)
$subject='Contacto desde el sitio de ....';
//pagina de agradecimiento (escribirlo entre las comillas)
$adondevoy='gracias.html';
/*----------- FIN DE LA CONFIGURACION-----------------*/
$headers = "From: $origen_nombre <$origen_mail>\r\n";
$headers .= "Reply-To: $origen_mail\r\n"; 
$headers .= "Return-Path: $origen_nombre <$origen_mail>\r\n";  
$mensaje='';
	foreach($_POST as $k => $v){
		if($k!='Submit' && $k!='Enviar'){
			$mensaje.=ucfirst($k).": $v\n";
		}
	}
ini_set(sendmail_from,$origen_mail);
mail($destino,$subject,$mensaje,$headers);
header("Location:$adondevoy");
?>
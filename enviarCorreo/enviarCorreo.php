<?php 
  /*-------------------------------------------------|
  |              SI NO FUNCIONA ACTIVAR              |
  |           LA OPCION DE APPS MENOS SEGURAS        |
  |              EN SU CUENTA DE GOOGLE              |
  ---------------------------------------------------*/

  $enviado = 'Enviado: ' . date("Y-m-d H:i:s") . "\n";
  $subject = "Este es el asunto del mensaje - ";
  $message = '<h1>Hola Mundo</h1><br><p>hola</p>';
         
  // Cargando la librería de PHPMailer
   require 'phpmailer/PHPMailerAutoload.php';
   
  // Creando una nueva instancia de PHPMailer
  $mail = new PHPMailer();
   
             
  // Indicando el uso de SMTP
  $mail->isSMTP();
   
  // Habilitando SMTP debugging
  // 0 = apagado (para producción)
  // 1 = mensajes del cliente
  // 2 = mensajes del cliente y servidor
  $mail->SMTPDebug = 0;
   
  // Agregando compatibilidad con HTML
  $mail->Debugoutput = 'html';
   
  // Estableciendo el nombre del servidor de email
  $mail->Host = 'smtp.gmail.com';
   
  // Estableciendo el puerto
  $mail->Port = 587;
   
  // Estableciendo el sistema de encriptación
  $mail->SMTPSecure = 'tls';
   
  // Para utilizar la autenticación SMTP
  $mail->SMTPAuth = true;
   
  // Nombre de usuario para la autenticación SMTP - usar email completo para gmail
  $mail->Username = "pruebassilvadesarrollo@gmail.com";
   
  // Password para la autenticación SMTP
  $mail->Password = "pruebas01silva";
   
  // Estableciendo como quién se va a enviar el mail
  $mail->setFrom('pruebassilvadesarrollo@gmail.com', 'Juan Silva');
   
   
  // Estableciendo a quién se va a enviar el mail
  $mail->addAddress('juancho29silva@gmail.com', 'pruebassilvadesarrollo@gmail.com');
   
  // El asunto del mail
  $mail->Subject = $subject . $enviado;
   
  // Estableciendo el mensaje a enviar
  $mail->MsgHTML($message);
  // Adjuntando una imagen
  //$mail->addAttachment('images/phpmailer_mini.png');

  // Enviando el mensaje y controlando los errores
  if (!$mail->send()) {
    echo "No se pudo enviar el correo. Intentelo más tarde.";
  } else {
    echo "Gracias por contactarnos.";
  }
?>
<?php
function enviarEmail($para, $asunto, $mensaje, $imagen)
{
    require('PHPMailer-master/src/PHPMailer.php');
    require('PHPMailer-master/src/SMTP.php');
    $recipients = $para;
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Mailer = "SMTP";
    $mail->SMTPAuth = false;
    $mail->isHTML(true);
    $mail->SMTPAutoTLS = false;
    $mail->Port = 25;
    $mail->CharSet = 'UTF-8';
    $mail->Host = "192.168.1.42"; //CAMBIO IP
    $mail->Username = "postmaster";
    $mail->Password = ".";
    $mail->setFrom('postmaster@domenico.com');
    $mail->addAttachment($imagen);
    //Compruebo si es un correo o son varios
    if (is_array($para)) {
        foreach ($recipients as $correo) {
            $mail->addAddress($correo);
        }
    } else {
        $mail->addAddress($para);
    }
    $mail->Subject = $asunto;
    $mail->Body = $mensaje;

    if (!$mail->send()) {
        echo $mail->ErrorInfo;
    } else {
        echo "<p>El mensaje ha sido enviado correctamente. Revise su bandeja de entrada.</p>";
    }
}

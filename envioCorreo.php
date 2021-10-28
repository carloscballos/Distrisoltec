<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMAILER-master/src/PHPMailer.php';
    require 'PHPMAILER-master/src/SMTP.php';
    require 'PHPMAILER-master/src/Exception.php';
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $compañia = $_POST['compania'];
    $descripcion = $_POST['descripcion'];

    $destinatarios = "carlos.ceballos@distrisoltec.com";
    $asunto = "Formulario Contacto";
    $cuerpo = "$nombre,$correo,$telefono,$compañia,$descripcion";
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@distrisoltec.com';
        $mail->Password = 'Distri.2021*';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('info@distrisoltec.com','Distrisoltec');
        $mail->addAddress('carlos.ceballos@distrisoltec.com', 'Carlos Ceballos');

        $mail->isHTML(true);
        $mail->Subject = 'Alguien Intenta Comunicarse';
        $mail->Body = $cuerpo;
        $mail->send();
    } catch(Exception $e){
        echo 'Mensaje'.$mail->ErrorInfo;
    }
?>
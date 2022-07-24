<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



require "mail.php";

function sendMail($subject, $body, $email, $name,$html=false)
{
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 465;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Username = 'darklords.shadow@gmail.com';
    $phpmailer->Password = 'gahhkmifzfgckvtm';

    //Añadiendo el destinatario
    $phpmailer->setFrom('contact@example.com', 'Empresa');
    $phpmailer->addAddress($email, $name);

    //Content
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = 'Here is the subject';
    $phpmailer->Body    = $body;
    
    $phpmailer->send();
}


function validate($name, $email, $subject, $message, $form)
{
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}
$status = "";
if (isset($_POST['form'])) {
    if (validate($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'], $_POST['form'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $body = "$name <$email> te ha enviado un mensaje desde tu pagina web. <br>
        $message";
        //Mandar el correo
        sendMail($subject, $body, $email, $name,true);
        $status = "success";
    } else {
        $status = "danger";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario de contacto</title>
</head>

<body>
    <?php if ($status == 'danger') : ?>
        <div class="alert danger">
            <span>Surgio un problema</span>
        </div>
    <?php endif; ?>
    <?php if ($status == 'success') : ?>
        <div class="alert success">
            <span>Mensaje enviado</span>
        </div>
    <?php endif; ?>



    <form action="./" method="POST">
        <h1>¡Contactanos!</h1>
        <div class="input-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="input-group">
            <label for="asunto">Asunto:</label>
            <input type="text" name="subject" id="subject">
        </div>

        <div class="input-group">
            <label for="message">Mensaje:</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>

        <div class="button-container">
            <button type="submit" name="form">Enviar</button>
        </div>

        <div class="contact-info">
            <div class="info">
                <span><i class="fas fa-map-marker-alt"></i> Saw Mill Circe</span>
            </div>
            <div class="info">
                <span> <i class="fa fa-phone"></i> New York, NY 10001</span>
            </div>

    </form>

    <script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>

</body>

</html>
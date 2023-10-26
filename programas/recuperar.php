<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

require_once('conexion.php');
$email = $_POST['correo'];
$query = "SELECT * FROM usuario where Usu_correo = '$email'";
$result = $link->query($query);
$row = $result->fetch_assoc();

if($result->num_rows > 0){
  $mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp-mail.outlook.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'mudans692@outlook.com';
    $mail->Password   = 'Mudanzas123?';
    $mail->Port       = 587;

    $mail->setFrom('mudans692@outlook.com', 'Mudanzas');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'Recuperación de contraseña';
    $mail->Body    = 'Hola, este es un correo generado para solicitar tu recuperación de contraseña, por favor, visita la página de <a href="http://localhost:8081/proyectoMudanzas/programas/cambiarcontrase%c3%b1a.php">Recuperación de contraseña</a>';

    $mail->send();

    
    header("Location:inicio.php?message=ok");
} catch (Exception $e) {
  header("Location:incio.php?message=error");
}

}else{
  header("Location:inicio.php?message=not_found");
}

?>
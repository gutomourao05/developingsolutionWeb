<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

  $nome = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  $arquivo = "
      Nome: $nome\n
      Telefone: $phone\n
      E-mail: $email\n
      Mensagem: $message\n
      Este e-mail foi enviado em $data_envio às $hora_envio
  ";

  $mail = new PHPMailer(true);

  $subject = "Contato do site - developingsolutions.com.br";
  try {

      $mail->isSMTP();
      $mail->Host       = ''; 
      $mail->SMTPAuth   = true;                               
      $mail->Username   = '';
      $mail->Password   = '';                       
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     
      $mail->Port       = 587;                                


      $mail->setFrom('', 'Developing Solutions');
      $mail->addAddress("");                              

      $mail->isHTML(true);
      $mail->Subject = $subject;
      $mail->Body    = $arquivo;

      $mail->send();
      echo 'Mensagem enviada com sucesso';
      } catch (Exception $e) {
          echo "Mensagem não pôde ser enviada. Mailer Error: {$mail->ErrorInfo}";
      }   
?>
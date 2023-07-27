<?php
  //Variáveis
  $nome = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Corpo E-mail
  $arquivo = "
      Nome: $nome\n
      Telefone: $phone\n
      E-mail: $email\n
      Mensagem: $message\n
      Este e-mail foi enviado em $data_envio às $hora_envio
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "contato@updatepro.com.br";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers = "MIME-Version: 1.1\n";
  $headers .= "Content-type: text/html; charset=UTF-8\n";
  $headers .= "From: $destino\n"; // remetente
  $headers .= "Return-Path: $destino\n"; // return-path
  $envio = mail("gutomourao05@gmail.com", $assunto, $arquivo, $headers);
 
  if($envio)
  echo "Mensagem enviada com sucesso";
  else
  echo "A mensagem não pode ser enviada";
    
?>
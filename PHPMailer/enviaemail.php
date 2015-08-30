<?php
require'PHPMailer/class.phpmailer.php';


error_reporting(E_ALL);
error_reporting(E_STRICT);
date_default_timezone_set('America/Sao_Paulo');
$ip = getenv("REMOTE_ADDR");
// variáveis que guardam os dados vindo do form
$nomeusuario = utf8_decode($_POST['nome']);
$cidade = utf8_decode($_POST['cidade']);
$estado = utf8_decode($_POST['estado']);
$telefone = utf8_decode($_POST['telefone']);
$data = utf8_decode($_POST['data']);
$email = utf8_decode($_POST['email']);
$msg = utf8_decode($_POST['msg']);




$mail = new PHPMailer();
$mail->CharSet = "utf8";
$mail->IsHTML(true);
    $mail->SMTPSecure = 'tls';
    $mail->Username = "agnaldobernardojunior@hotmail.com";
    $mail->Password = "ZXCVBNMMNBVCXZ";
    $mail->AddAddress("agnaldobernardojunior@hotmail.com");
    $mail->FromName = "My Name";
    $mail->Subject = "My Subject";
    
        $mail->Body = "<html
<body
<table align=center border=1px
<tr>
  <td colspan=2 align=center>CONTATO
</tr>
<tr>
  <td>Nome completo: <td> ".$nomeusuario."
</tr>
 <tr>
  <td>Cidade: <td> ".$cidade."
</tr>
  <tr>
  <td>Estado: <td> ".$estado."
 </tr>
<tr>
  <td>Telefone: <td> ".$telefone."
</tr>
  	<tr>
  <td>E-mail: <td> ".$email."
</tr>
  	<tr>
  <td>Data: <td> ".$data."
</tr>
  	<tr>
  <td>Mensagem: <td> ".$msg.

  	
  
        "</tr></table></html>";

          $mail->Host = "smtp.live.com";
    $mail->Port = 587;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->From = $mail->Username;
  

$send = $mail->Send();
if ($send){
	header('location:index.php');
}
	

else echo "Erro" .$mail->ErrorInfo;
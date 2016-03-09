<?php
include('mailer.php');

$mail = new PHPMailer();

$mail->IsSMTP();                                        // send via SMTP

$mail->CharSet    = 'UTF-8';
$mail->SMTPAuth   = true;                               // enable SMTP authentication
$mail->SMTPSecure = 'tls';                              // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com"; 					// sets GMAIL as the SMTP server
$mail->Port       = 587;
$mail->Username   = "regina.montelli@nucleode-stress.com.br"; 			// SMTP username
$mail->Password   = "Riodejaneiro73";                      // SMTP password

$webmaster_email  = "regina.montelli@nucleode-stress.com.br"; //Reply to this email ID

$mail->addAddress($webmaster_email, "Mensagem enviada pelo site");
$mail->From       = $webmaster_email;
$mail->FromName   = "Núcleo De-Stress";

$mail->AddReplyTo($webmaster_email,"Webmaster");

$mail->WordWrap = 50;                                   // set word wrap

$body = "<html><body>";
$body .= "<h1>Mensagem enviada pelo site</h1>";
$body .= "<p><strong>Nome: </strong>" . $_POST['name'] . "</p>";
$body .= "<p><strong>E-mail: </strong>" . $_POST['email'] . "</p>";
$body .= "<p><strong>Mensagem: </strong>" . strip_tags($_POST['message']) . "</p>";
$body .= "</body></html>";

$mail->msgHTML($body);
$mail->IsHTML(true); // send as HTML
$mail->Subject = "Mensagem enviada pelo site";

if(!$mail->Send())
{
    echo "Message could not be sent.";
    echo "Mailer Error: ".$mail->ErrorInfo;
}
else
{
    echo "Message has been sent";
}
?>
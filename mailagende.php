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

$mail->addAddress($webmaster_email, "Agendamento pelo site");
$mail->From       = $webmaster_email;
$mail->FromName   = "Núcleo De-Stress";

$mail->AddReplyTo($webmaster_email,"Webmaster");

$mail->WordWrap = 50;                                   // set word wrap

$body = "<html><body>";
$body .= "<h1>Agendamento pelo site</h1>";
$body .= "<p><strong>Nome: </strong>" . $_POST['name-agende'] . "</p>";
$body .= "<p><strong>E-mail: </strong>" . $_POST['email-agende'] . "</p>";
$body .= "<p><strong>Telefone: </strong>" . $_POST['phone-agende'] . "</p>";
$body .= "<p><strong>Terapia: </strong>" . $_POST['terapia-agende'] . "</p>";
$body .= "</body></html>";

$mail->msgHTML($body);
$mail->IsHTML(true); // send as HTML
$mail->Subject = "Agendamento pelo site";

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
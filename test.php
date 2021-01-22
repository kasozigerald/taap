<?php
function send_emails($email,$name,$subject,$htmlContent){

require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

 $mail->SMTPDebug = 4;                              

$mail->isSMTP();                                      
$mail->Host = 'ssl://smtp.googlemail.com';  
$mail->SMTPAuth = true;                               
$mail->Username = 'geracodes49@gmail.com';                 
$mail->Password = '3c$1000b@49';                           
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;                                    

$mail->setFrom($email);
$mail->addAddress('mail@dreamhomesgypsumdesigns.com');     
$mail->addReplyTo($email);

$mail->isHTML(true); 
$mail->Subject = $subject;
$mail->Body    = $htmlContent;
            
 // Send email
return $mail->send();

}

?>
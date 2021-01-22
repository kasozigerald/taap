<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    
    // Check whether submitted data is not empty
    if(!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['subject'])){
        
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClass = 'errordiv';
        }else{

           if($_POST['subject'] == "Partner Request"){

	            $htmlContent = '<h2>Partnership Request Submitted Details</h2>
                <h4>Name: </h4><p>'.$_POST['name'].'</p>
                <h4>Email: </h4><p>'.$_POST['email'].'</p>
                <h4>Phone: </h4><p>'.$_POST['phone'].'</p>
                <h4>Type of Entity: </h4><p>'.$_POST['entity'].'</p>
                <h4>Organisation Name: </h4><p>'.$_POST['company'].'</p>
                <h4>Website: </h4><p>'.$_POST['website'].'</p>
                <h4>Desired Partnership: </h4><p>'.$_POST['partnership'].'</p>';

              }elseif ($_POST['subject'] == "Join Team") {

                $htmlContent = '<h2>Join Team Request Details</h2>
                <h4>Name: </h4><p>'.$_POST['name'].'</p>
                <h4>Email: </h4><p>'.$_POST['email'].'</p>
                <h4>Phone: </h4><p>'.$_POST['phone'].'</p>
                <h4>Linkedin Link: </h4><p>'.$_POST['linkedin'].'</p>
                <h4>Speciality: </h4><p>'.$_POST['speciality'].'</p>
                <h4>Industry: </h4><p>'.$_POST['industry'].'</p>';

              }elseif($_POST['subject'] == "Signup"){

                $htmlContent = '<h2>Signup Request Details</h2>
                <h4>Name: </h4><p>'.$_POST['name'].'</p>
                <h4>Email: </h4><p>'.$_POST['email'].'</p>
                <h4>Phone: </h4><p>'.$_POST['phone'].'</p>
                <h4>Company: </h4><p>'.$_POST['company'].'</p>
                <h4>Job Title: </h4><p>'.$_POST['job_title'].'</p>
                <h4>Country: </h4><p>'.$_POST['country'].'</p>
                <h4>Extra Information: </h4><p>'.$_POST['message'].'</p>';
              }else{
              	$htmlContent = "";
              }

 require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

 //$mail->SMTPDebug = 4;                              

$mail->isSMTP();                                      
$mail->Host = 'ssl://smtp.googlemail.com';  
$mail->SMTPAuth = true;                               
$mail->Username = 'geracodes49@gmail.com';                 
$mail->Password = '3c$1000b@49';                           
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;                                    

$mail->setFrom($_POST['email']);
$mail->addAddress('mail@dreamhomesgypsumdesigns.com');     
$mail->addReplyTo($_POST['email']);

$mail->isHTML(true); 
$mail->Name = $_POST['name'];
$mail->Subject = $_POST['email'];
$mail->Body    = $htmlContent;
            
            // Send email
            if($mail->send()){
                $statusMsg = 'Your request has been submitted successfully !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Your request submission failed, please try again.'.$mail->ErrorInfo;
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }
}
?>
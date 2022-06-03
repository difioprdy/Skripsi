<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];


    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";


$mail = new PHPMailer();

//smtp settings
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'difio.pradya@gmail.com';                     //SMTP username
$mail->Password   = 'Difio2502';   
$mail->Port   = '465';                            //SMTP password
$mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption


$mail->isHTML(true);                  
$mail->setFrom($email, $name);
$mail->addAddress("difio.pradya@gmail.com");                            
$mail->Subject = ("$email ($subject)");  
$mail->Body = $body;

if($mail->send()){
    $status = "success";
    $response = "Email telah terkirim, terima kasih";
}
else{
    $status = "gagal";
    $response = "Terjadi kendala : <br>" . $mail->ErrorInfo;
}

exit(json_encode(array("status" => $status, "response" => $response)));


}


?>
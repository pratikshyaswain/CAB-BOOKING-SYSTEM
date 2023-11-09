<html>
    <head>
        <style>
            
            </style>
            </head>
            </html>
<?php
session_start();
include "conn.php";
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php';
// function sendemail_verify($email,$name,$verify_token){
//     $mail = new PHPMailer(true);
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'pratikshyaswain224@gmail.com';                     //SMTP username
//     $mail->Password   = 'pratikshya13';                               //SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    // $mail->setFrom('pratikshyaswain224@gmail.com',$name);
    // $mail->addAddress(' $email');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    // $mail->isHTML(true);                                  //Set email format to HTML
    // $mail->Subject = 'Email verification from TRIP UP';
    // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    // $email_template="<h2> You have Registered with TRIP UP<h2>
    // <h5> Verify email address to login<br><br>
    // <a href='http://localhost/login_and_registration/verify-email.php?token=$verify_token'>
    // ";
//     $email->Body=$email_template;
//     $mail->send();
//     echo 'Message has been sent';
// }
// catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }


if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $pwd=$_POST['pwd'];
    $phone=$_POST['phone'];
    // $verify_token=md5(rand());
    // sendemail_verify("$email","$name","$verify_token");
    // echo" sent";

    //email exixts or not

    $check_email_query="SELECT EMAIL FROM traveller WHERE email ='$email' LIMIT 1";
    $check_email_query_run=mysqli_query($conn,$check_email_query);
    if(mysqli_num_rows($check_email_query_run)){
        $_SESSION['status']="Email Id Already Exists!";
        header("Location:register.php");
    }else{
        $query="INSERT INTO traveller( NAME,EMAIL,GENDER,ADDRESS,PASSWORD,PHONE)VALUES('$name','$email','$gender','$address','$pwd','$phone')";
        $query_run=mysqli_query($conn,$query);
        if($query_run){
            // sendemail_verify("$email","$name","$verify_token");
            $_SESSION['status']= "REGISTRATION SUCCESSFUL!";
            header("Location:cab_request.php");
            

        }else{
            $_SESSION['status']="REGISTRATION FAILED";
            header("Location:register.php");
        }
    }
}

?>
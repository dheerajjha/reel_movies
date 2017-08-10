<?php
require 'PHPMailer/PHPMailerAutoload.php';
$to = $_POST['s_id'];
//echo $to;
$to1='';
$pass='';
$flag=0;
$mail = new PHPMailer;
$conn = mysqli_connect("localhost","root","","feedback_system");
$sql = "Select * from student where s_id=$to";
$result = mysqli_query($conn , $sql);
$sql1 = "Select * from faculty where f_id=$to";
$result1 = mysqli_query($conn , $sql1);
if(mysqli_num_rows($result) > 0)
{
	$row=mysqli_fetch_assoc($result);
	$to1 = $row['email_id'];
	$pass = $row['password'];
	$flag=1;
}
else if(mysqli_num_rows($result1) > 0)
{
	$row1=mysqli_fetch_assoc($result1);
	$to1 = $row1['email_id'];
	$pass = $row['password'];
	$flag=1;
}
else
{
	header("location: courseexit.php?invalid_id=true");
}

if($flag==1)
{
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'projects.te2017@gmail.com';                 // SMTP username
$mail->Password = 'tejasdjokovicjuzer';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('projects.te2017@gmail.com', 'Course Exit');
$mail->addAddress($to1);     // Add a recipient
/*$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');*/

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Account Activation';
$mail->Body    = 'Your  password to access the system is: '.$pass.'';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    header("location: courseexit.php?connection_failure=true");
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("location: courseexit.php?invalid_id=false");
}
}
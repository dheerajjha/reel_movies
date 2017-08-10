<?php
session_start();
$conn=mysqli_connect("localhost","root","","feedback_system");
$sql="Select * from student where s_id='".$_SESSION['user_id']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$to      = 'adityac9255@gmail.com'; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Password: Hello
------------------------
 
Login to your account using this password.
 
'; // Our message above including the link
                     
$headers = 'From:feedbacksystem2016@gmail.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email
header('Location: feedbacklogin.php');
?>
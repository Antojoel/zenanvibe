<?php
session_start();
$toEmail = "zenanvibe@gmail.com";
$subject = "Contact Form: You Received New Message";
$content = "Name : " . $_POST['name'] . "\r\n";
$content .= "Email : " . $_POST['email'] . "\r\n";
$content .= "Subject : " . $_POST['subject'] . "\r\n";
$content .= "Message : " . $_POST['message'] . "\r\n";
$mailHeaders = "From: admin@jewelleriesandbeauty.com\r\n";
if (mail($toEmail, $subject, $content, $mailHeaders)) {
    echo "<span style='background:#CFF4FC;color:#6EA5B1;text-align:center;padding:5px;font-size:14px;border:1px solid #6EA5B1;border-radius:5px;'> Your Message Sent Successfully!</span>";
} else {
    echo "<span style='background:#F8D7DA;color:#953B43;text-align:center;padding:5px;font-size:14px;border:1px solid #953B43;border-radius:5px;'> Please try again later!</span>";
}
?>

<?php

if (isset($_SESSION['email'])) {
    $fetchmail = $_SESSION['email'];
} ?>



</php $toEmail=$_POST['email']; $subject="Password Request Received - Jewelleries And Beauty" ; $content="Dear, "
    .$firstname."\r\n"; $content .="Here is your new password! \r\n" ; $content .="Your Registration Details: \r\n" ;
    $content .="Email : " .$_POST["email"]."\r\n"; $content .="Password : " .$password."\r\n"; $content
    .="Please login to the member area at the following URL: \r\n" ; $content
    .="http://jewelleriesandbeauty.com/login/ \r\n" ; $content .="Thank You. \r\n" ;
    $mailHeaders="From: info@jewelleriesandbeauty.com\r\n" ; mail($toEmail, $subject, $content, $mailHeaders);?>
<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $headers = "From: $email"."\r\n";
    }
    if (isset($_POST['subject'])) {
        $subject = $_POST['subject'];
    }
    if (isset($_POST['message'])) {
        $msg ="From: $name".$_POST['message'];
        $msg = wordwrap($msg,70);
    }
    $to = "ahamdany12@gmail.com";
    if (mail($to,$subject,$msg,$headers)) {
    header("location: index.php");
    }
    
}
?>
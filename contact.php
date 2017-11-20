<?php
    if(isset($_POST['submit'])){
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $subject=$_POST['Subject'];
        $phone=$_POST['Phone'];
        $msg=$_POST['Message'];

        $email_to = "paraslal22@gmail.com";
        $email_message .= "Name: ".clean_string($first_name)."\n";
        $email_message .= "Email: ".clean_string($email)."\n";
        $email_message .= "Telephone: ".clean_string($phone)."\n";
        $email_message .= "Comments: ".clean_string($msg)."\n";
        $headers = 'From: '.$email."\r\n".
        mail($email_to, $subject, $email_message, $headers);

    }




?>

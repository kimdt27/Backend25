<?php
$myEmail = "kt@easv.dk";
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "WRONG!!!!";
}elseif (empty($email) || empty($subject) || empty($message)){
    echo "Empty Fields!!!!";
}else{
    $body = "$message\n\n Email: $email";
    mail($myEmail, $subject, $body, "From: $myEmail");
    echo "OK";
}
var_dump(filter_var("k@t@easv.dk", FILTER_VALIDATE_EMAIL));

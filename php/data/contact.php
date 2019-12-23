<?php

#var_dump($_POST['name']);
#var_dump($_GET);

header("Refresh:5; url=register.php");

if(empty($_POST)){
    echo 'ah ah ah! You didnt say the magic word';
    exit;
}

//Validate All Data
$name = '';
$email = '';
$subject = '';
$message = '';
$recipient = 'alec.riddick@gmail.com';

if(isset($_POST['name'])){
    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
}

if(isset($_POST['email'])){
    $email = str_replace(array("\r","\n","%0a","%0d"),'',$_POST['email']);
    $email = filter_var($email,FILTER_VALIDATE_EMAIL);
}

if(isset($_POST['subject'])){
    $subject = filter_var($_POST['subject'],FILTER_SANITIZE_STRING);
}

if(isset($_POST['message'])){
    $message = $_POST['message'];
}

//Send Out Email
$headers = array(
    'From'=>'noreply@riddick-a-portfolio.herokuapp.com', // change domain name to YOUR domain name
    'Reply-To'=>$name.'<'.$email.'>'
);

if(mail($recipient, $subject, $message, $headers)){ // if no domain email, remove $headers and remove the From above
    echo '<p> Thank you for contacting us, '.$name.'</p>';
}else{
    echo '<p>We are sorry but the email did not go through</p>';
}

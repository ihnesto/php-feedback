<?php

//var_dump($_POST);
if (isset($_POST['username']) == true) {
    $username = $_POST['username'];    
} else {
    $username = 'noname';
}

$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];
$ip = $_SERVER['REMOTE_ADDR'];

$link = mysqli_connect('localhost', 'root', '', '24102020');
$sql = "INSERT INTO feedback(username, subject, email, message, ip ) values('$username', '$subject', '$email', '$message', '$ip' )";
$ret = mysqli_query($link, $sql);
if ($ret == false) {
    echo mysqli_error($link);    
}
mysqli_close($link);

echo 'Thanks. Your feedback is saved.';
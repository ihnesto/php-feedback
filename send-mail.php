<?php

//var_dump($_POST);

$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];

mail($to, $subject, $message);

echo "The answer was sent.";

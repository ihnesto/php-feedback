<?php

$id = $_GET['id'];

$link = mysqli_connect('localhost', 'root', '', '24102020');
$sql = "DELETE from feedback WHERE id=$id";
$ret = mysqli_query($link, $sql);
if ($ret == false) {
    echo mysqli_error($link);  
    exit();  
}

mysqli_close($link);

header('Location: admin.php');

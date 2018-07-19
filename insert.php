<?php

include('connect.php');

$name = $POST['name'];
$email = $POST['email'];
$message = $POST['message'];

$sql = "INSERT INTO feedback (name, email, message)";



?>
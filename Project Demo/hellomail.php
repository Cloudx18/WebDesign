<!DOCTYPE html>
<html>
<body>

<h1>Movie Recipt</h1>

<p>Movie Recipt</p>

<?php
$name = $_GET['myname1'];
$to      = $_GET['myemail1'];
$subject = 'Movie Recipt';
$message = "Hi,".$name."These are your tickets.";
$headers = 'From: f31ee@localhost' . "\r\n" .
    'Reply-To: f31ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff31ee@localhost');
echo ("mail sent to : ".$to);
?> 

</body>
</html>

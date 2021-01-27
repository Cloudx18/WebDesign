<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "f31ee", "f31ee", "f31ee");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$movie = mysqli_real_escape_string($link, $_POST['movie']);
$date = mysqli_real_escape_string($link, $_POST['showdate']);
$time = mysqli_real_escape_string($link, $_POST['showtime']);
$quantity = mysqli_real_escape_string($link, $_POST['quantity']);
$firstname = mysqli_real_escape_string($link, $_POST['firstname']);
$lastname = mysqli_real_escape_string($link, $_POST['lastname']);
$mobilenumber = mysqli_real_escape_string($link, $_POST['mobilenumber']);
$email = mysqli_real_escape_string($link, $_POST['email']);

// Attempt insert query execution
$sql = "INSERT INTO moviedata (movie, showdate, showtime, quantity, firstname, lastname, mobilenumber, email) VALUES ('$movie', '$date', '$time', '$quantity', '$firstname', '$lastname', '$mobilenumber', '$email')";
 if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection


$to      = $email;
$subject = 'Movie Recipt';
$message = "Hi,".$firstname." ".$lastname."!"." These are your " .$quantity. " tickets for " .$movie.".";
$headers = 'From: f31ee@localhost' . "\r\n" .
    'Reply-To: f31ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff31ee@localhost');



mysqli_close($link);

header("location:paymentpart2.php"); // redirect user
?>

<?php
$servername = "eklegoshape.dk.mysql";
$username = "eklegoshape_dkmom_db";
$password = "qaz123///";
$dbname = "eklegoshape_dkmom_db";


// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname);  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}  
 $name = $_POST['name']; // required
$email = $_POST['email']; // required

if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/"; 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }

$sql = "INSERT INTO newsletter (name, email)
VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) { 
    $message = "Thank you. We will keep you up to date!";
    echo "<script type='text/javascript'>alert('$message');</script>"; 
    echo "<script type='text/javascript'>window.location = 'http://eklegoshape.dk/MOM/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
 



 
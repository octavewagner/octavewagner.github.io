<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "robertomaillot95@gmail.com";
    $subject = "Message from Portfolio Contact Form";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Envoi de l'e-mail
    if(mail($to, $subject, $body)){
        echo "<p>Your message has been sent successfully. Thank you!</p>";
    } else{
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "post") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "lizorasoftware@gmail.com";
    $subject = "Nieuw contactformulier";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    echo "E-mail is verzonden. Bedankt voor uw bericht!";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $service = $_POST['service'];
    $message = $_POST['message'];
    
    $to = "dennis.mihaltan1234@gmail.com";  // Indirizzo email dove ricevere la richiesta
    $subject = "Nuova richiesta di contatto";
    $body = "Nome: $name\nEmail: $email\nTelefono: $phone\nIndirizzo: $address\nServizio: $service\nMessaggio: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Grazie per averci contattato!";
    } else {
        echo "C'è stato un problema nell'invio della richiesta.";
    }
}
?>

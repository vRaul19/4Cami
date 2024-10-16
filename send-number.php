<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $to = "adresa_ta@mail.com";  // Înlocuiește cu adresa ta de e-mail
    $subject = "Număr primit din formular";
    $message = "Numărul introdus este: " . $number;
    $headers = "From: no-reply@example.com";

    if(mail($to, $subject, $message, $headers)) {
        echo "E-mailul a fost trimis cu succes!";
    } else {
        echo "A apărut o eroare la trimiterea e-mailului.";
    }
}
?>

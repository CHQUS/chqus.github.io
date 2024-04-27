<?php
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

// Destinataire de l'e-mail
$destinataire = "chqusdupontdeligonnes@gmail.com";

// Sujet de l'e-mail
$sujet = "Nouveau message de $nom";

// Corps de l'e-mail
$corps_message = "Nom : $nom\n";
$corps_message .= "Email : $email\n";
$corps_message .= "Message :\n$message";

// En-têtes de l'e-mail
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Envoyer l'e-mail
mail($destinataire, $sujet, $corps_message, $headers);

// Rediriger vers une page de confirmation
header("Location: confirmation.html");
?>

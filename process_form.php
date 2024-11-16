<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et sécuriser les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $objet = htmlspecialchars($_POST['objet']);
    $message = htmlspecialchars($_POST['message']);

    // Adresse email où vous souhaitez recevoir les messages
    $to = "pro.tom.barreux@gmail.com";
    $subject = "Nouveau message de $prenom $nom : $objet";
    $body = "Vous avez reçu un nouveau message :\n\n";
    $body .= "Nom : $nom\n";
    $body .= "Prénom : $prenom\n";
    $body .= "Objet : $objet\n\n";
    $body .= "Message :\n$message\n";

    $headers = "From: noreply@votre-domaine.com\r\n";
    $headers .= "Reply-To: noreply@votre-domaine.com\r\n";

    // Envoyer l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès ! Merci de nous avoir contactés.";
    } else {
        echo "Erreur : le message n'a pas pu être envoyé. Veuillez réessayer plus tard.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>

$to = "pro.tom.barreux@gmail.com";
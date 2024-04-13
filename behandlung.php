<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nettoyer les données soumises
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $age = htmlspecialchars($_POST['age']);
    $city = htmlspecialchars($_POST['city']);
    $code_postal = htmlspecialchars($_POST['code_postal']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $profession = htmlspecialchars($_POST['profession']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars($_POST['phone']);
    $option_escorte = htmlspecialchars($_POST['option_escorte']);
    $date_time = htmlspecialchars($_POST['date_time']);
    $lieu_rencontre = htmlspecialchars($_POST['lieu_rencontre']);
    $duree_tarif = htmlspecialchars($_POST['duree_tarif']);

    // Valider l'adresse e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Construire le message
        $message = "Nom: $nom\n";
        $message .= "Prénom: $prenom\n";
        $message .= "Age: $age\n";
        $message .= "Ville: $city\n";
        $message .= "Code Postal: $code_postal\n";
        $message .= "Adresse: $adresse\n";
        $message .= "Profession: $profession\n";
        $message .= "Email: $email\n";
        $message .= "Téléphone: $telephone\n";
        $message .= "Option d'escorte choisie: $option_escorte\n";
        $message .= "Date et heure du rendez-vous: $date_time\n";
        $message .= "Lieu du rendez-vous: $lieu_rencontre\n";
        $message .= "Durée de rencontre: $duree_tarif";

        // En-têtes du mail
        $headers = "From: $email\r\n";
        $headers .= "Reply-to: $email\r\n";

        // Envoyer le mail de manière plus sécurisée
        $retour = mail("votre@adresse-email.de", "Demande de rendez-vous avec une escorte", $message, $headers);

        // Redirigé vers la page de confirmation
        header("Location:confirm.php");
        exit;       
    } 
    
} else {
    // Si le formulaire n'a pas été soumis
    echo '<p style="font-size: 18px; padding: 5em; font-family:calibri;">Das Formular wurde nicht korrekt eingereicht. Bitte versuchen Sie es erneut. <br>
    <a href="https://votre-site-web.de/#reservation">Zurück zum Formular</a></p>';
}
?>

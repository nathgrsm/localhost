<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinataire = "contact@nathanel.pro";
    $sujet = "Nouveau message via Portfolio";

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nathanel";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Préparation de la requête SQL
        $stmt = $conn->prepare("INSERT INTO messages (nom, email, objet, message) VALUES (:nom, :email, :objet, :message)");

        // Utilisation de bindParam pour associer les valeurs aux paramètres
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $objet = htmlspecialchars($_POST['objet']);
        $message = htmlspecialchars($_POST['message']);

        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':objet', $objet);
        $stmt->bindParam(':message', $message);

        $stmt->execute();

        // Envoi de l'email
        $headers = "From: " . $nom . " <" . $email . ">\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $message_complet = "Vous avez reçu un nouveau message depuis le formulaire de contact de votre site web :\r\n\n";
        $message_complet .= "Nom : " . $nom . "\r\n";
        $message_complet .= "Email : " . $email . "\r\n";
        $message_complet .= "Objet : " . $objet . "\r\n";
        $message_complet .= "Message : " . $message;

        if(mail($destinataire, $sujet, $message_complet, $headers)) {
            echo "success";
        } else {
            echo "error";
        }
    }
    catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    $conn = null;
}
?>
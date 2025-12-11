<?php
// ----- TRAITEMENT DU FORMULAIRE -----
$message_sent = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "ewencst.inf@gmail.com";  // <-- Mets ton mail ici !
    $subject = "Nouveau message depuis le formulaire de contact";
    
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $tel = htmlspecialchars($_POST["tel"]);
    $msg = htmlspecialchars($_POST["message"]);

    $body = "
Nom : $name
Email : $email
Téléphone : $tel

Message :
$msg
";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        $message_sent = true;
    }
}
?>

<?php include 'includes/header.php'; ?>

<main class="flex-grow-1">
    <div class="container py-5">

        <h1 class="text-center mb-5">Me contacter</h1>

        <div class="contact-container d-flex">

            <!-- ==========================
                 PARTIE GAUCHE
                 ========================== -->
            <div class="contact-left w-50 p-4">

                <h2>Mes informations</h2>

                <p><strong>Prénom :</strong> Ewen</p>
                <p><strong>Nom :</strong> COSTE</p>
                <p><strong>Adresse </strong> Le Perreux-sur-Marne (94170)</p>
                <p><strong>Formation :</strong> BTS SIO SISR - STUDI</p>
                <p><strong>LinkedIn :</strong><a href="https://www.linkedin.com/in/ewen-coste-9b42b131b/" target="_blank"> https://www.linkedin.com/in/ewen-coste-9b42b131b/</a></p>
                <p><strong>Téléphone :</strong> 07 89 23 52 89</p>
                <p><strong>Email :</strong> ewencst.inf@gmail.com</p>

                <a class="btn btn-primary mt-3" href="assets\fichier\pdf\cv_inf_ewen.pdf" download>
                    Télécharger mon CV
                </a>

            </div>

            <!-- ==========================
                 PARTIE DROITE : FORMULAIRE
                 ========================== -->
            <div class="contact-right w-50 p-4">

                <?php if ($message_sent): ?>
                    <div class="alert alert-success">
                        Votre message a bien été envoyé !
                    </div>
                <?php endif; ?>

                <h2>Formulaire de contact</h2>

                <form method="POST" action="">
                    
                    <label class="mt-3">Nom complet :</label>
                    <input type="text" name="name" class="form-control" required>

                    <label class="mt-3">Email :</label>
                    <input type="email" name="email" class="form-control" required>

                    <label class="mt-3">Téléphone :</label>
                    <input type="text" name="tel" class="form-control" required>

                    <label class="mt-3">Message :</label>
                    <textarea name="message" class="form-control" required></textarea>

                    <button type="submit" class="btn btn-success mt-4">
                        Envoyer
                    </button>
                </form>

            </div>
        </div>

    </div>
</main>

<?php include 'includes/footer.php'; ?>
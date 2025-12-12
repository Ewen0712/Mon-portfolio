<?php
// ===============================
//   CHARGEMENT DE PHPMailer
// ===============================
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ----- TRAITEMENT DU FORMULAIRE -----
$message_sent = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $prenom = htmlspecialchars($_POST["firstname"]);
    $nom = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $tel = htmlspecialchars($_POST["tel"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $mail = new PHPMailer(true);

    try {
        // ===============================
        //       CONFIGURATION SMTP
        // ===============================
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'ewencst.inf@gmail.com'; // TON MAIL GMAIL
        $mail->Password = 'okmn swxq nuvr jlot'; // MOT DE PASSE D’APPLICATION
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // ===============================
        //     EXPÉDITEUR / DESTINATAIRE
        // ===============================
        $mail->setFrom($email, $prenom . ' ' . $nom);
        $mail->addAddress('ewencst.inf@gmail.com'); // TON MAIL PRO

        // ===============================
        //         CONTENU DU MAIL
        // ===============================
        $mail->Subject = $subject;
        $mail->Body =
"Prénom : $prenom
Nom : $nom
Email : $email
Téléphone : $tel
Objet : $subject

Message :
$message";

        // Envoi
        $mail->send();
        $message_sent = true;

    } catch (Exception $e) {
        echo "Erreur Mailer : " . $mail->ErrorInfo;
    }
}
?>

<?php include 'includes/header.php'; ?>

    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            <!-- ==========================
                PARTIE GAUCHE
                ========================== -->
            <div class="col-md-5 p-5 contact-left">
                <h2>Mes informations</h2>

                <p><strong>Prénom :</strong> Ewen</p>
                <p><strong>Nom :</strong> COSTE</p>
                <p><strong>Adresse :</strong> Le Perreux-sur-Marne (94170)</p>
                <p><strong>Formation :</strong> BTS SIO SISR - STUDI</p>

                <p><strong>LinkedIn :</strong>
                    <a href="https://www.linkedin.com/in/ewen-coste-9b42b131b/" target="_blank">Mon profil LinkedIn</a>
                </p>

                <p><strong>GitHub :</strong>
                    <a href="https://github.com/Ewen0712" target="_blank">Mon GitHub</a>
                </p>

                <p><strong>Téléphone :</strong> 07 89 23 52 89</p>
                <p><strong>Email :</strong> ewencst.inf@gmail.com</p>

                <a class="btn btn-primary mt-3" href="assets/fichier/pdf/cv_inf_ewen.pdf" download>
                    Télécharger mon CV
                </a>
            </div>

            <!-- ==========================
                PARTIE DROITE : FORMULAIRE
                ========================== -->
            <div class="col-md-5 p-4 contact-right">
                <?php if ($message_sent): ?>
                    <div class="alert alert-success">
                        Votre message a bien été envoyé !
                    </div>
                <?php endif; ?>

                <h2>Formulaire de contact</h2>

                <form method="POST" action="">
                    <label class="mt-3">Prénom :</label>
                    <input type="text" name="firstname" class="form-control" required>

                    <label class="mt-3">Nom :</label>
                    <input type="text" name="name" class="form-control" required>

                    <label class="mt-3">Email :</label>
                    <input type="email" name="email" class="form-control" required>

                    <label class="mt-3">Téléphone :</label>
                    <input type="text" name="tel" class="form-control" required>

                    <label class="mt-3">Objet :</label>
                    <input type="text" name="subject" class="form-control" required>

                    <label class="mt-3">Message :</label>
                    <textarea name="message" class="form-control" required></textarea>

                    <button type="submit" class="btn btn-success mt-4">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
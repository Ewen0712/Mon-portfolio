<?php include 'includes/header.php'; ?>

<main class="flex-grow-1">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="mb-3">Mon parcours depuis le BAC</h1>
            <p class="lead fs-5">
                Cliquez sur chaque bulle pour découvrir mon parcours.
            </p>
        </div>

        <div class="timeline-bubbles">
            <div class="bubble-item" data-description="Parmis les différents choix des anciennes options pour le BAC je me suis tourné vers un BACCALAUREAT Scientifique avec la spécialité Science et vie de la terre">
                <div class="bubble">Mon parcours</div>
            </div>
            <div class="bubble-item hidden" data-description="Cette option m'a permis de découvrir les bases de la programmation en python (un langage de programmation que l'on retrouve durant le BTS SIO). C'est durant cette période que j'ai commencé à avoir une grande affinité pour l'informatique en général.">
                <div class="bubble">BAC S SVT</div>
            </div>
            <div class="bubble-item hidden" data-description="Je me suis d'abord lancé dans des études de STAPS après avoir fait un choix entre mes deux passions : le sport et l'informatique. Après l'obtention de la licence Education et motricité, et n'étant plus vraiment intéressés par les débouchés, j'ai opté pour une reconversion en intégrant le BTS SIO SISR de l'école STUDI.">
                <div class="bubble">Licence STAPS EM</div>
            </div>
            <div class="bubble-item hidden" data-description="Ma formation actuelle chez STUDI est une formation 100% en ligne. Elle me permet d'apprendre et de développer de multitude compétences dans des domaines qui me passionnent comme le réseau, la cybersécurité et le développement. Mes examens sont prévu pour mai 2026.">
                <div class="bubble">BTS SIO SISR</div>
            </div>
            <div class="bubble-item hidden" data-description="Mon BTS m'a permis d'intégrer la Société Générale des Techniques afin d'effectuer un stage de 1 mois en entreprise, en tant qu'administrateur système et réseau. Un première expérience qui n'a fait que renforcer mon choix de continuer dans cette voie.">
                <div class="bubble">Stage SGT</div>
            </div>
            <div class="bubble-item hidden" data-description="Actuellement, je suis en alternance au sein de l'entreprise Aprolis qui fait parti du Groupe Monnoyeur. J'occupe le poste de technicien support informatique au siège de l'entreprise se situant à Créteil. ">
                <div class="bubble">Alternance APROLIS</div>
            </div>
        </div>

        <!-- div de description -->
        <div class="bubble-description mt-5 mb-5 text-center"></div>

        <!-- div avenir -->
        <div class="bubble-item hidden mt-5 mb-5 special" data-description="Mon objectif ensuite est d'intégrer une école d'ingénieur Réseaux afin de poursuivre mes études. Je vais aussi chercher une entreprise en parrallèle pour pouvoir continuer ce cursus en alternance. En effet, l'entreprise est un cadre qui me permet d'apprendre beaucoup plus vite, et surtout de pratiquer dans un contexte réel.">
            <div class="bubble">École d'ingénieur</div>
        </div>

        <!-- Description spécifique centrée sous cette bulle -->
        <div class="bubble-description special mt-5 text-center" style="display: none;"></div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
<script src="assets/js/timeline.js"></script>

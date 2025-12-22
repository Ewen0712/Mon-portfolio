<?php include 'includes/header.php'; ?>

<main class="flex-grow-1">
    <!-- Modal pour En savoir plus -->
    <div id="bubble-modal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.7); justify-content:center; align-items:center; z-index:9999;">
        <div style="background:#fff; padding:30px; border-radius:10px; max-width:600px; width:90%; position:relative;">
            <button id="close-modal" style="position:absolute; top:10px; right:10px; border:none; background:none; font-size:1.5rem;">&times;</button>
            <h3 id="modal-title"></h3>
            <p id="modal-description"></p>
            <h5>Compétences acquises :</h5>
            <ul id="modal-skills"></ul>
        </div>
    </div>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="mb-3">Mon parcours depuis le BAC</h1>
            <p class="lead fs-5">
                Cliquez sur chaque bulle pour découvrir mon parcours.
            </p>
        </div>

        <div class="timeline-bubbles">
            <div class="bubble-item" data-description="Parmis les différents choix des anciennes options pour le BAC, je me suis tourné vers un BACCALAUREAT Scientifique avec la spécialité Science et vie de la terre">
                <div class="bubble">Mon parcours</div>
            </div>
            <div class="bubble-item hidden" data-description="Cette option m'a permis de découvrir les bases de la programmation en python (un langage de programmation que l'on retrouve durant le BTS SIO). Durant cette période, j'ai commencé à avoir une grande affinité pour l'informatique.">
                <div class="bubble">BAC S SVT</div>
            </div>
            <div class="bubble-item hidden" data-description="Je me suis d'abord lancé dans des études de STAPS après avoir fait un choix entre mes deux passions : le sport et l'informatique. Suite à l'obtention de la licence éducation et motricité, j'ai opté pour une reconversion dans le domaine de l'informatique en intégrant le BTS SIO SISR de l'école STUDI.">
                <div class="bubble">Licence STAPS EM</div>
            </div>
            <div class="bubble-item hidden" data-description="Ma formation actuelle chez STUDI est une formation 100% en ligne. Elle me permet d'apprendre et de développer de multiple compétences dans des domaines qui m'animent comme le réseau, la cybersécurité et le développement."
                data-modal-title="Compétences acquises"
                data-skills="Raisonnement scientifique, Méthodologie, Analyse de données"
                data-has-modal="true">
                <div class="bubble">BTS SIO SISR</div>
            </div>
            <div class="bubble-item hidden" data-description="Mon BTS m'a permis d'effectuer un stage de 1 mois au sein de la Société Générale des Techniques, en tant qu'administrateur système et réseau. Une première expérience qui a renforcé mon choix de poursuivre dans cette voie."
                data-modal-title="Compétences acquises"
                data-skills="Raisonnement scientifique, Méthodologie, Analyse de données"
                data-has-modal="true">
                <div class="bubble">Stage SGT</div>
            </div>
            <div class="bubble-item hidden" data-description="Actuellement, je suis en alternance au sein de l'entreprise Aprolis, qui fait partie du Groupe Monnoyeur. J’occupe le poste de technicien support informatique au siège de l’entreprise à Créteil. Je me suis bien intégré au sein de l'équipe support et je prends beaucoup de plaisir à évoluer dans cette alternance."
                data-modal-title="Compétences acquises"
                data-skills="Raisonnement scientifique, Méthodologie, Analyse de données"
                data-has-modal="true">
                <div class="bubble">Alternance APROLIS</div>
            </div>
        </div>

        <!-- div de description -->
        <div class="bubble-description mt-5 mb-5 text-center"></div>

        <!-- div avenir -->
        <div class="timeline-bubbles special-bubbles mt-5 mb-5">
            <div class="bubble-item hidden mt-5 mb-5 special" data-description="Mon objectif à terme est d’intégrer une école d’ingénieur spécialisée en réseaux pour poursuivre mes études. Parallèlement, je prévois de rechercher une entreprise afin de continuer mon cursus en alternance."
            data-modal-title="Prérequis"
            data-skills="Raisonnement scientifique, Méthodologie, Analyse de données"
            data-has-modal="true">
                <div class="bubble">École d'ingénieur</div>
            </div>
            <div class="bubble-item hidden mt-5 mb-5 special" data-description="Mon objectif à terme est d’intégrer une école d’ingénieur spécialisée en réseaux pour poursuivre mes études. Parallèlement, je prévois de rechercher une entreprise afin de continuer mon cursus en alternance."
            data-modal-title="Prérequis"
            data-skills="Raisonnement scientifique, Méthodologie, Analyse de données"
            data-has-modal="true">
                <div class="bubble">Bachelor ou Licence + Master</div>
            </div>
        </div>
        <!-- Description spécifique centrée sous cette bulle -->
        <div class="bubble-description special mt-5 text-center" style="display: none;"></div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
<script src="assets/js/timeline.js"></script>

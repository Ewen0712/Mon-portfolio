<?php include 'includes/header.php'; ?>

<main class="flex-grow-1">
    <div class="container mt-7 py-5">

        <div class="text-center mb-5">
            <h1 class="mb-3">À propos du BTS SIO</h1>
            <p class="lead fs-3 fw-bold">
                Découvrez mon parcours et la formation qui m’a permis de développer mes compétences.
            </p>
        </div>

        <div class="accordion" id="faqBTS">
            
            <!-- Question 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Qu'est-ce que le BTS SIO ?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqBTS">
                    <div class="accordion-body fs-6">
                        Le BTS SIO (Services Informatiques aux Organisations) a été créé à la rentrée 2011 et remplace le BTS "Informatique de Gestion". 
                        Le but : former en deux ans des étudiants à la mise en place de solutions informatiques dans les entreprises et les administrations.
                        <br><br>
                        Ce BTS comprend deux options : SISR et SLAM. L'étudiant doit réaliser deux stages (durée totale : 10 semaines).
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Quels sont les pré-requis pour accéder au BTS SIO ?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqBTS">
                    <div class="accordion-body fs-6">
                        L'accès est ouvert aux titulaires des Bacs STG, S, STI, ES (avec bon niveau en maths) ou Bac Pro SEN. 
                        L'admission se fait après étude du dossier et entretien. Il faut une bonne culture technologique, 
                        faculté d'adaptation et sens de la relation humaine.
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Quelle est la différence avec l’ancien BTS "Informatique de Gestion" ?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqBTS">
                    <div class="accordion-body fs-6">
                        Les technologies de l’information ont beaucoup évolué. Les entreprises ont besoin de techniciens informatiques formés à l'approche "services" plutôt qu'à la seule approche "gestion". 
                        Le BTS SIO a été créé pour répondre à ce besoin.
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Quelle option choisir ?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqBTS">
                    <div class="accordion-body fs-6">
                        L'option SISR : installer, administrer et gérer la maintenance des équipements informatiques. <br>
                        L'option SLAM : concevoir des programmes et solutions logicielles pour la gestion d’une organisation.
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Dois-je faire le BTS SIO par alternance ?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqBTS">
                    <div class="accordion-body fs-6">
                        L'alternance présente deux avantages : la formation est gratuite et rémunérée, et l’étudiant obtient deux années d’expérience professionnelle à valoriser sur son CV.
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
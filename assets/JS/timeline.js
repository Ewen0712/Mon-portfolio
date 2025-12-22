const bubbles = document.querySelectorAll('.bubble-item');
const mainDescription = document.querySelector('.bubble-description:not(.special)');
const specialDescription = document.querySelector('.bubble-description.special');

// Créer le modal dynamiquement si pas déjà présent
let modal = document.getElementById('bubble-modal');
if (!modal) {
    modal = document.createElement('div');
    modal.id = 'bubble-modal';
    modal.style.cssText = `
        display:none; position:fixed; top:0; left:0; width:100%; height:100%;
        background:rgba(0,0,0,0.7); justify-content:center; align-items:center; z-index:9999;
    `;
    modal.innerHTML = `
        <div style="background:#fff; padding:30px; border-radius:10px; max-width:600px; width:90%; position:relative;">
            <button id="close-modal" style="position:absolute; top:10px; right:10px; border:none; background:none; font-size:1.5rem;">&times;</button>
            <h3 id="modal-title"></h3>
            <p id="modal-description"></p>
            <h5>Compétences acquises :</h5>
            <ul id="modal-skills"></ul>
        </div>
    `;
    document.body.appendChild(modal);
}

const modalTitle = document.getElementById('modal-title');
const modalDescription = document.getElementById('modal-description');
const modalSkills = document.getElementById('modal-skills');
const closeModal = document.getElementById('close-modal');

// Fonction pour ouvrir le modal
function openModal(bubble) {
    modal.style.display = 'flex';
    modalTitle.textContent = bubble.querySelector('.bubble').textContent;

    // Titre différent selon la bulle
    const modalHeader = bubble.dataset.modalTitle || "Compétences acquises";

    // Ajouter le titre sous forme de <h5>
    const h5 = modal.querySelector('h5');
    h5.textContent = modalHeader;

    // Contenu de la liste
    const skills = bubble.dataset.skills ? bubble.dataset.skills.split(',') : [];
    modalSkills.innerHTML = '';
    skills.forEach(skill => {
        const li = document.createElement('li');
        li.textContent = skill.trim();
        modalSkills.appendChild(li);
    });
}

// Fermer le modal
closeModal.addEventListener('click', () => {
    modal.style.display = 'none';
});

bubbles.forEach((bubble, index) => {
    bubble.addEventListener('click', () => {

        // Toutes les bulles passent en "hidden" (état en attente)
        bubbles.forEach(b => {
            b.classList.add('hidden');
            b.classList.remove('active');
        });

        // La bulle cliquée devient active
        bubble.classList.add('active');
        bubble.classList.remove('hidden');

        // Cacher descriptions
        mainDescription.style.opacity = 0;
        mainDescription.style.maxHeight = '0px';
        specialDescription.style.opacity = 0;
        specialDescription.style.maxHeight = '0px';

        setTimeout(() => {
            const descContainer = bubble.classList.contains('special') ? specialDescription : mainDescription;

            descContainer.textContent = bubble.dataset.description;

            if (bubble.dataset.hasModal === "true") {
                const btn = document.createElement('button');
                btn.textContent = "En savoir plus...";
                btn.className = "btn btn-info mt-3";
                descContainer.appendChild(btn);

                btn.addEventListener('click', () => openModal(bubble));
            }

            // Afficher la description
            descContainer.style.display = 'flex';
            descContainer.style.opacity = 1;
            descContainer.style.maxHeight = descContainer.scrollHeight + 'px';
        }, 300);

        // Dévoiler la bulle suivante (elle reste visible mais atténuée)
        const nextBubble = bubbles[index + 1];
        if (nextBubble) nextBubble.classList.remove('hidden'); // visible mais en attente
    });
});

// Initialiser la première bulle
bubbles.forEach(b => b.classList.add('hidden')); // toutes en attente
bubbles[0].classList.remove('hidden');           // première visible
bubbles[0].classList.add('active');              // première active
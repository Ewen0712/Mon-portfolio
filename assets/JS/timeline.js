const bubbles = document.querySelectorAll('.bubble-item');
const mainDescription = document.querySelector('.bubble-description:not(.special)');
const specialDescription = document.querySelector('.bubble-description.special');

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
            if (bubble.classList.contains('special')) {
                specialDescription.textContent = bubble.dataset.description;
                specialDescription.style.display = 'flex';
                specialDescription.style.opacity = 1;
                specialDescription.style.maxHeight = specialDescription.scrollHeight + 'px';
            } else {
                mainDescription.textContent = bubble.dataset.description;
                mainDescription.style.display = 'flex';
                mainDescription.style.opacity = 1;
                mainDescription.style.maxHeight = mainDescription.scrollHeight + 'px';
            }
        }, 500);

        // Dévoiler la bulle suivante (elle reste visible mais atténuée)
        const nextBubble = bubbles[index + 1];
        if (nextBubble) {
            nextBubble.classList.remove('hidden'); // au moins visible
        }
    });
});

// Initialiser la première bulle
bubbles.forEach(b => b.classList.add('hidden')); // toutes en attente
bubbles[0].classList.remove('hidden');           // première visible
bubbles[0].classList.add('active');              // première active
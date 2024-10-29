// Sélectionnez les éléments importants
const inner = document.querySelector(".wrapper .inner");
const buttons = document.querySelectorAll(".map button");

// Fonction pour afficher le groupe d'images correspondant
function showSlideGroup(groupIndex) {
    // Largeur d'un "groupe" de cartes (ajustez selon le nombre d'images visibles)
    const groupWidth = 3 * 280; // ajustez la largeur d'une carte si nécessaire
    const offset = -groupIndex * groupWidth;

    // Déplace le wrapper pour montrer le groupe de cartes voulu
    inner.style.transform = `translateX(${offset}px)`;

    // Met à jour les boutons pour afficher l'état actif
    buttons.forEach(button => button.classList.remove("active"));
    buttons[groupIndex].classList.add("active");
}

// Initialiser pour montrer le premier groupe d'images au chargement
showSlideGroup(0);


let currentImageIndex = 0;
const images = document.querySelectorAll(".card img");
const lightbox = document.getElementById("lightbox");
const lightboxImg = document.getElementById("lightbox-img");

// Ouvrir la lightbox pour une image spécifique
function openLightbox(index) {
    currentImageIndex = index;
    lightboxImg.src = images[currentImageIndex].src;
    lightbox.style.display = "flex";
}

// Fermer la lightbox
function closeLightbox() {
    lightbox.style.display = "none";
}

// Changer l'image (navigation dans la lightbox)
function changeImage(direction) {
    currentImageIndex += direction;
    if (currentImageIndex < 0) {
        currentImageIndex = images.length - 1;
    } else if (currentImageIndex >= images.length) {
        currentImageIndex = 0;
    }
    lightboxImg.src = images[currentImageIndex].src;
}

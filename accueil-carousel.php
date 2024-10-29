<div class="center">
    <div class="wrapper">
        <div class="inner">
            <div class="card">
                <img src="IMG/elephants1.jpg" alt="Elephant 1" onclick="openLightbox(0)">
            </div>
            <div class="card">
                <img src="IMG/elephants2.jpg" alt="Elephant 2" onclick="openLightbox(1)">
            </div>
            <div class="card">
                <img src="IMG/elephants3.jpg" alt="Elephant 3" onclick="openLightbox(2)">
            </div>
            <div class="card">
                <img src="IMG/elephants4.jpg" alt="Elephant 4" onclick="openLightbox(3)">
            </div>
            <div class="card">
                <img src="IMG/elephants5.jpg" alt="Elephant 5" onclick="openLightbox(4)">
            </div>
            <div class="card">
                <img src="IMG/elephants6.jpg" alt="Elephant 6" onclick="openLightbox(5)">
            </div>
        </div>
    </div>

    <!-- Boutons de navigation pour changer les groupes d'images -->
    <div class="map">
        <button class="active first" onclick="showSlideGroup(0)"></button>
        <button class="second" onclick="showSlideGroup(1)"></button>
    </div>
</div>

<!-- Lightbox modal -->
<div id="lightbox" class="lightbox">
    <span class="close" onclick="closeLightbox()">&times;</span>
    <img class="lightbox-content" id="lightbox-img">
    <span class="prev" onclick="changeImage(-1)">&#10094;</span>
    <span class="next" onclick="changeImage(1)">&#10095;</span>
</div>
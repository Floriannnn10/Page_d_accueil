<?php include 'header.php' ?>
<div class="container-fluid" id="contenu">
        <div class="row">
            <div class="col colonne1">
                <h3>Capitaine</h3>
                <h1>
                    FRANCK <br />
                    KESSIE
                </h1>
                <div class="drapci">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="chiffre">
                    <h1>08</h1>
                </div>
            </div>
            <div class="col colonne2">
                <img src="img/kessie.png" alt="Kessié" data-aos="zoom-in-up">
            </div>
        </div>
    </div>
    
    <!-- Conteneur des cartes, positionné juste au-dessus de la div apropos -->
    <div class="cardContainer" style="position: relative; display: flex; justify-content: flex-end; margin-top: -20px;">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="img/img1.jpeg" class="img-fluid rounded-start" alt="..." />
                </div>
                <div class="col-md-6" style="background-color: orangered">
                    <div class="card-body">
                        <h5 class="card-title">Les éléphants</h5>
                        <h4><a href="#" style="color: white; text-decoration: none; font-weight: bold;">Membres de l'équipe.</a></h4>
                        <div class="drapci">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="img/img2.jpeg" class="img-fluid rounded-start" alt="..." />
                </div>
                <div class="col-md-6" style="background-color: orangered">
                    <div class="card-body">
                        <h5 class="card-title">Les éléphants</h5>
                        <h4><a href="#" style="color: white; text-decoration: none; font-weight: bold;">Equipes technique.</a></h4>
                        <div class="drapci">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="apropos">
        <h1>
            À PROPOS
        </h1>

        <div class="text">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, deleniti <br>
            perspiciatis voluptates temporibus perferendis praesentium, quis tempore laboriosam <br>
            unde officiis magni? Recusandae placeat perferendis nihil sequi suscipit hic quas magni <br>
            dolor! Laboriosam nihil provident cumque tempore nobis quo laudantium dolore beatae <br>
            corrupti eius! Non, sed molestiae corrupti quam laborum asperiores culpa illo quod <br>
            modi consequuntur magnam iusto omnis ratione. Reiciendis, quidem. Possimus fugit <br>
            dolorem ad, nam harum aut cumque ipsa.
        </p>

        <button>
            VOIR PLUS
        </button>
        </div>
        
    </div>
    <div class="container">
        
        <?php include 'accueil-actualite.php' ?>
        
        <hr>
        <?php include 'accueil-historique.php' ?>

    </div>
<?php include 'footer.php' ?>

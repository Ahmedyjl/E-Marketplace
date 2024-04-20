<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require("PHP config/connexion.php");
//require("PHP config/commandes.php");
?>


<!DOCTYPE html>
<html lang="en">     
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/63311a25ac.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="E-Marketplace.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>E-Maketplace</title>
</head>
<body>
    <section id="head">
        <div class="flex">
            <div class="logo"> <a href="E-Marketplace.php"><h1>E-Marketplace</h1></a></div>
            <div class="logoo"> <a href="E-Marketplace.php"><h3>E-Marketplace</h3></a></div>

            <form method="GET">
              <div class="recherche"> 
                <input type="search" id="search" name="tivash" class="form-control recherche-input" placeholder="🔍Recherche"> 
                <button type="submit" name="Rechercher">Rechercher</button>
              </div>  
            </form> 
            


            <div class="mini-nav">
              <?php
              session_start();
              if (isset($_SESSION['fheIIUIftyutAQS321'])) {
                echo '<div class="user-container">';
                $bonjour = $bdd->prepare("SELECT prenom FROM Inscription WHERE email = ?");
                $bonjour->execute(array($_SESSION['fheIIUIftyutAQS321']));             //pourquoi je peux pas avec $email
                $data = $bonjour->fetch(PDO::FETCH_ASSOC);
                $bonjour->closeCursor();
                //$loginM = userConnexion($email, $Mdp);
                //loginP = userInscription($nom,$prenom,$email,$Mdp,$confirmMdp);

                echo "<h3>Bonjour " . $data['prenom'] . "</h3>";   /*echo "<h3>Bonjour " . <?= $loginM-> Mdp?> . "</h3>";*/    /*echo "<h3>Bonjour " . <?= $loginP-> prenom?> . "</h3>";*/
                echo '</div>';
                echo '<div class="logo-container">';
                echo ' <a href="admin/Déconnexion.php"><i class="far fa-user"></i></a>';
                echo ' <p>Déconnexion</p>';
                echo '</div>';
              } else {
                echo '<div class="logo-container">';
                echo ' <a href="admin/Formulaire d\'Inscription et de Connexion.php"><i class="far fa-user"></i></a>';
                echo ' <p>Connexion</p>';
                echo '</div>';
              }
              ?>
              <div class="logo-container">
                <a href="#"><i class="far fa-heart"></i></a>
                <p>Favoris</p>
              </div>
              
              <div class="logo-container">
                <a href="#"><i class="fa fa-shopping-bag"></i></a>
                <p>Panier</p>
              </div>
            </div>

            <div class="mini-navv"> <a href="admin/Formulaire d'Inscription et de Connexion.php"><i class="far fa-user"></i></a> <a href="UTF"><i class="far fa-heart"></i></a> <a href="UTF"><i class="fa fa-shopping-bag"></i></a></div>
        </div>       
    </section>


    <section id="nav">
        <div class="barre">
            <ul>
                <a href="Voitures.html"><li class="Catégories"><h4>Voitures</h4></li></a>
                <a href="Multimédia.php"><li class="Catégories"><h4>Multimédia</h4></li></a>
                <a href="UTF"><li class="Catégories"><h4>Sport</h4></li></a>
                <a href="UTF"><li class="Catégories"><h4>Ameublements</h4></li></a>
                <a href="UTF"><li class="Catégories"><h4>Vêtements</h4></li></a>             
            </ul>
        </div>
    </section>


    <section id="Top-annonces">   
      <h2>Top annonces</h2>     
    </section>


    <section id="home">
      <div class="flex">
        <div class="audi-r8-2022">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="UTF"><img src="images/audi-r8-2022.jpg" class="d-block w-100"></a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Audi R8 2022</h5>
                      <p>Prix: 230000€</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a href="UTF"><img src="images/fr-qled-tv-black.jpg" class="d-block w-100"></a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>TV NEO QLED 75QN900B 2022</h5>
                      <p>Prix: 7000€</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a href="UTF"><img src="images/Canapé-5-places.jpg" class="d-block w-100"></a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Canapé d'angle convertible réversible 5 places</h5>
                      <p>Prix : 900€</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div> 
        </div>         
      </div> 
    </section>


<footer>
  <div class="footerEnNoir">
    <div class = "tailleBlocFooter">
      <h5>À PROPOS</h5>
      <h6>Fonctionnement du site</h6>
      <h6>Qui sommes nous?</h6>
      <h6>Nous rejoindre</h6>
      <h6>Developpement durable</h6>
    </div>

    <div class = "tailleBlocFooter">
      <h5>SERVICE CLIENT</h5>
      <h6>Nous contacter</h6>
      <h6>Suivre ma commande</h6>
      <h6>Retours produits</h6>
      <h6>Centre d'aide</h6>
      <h6>Expédition et livraison</h6>
      <h6>Mode de paiement</h6>
    </div>

    <div class = "tailleBlocFooter">
      <h5>INFORMATIONS LÉGALES</h5></a>
      <a href="Informations légales/CGV.html"><h6>Conditions générales de vente</h6></a>
      <a href="Informations légales/PolitiqueDeConfidentialité.html"><h6>Politique de confidentialité</h6></a>
      <h6>Paramètres des cookies</h6>
      <h6>Accessibilité</h6>
      <h6>Avis utilisateurs</h6>
      <h6>Décisions de justice</h6>
    </div>

    <div class = "blocServicesFooter">
      <ul class="liste media">
        <li><a href="#"><img src="images/twiter.jpeg"></a><span class="text">Twitter</span></li>
        <li><a href="#"><img src="images/instagram.jpeg"></a><span class="text">Instagram</span></li>
        <li><a href="#"><img src="images/facebook.jpeg"></a><span class="text">Facebook</span></li>
        <li><a href="#"><img src="images/youtube.jpeg"></a><span class="text">Youtube</span></li>
      </ul>
    </div>
  </div>
</footer>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

    
</body> 
</html>
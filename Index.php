<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Ekip.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid">
            <!-- Wander reste toujours à gauche -->
            <a class="navbar-brand site-name" href="#">Wander</a>

            <!-- Bouton burger (menus repliés en mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menus au centre -->
            <div class="collapse navbar-collapse justify-content-center " id="navbarContent">
                <ul class="navbar-nav">
                    <!-- Menu Femme -->
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="femmeDropdown" role="button"
                            data-bs-toggle="dropdown">
                            Femme
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Index.html">Accueil</a></li>
                            <li><a class="dropdown-item" href="Produits.html">Produits</a></li>
                            <li><a class="dropdown-item" href="Contact.html">Contact</a></li>
                        </ul>
                    </li>
                    <!-- Menu Homme -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="hommeDropdown" role="button"
                            data-bs-toggle="dropdown">
                            Homme
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Index.html">Accueil</a></li>
                            <li><a class="dropdown-item" href="Produits.html">Produits</a></li>
                            <li><a class="dropdown-item" href="Contact.html">Contact</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Logos à droite -->
            <div class="navbar-icons ms-auto">
                <i class="fas fa-search"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container text-center">
            <h1 class="hero-title">Wander</h1>
            <p class="hero-subtitle mt-4">Explorez l’élégance et la liberté</p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-outline-light me-2">Télécharger</a>
                <a href="#" class="btn btn-warning">Découvrir</a>
            </div>
        </div>
    </section>



    <!-- Section Femmes -->
    <section class="py-5 bg-dark">
        <div class="container">
            <!-- Titre principal -->
            <div class="text-center mb-4 section-title">
                <h2 class="fw-bold text-uppercase">Meilleurs Marques</h2>
            </div>

            <!-- Sous-titre femmes -->
            <div class="text-center mb-5 mt-5">
                <h2 class="fw-bold text-white">Pour les femmes</h2>
                <p class="text-muted">Une sélection élégante et premium</p>
            </div>

            <!-- Grille des produits femmes -->
            <div class="row g-4">
                <!-- Produit Femme 1 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card p-3">
                        <img src="EKIP04.png" class="img-fluid mb-3" alt="Produit">
                        <h5 class="text-white">Produit Premium</h5>
                        <p class="text-muted">Description élégante du produit.</p>
                        <button class="btn btn-outline-light">Acheter</button>
                    </div>
                </div>

                <!-- Produit Femme 2 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card p-3">
                        <img src="EKIP5.png" class="img-fluid mb-3" alt="Produit">
                        <h5 class="text-white">Produit Premium</h5>
                        <p class="text-muted">Description élégante du produit.</p>
                        <button class="btn btn-outline-light">Acheter</button>
                    </div>
                </div>

                <!-- Produit Femme 3 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card p-3">
                        <img src="EKIP3.jpg" class="img-fluid mb-3" alt="Produit">
                        <h5 class="text-white">Produit Premium</h5>
                        <p class="text-muted">Description élégante du produit.</p>
                        <button class="btn btn-outline-light">Acheter</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Hommes -->
    <section class="py-5 bg-dark">
        <div class="container">

            <!-- Sous-titre hommes -->
            <div class="text-center mb-5">
                <h2 class="fw-bold text-white">Pour les hommes</h2>
                <p class="text-muted">Découvrez notre collection masculine premium</p>
            </div>

            <!-- Grille des produits hommes -->
            <div class="row g-4">
                <!-- Produit Homme 1 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card p-3">
                        <img src="EKIP3.jpg" class="img-fluid mb-3" alt="Produit">
                        <h5 class="text-white">Produit Premium</h5>
                        <p class="text-muted">Description élégante du produit.</p>
                        <button class="btn btn-outline-light">Acheter</button>
                    </div>
                </div>

                <!-- Produit Homme 2 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card p-3">
                        <img src="EKIP5.png" class="img-fluid mb-3" alt="Produit">
                        <h5 class="text-white">Produit Premium</h5>
                        <p class="text-muted">Description élégante du produit.</p>
                        <button class="btn btn-outline-light">Acheter</button>
                    </div>
                </div>

                <!-- Produit Homme 3 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card p-3">
                        <img src="EKIP3.jpg" class="img-fluid mb-3" alt="Produit">
                        <h5 class="text-white">Produit Premium</h5>
                        <p class="text-muted">Description élégante du produit.</p>
                        <button class="btn btn-outline-light">Acheter</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews py-5">
        <div class="container">
            <h2 class="text-center mb-5 section-title">Avis des Clients</h2>
            <div class="row justify-content-center">

                <!-- Avis 1 -->
                <div class="col-md-5 mb-4">
                    <div class="review-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="user.jpg" class="avatar me-3" alt="avatar">
                            <div>
                                <h6 class="mb-0">Stone D.Kabongo</h6>
                                <small class="review-date">Le 3 septembre 2023</small>
                            </div>
                        </div>
                        <p class="review-text">Produits élégants et service impeccable. Je recommande vivement Wander !
                        </p>
                    </div>
                </div>

                <!-- Avis 2 -->
                <div class="col-md-5 mb-4">
                    <div class="review-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="user.jpg" class="avatar me-3" alt="avatar">
                            <div>
                                <h6 class="mb-0">Prodige I.Kabungwe</h6>
                                <small class="review-date">il y'a 26 minutes</small>
                            </div>
                        </div>
                        <p class="review-text">La qualité est au rendez-vous, et la livraison rapide. Très satisfait !
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contact py-5">
        <div class="container">
            <h2 class="text-center mb-5 section-title">Contactez‑nous</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form class="contact-form p-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Votre nom">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Votre email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Votre message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-contact">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer py-5">
        <div class="container">
            <div class="row">

                <!-- À propos -->
                <div class="col-md-3 mb-4">
                    <h5 class="footer-title">À propos de nous</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                </div>

                <!-- Nos produits -->
                <div class="col-md-3 mb-4">
                    <h5 class="footer-title">Nos Produits</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Femmes</a></li>
                        <li><a href="#">Hommes</a></li>
                    </ul>
                </div>

                <!-- Liens rapides -->
                <div class="col-md-3 mb-4">
                    <h5 class="footer-title">Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li><a href="Index.html">Accueil</a></li>
                        <li><a href="Produits.html">Produits</a></li>
                        <li><a href="Contact.html">Contact</a></li>
                    </ul>
                </div>

                <!-- Nous contacter -->
                <div class="col-md-3 mb-4">
                    <h5 class="footer-title">Nous Contacter</h5>
                    <ul class="list-unstyled">
                        <li>123 Avenue du Commerce</li>
                        <li>Congo</li>
                        <li>+243 000 000 000</li>
                        <li><a href="mailto:info@wander.com">info@wander.com</a></li>
                    </ul>
                </div>

            </div>

            <footer class="text-center py-3">
                <hr class="footer-line">
                <p>Tous droits réservés</p>
            </footer>
        </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
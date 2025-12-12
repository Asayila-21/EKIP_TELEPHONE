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

    <section class="py-5 bg-dark">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-uppercase" style="color:#d4af37;">Nos produits</h2>
        </div>
        <div class="container">
            <!-- Titre de section -->
            <div class="text-center mb-5">
                <h2 class="fw-bold text-white">Pour les femmes</h2>
                <p class="text-muted">Découvrez notre sélection feminine premium</p>
            </div>
            <div class="row g-4">
                <!-- Produit Femme 1 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP04.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit Femme 2 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP3.jpg" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit Femme 3 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP5.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit Femme 4 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP3.jpg" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produit Femme 5 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP5.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit Femme 6 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="034EKIP.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="py-5 bg-dark">
        <div class="container">
            <!-- Titre de section hommes -->
            <div class="text-center mb-5">
                <h2 class="fw-bold text-white">Pour les hommes</h2>
                <p class="text-muted">Découvrez notre collection masculine premium</p>
            </div>

            <!-- Grille des produits hommes -->
            <div class="row g-4">
                <!-- Produit Femme 1 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP04.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit Femme 2 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP5.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit Femme 3 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="034EKIP.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produit Femme 4 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP3.jpg" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit Femme 5 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP3.jpg" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produit Femme 6 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP5.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark">
        <div class="container">
            <!-- Titre de section hommes -->
            <div class="text-center mb-5">
                <h2 class="fw-bold text-white">Basket Pour les femmes</h2>
                <p class="text-muted">Découvrez notre collection masculine premium</p>
            </div>

            <!-- Grille des produits hommes -->
            <div class="row g-4">
                <!-- Produit Femme 1 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP3.jpg" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produit Femme 2 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="034EKIP.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit Femme 3 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP5.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Titre de section hommes -->
                <div class="text-center ">
                    <h2 class="fw-bold text-white mt-5">Basket Pour les hommes</h2>
                    <p class="text-muted">Découvrez notre collection masculine premium</p>
                </div>

                <!-- Produit Femme 4 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP5.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produit Femme 5 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="034EKIP.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produit Femme 6 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP3.jpg" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark">
        <div class="container">
            <!-- Titre de section hommes -->
            <div class="text-center mb-5">
                <h2 class="fw-bold text-white">Basket Pour les hommes</h2>
                <p class="text-muted">Découvrez notre collection masculine premium</p>
            </div>

            <!-- Grille des produits hommes -->
            <div class="row g-4">
                <!-- Produit Femme 1 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP5.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produit Femme 2 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="034EKIP.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produit Femme 3 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP5.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit Femme 4 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP04.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit Femme 5 -->
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP5.png" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit Femme 6 -->

                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="EKIP3.jpg" alt="Produit" class="img-fluid">
                        <div class="card-body">
                            <h6 class="brand-name">Marque: Nike</h6>
                            <p class="description">Chaussures premium pour un style élégant et moderne.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning">Acheter</button>
                                <button class="btn btn-outline-light">120 $</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="buy-section py-5">
        <div class="container">
            <h2 class="text-center text-gold mb-4">Acheter un produit</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form class="buy-form p-4">
                        <div class="mb-3">
                            <label for="articleName" class="form-label">Nom de l'article</label>
                            <input type="text" class="form-control" id="articleName"
                                placeholder="Ex: Chaussures Premium">
                        </div>
                        <div class="mb-3">
                            <label for="articlePrice" class="form-label">Prix de l'article</label>
                            <input type="number" class="form-control" id="articlePrice" placeholder="Ex: 120">
                        </div>
                        <div class="mb-3">
                            <label for="payment" class="form-label">Moyen de paiement</label>
                            <select class="form-control" id="payment">
                                <option value="">-- Sélectionnez --</option>
                                <option value="card">Carte bancaire</option>
                                <option value="paypal">PayPal</option>
                                <option value="mobile">Mobile Money</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-warning w-100">Valider l'achat</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer2 py-5">
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
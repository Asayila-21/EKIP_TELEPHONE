<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conctact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Ekip.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Wander</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <!-- Lien normal -->
                    <li class="nav-item">
                        <a class="nav-link active" href="Index.html">Accueil</a>
                    </li>

                    <!-- Dropdown Contact -->
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="contactDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Contact
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="contactDropdown">
                            <li><a class="dropdown-item" href="#">Email</a></li>
                            <li><a class="dropdown-item" href="#">Téléphone</a></li>
                            <li><a class="dropdown-item" href="#">Adresse</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Logos à droite -->
        <div class="navbar-icons ms-auto">
            <i class="fas fa-search"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-pinterest-p"></i>
        </div>
    </nav>


    <section class="team-section py-5">
        <div class="container">
            <h2 class="text-center text-gold mb-5">Notre Équipe</h2>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-3 mb-4">
                    <div class="team-card">
                        <img src="user.jpg" alt="Membre 1" class="img-fluid">
                        <div class="card-body text-center">
                            <h5 class="member-name">Ephraim J.Kabongo</h5>
                            <p class="member-role">CEO</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3 mb-4">
                    <div class="team-card">
                        <img src="user.jpg" alt="Membre 2" class="img-fluid">
                        <div class="card-body text-center">
                            <h5 class="member-name">Jude M.Molongi</h5>
                            <p class="member-role">Designer</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3 mb-4">
                    <div class="team-card">
                        <img src="user.jpg" alt="Membre 3" class="img-fluid">
                        <div class="card-body text-center">
                            <h5 class="member-name">Jude M.Luyindula</h5>
                            <p class="member-role">Finance</p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-3 mb-4">
                    <div class="team-card">
                        <img src="user.jpg" alt="Membre 4" class="img-fluid">
                        <div class="card-body text-center">
                            <h5 class="member-name">Ryan A.Munkhiel</h5>
                            <p class="member-role">Marketing</p>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-3 mb-4">
                    <div class="team-card">
                        <img src="user.jpg" alt="Membre 5" class="img-fluid">
                        <div class="card-body text-center">
                            <h5 class="member-name">Gloire M.Kuzekemena</h5>
                            <p class="member-role">Développeur</p>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-3 mb-4">
                    <div class="team-card">
                        <img src="user.jpg" alt="Membre 6" class="img-fluid">
                        <div class="card-body text-center">
                            <h5 class="member-name">Bruce Makanda</h5>
                            <p class="member-role">RH</p>
                        </div>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="col-md-3 mb-4">
                    <div class="team-card">
                        <img src="user.jpg" alt="Membre 7" class="img-fluid">
                        <div class="card-body text-center">
                            <h5 class="member-name">Felicité Bonsompili</h5>
                            <p class="member-role">Support</p>
                        </div>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="col-md-3 mb-4">
                    <div class="team-card">
                        <img src="user.jpg" alt="Membre 8" class="img-fluid">
                        <div class="card-body text-center">
                            <h5 class="member-name">Roger Mbaka</h5>
                            <p class="member-role">Community Manager</p>
                        </div>
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


    <section class="contact-info-section py-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <!-- Titre -->
                <div class="col-12 mb-4 text-center">
                    <h2 class="fw-bold text-uppercase" style="color:#d4af37;">Nos coordonnées</h2>
                    <p class="text-muted">N’hésitez pas à nous contacter directement</p>
                </div>

                <!-- Adresse -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 border border-light rounded h-100">
                        <h5 class="fw-bold" style="color:#d4af37;">Adresse</h5>
                        <p>123 Avenue du Commerce<br>Kinshasa, RDC</p>
                    </div>
                </div>

                <!-- Téléphone -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 border border-light rounded h-100">
                        <h5 class="fw-bold" style="color:#d4af37;">Téléphone</h5>
                        <p>+243 000 000 000</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 border border-light rounded h-100">
                        <h5 class="fw-bold" style="color:#d4af37;">Email</h5>
                        <p>contact@Wander.com</p>
                    </div>
                </div>
            </div>
        </div>
         <footer class="text-center py-3">
                <hr class="footer-line">
                <p>Tous droits réservés</p>
            </footer>
    </section>
</body>

</html>
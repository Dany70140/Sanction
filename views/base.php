<?php //session_start() ; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Mon Site' ?></title>
    <link rel="icon" href="../public/assets/image/icone_gaudper.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/CSS/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body{
            height: 100%;
            min-height: 100%;
        }
        footer {
            position: relative;
            height: 200px;
            margin-top: -200px;
        }
        ul{
            list-style-type: none;
        }
    </style>
</head>
<body>
<!-- Header commun -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <img src="../assets/image/logo.png" alt="logo" class="me-5" style="height: 70px">
            <a class="navbar-brand" href="/">Gaudper Sanction</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <?php if (isset($_SESSION['user'])): ?>
                        <li class="nav-item">
                            <p class="btn btn-success">Connecté en tant que <?php echo $_SESSION['user']['nom']?></p>
                        </li>
                        <li class="nav-item">
                            <a class="ms-2 nav-link btn btn-outline-warning text-black" href="/promotion">Ajouter une promotion</a>
                        </li>
                        <li class="nav-item">
                            <a class="ms-2 av-link btn btn-outline-danger" href="/compte/disconnect"
                               onclick="return confirm('Voulez vous vous vous vous déconnectez vous ?')">
                                Déconnexion
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/connexion">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/inscription">Créer un compte</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Contenu principal -->
<main class="container mx-auto px-4 flex-grow">
    <?= $content ?>
</main>

<!-- Footer commun -->
<footer class="text-dark p-3 mt-5 bg-white">
    <div class="container py-5">
        <div class="row py-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <img src="../assets/image/logo.png" alt="logo"
                     class="mb-3 w-75 h-75 shadow">
                <ul class="list-inline mt-4">
                    <li class="list-inline-item"><a href="#" target="_blank" title="twitter">
                            <i class="bi bi-twitter-x text-black">

                            </i>
                        </a>
                    </li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i
                                    class="bi bi-facebook">
                            </i>
                        </a>
                    </li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i
                                    class="bi bi-instagram text-black">
                            </i>
                        </a>
                    </li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i
                                    class="bi bi-pinterest text-success">
                            </i>
                        </a>
                    </li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i
                                    class="bi bi-vimeo bg-primary text-white">
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <a class="text-decoration-none text-black fs-5 border border-black p-3 arrondir" href="/mentions"> Mentions légales</a>
            </div>
        </div>
    </div>

    <!-- Copyrights -->
    <div class="bg-secondary py-4 text-dark">
        <div class="container text-center">
            <p class="text-muted mb-0 py-2 text-dark">Web site create by Iloai Dany SIO2-SLAM</p>
            <p class="mb-0">Tous droits réservés <?= date('Y') ?> &copy;</p>
        </div>
    </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
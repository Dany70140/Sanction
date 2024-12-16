<div class="text-center">
    <h1 class="mb-4">Gaudper Sanctions</h1>
</div>

<div class="row">
    <div class="col bg-dark arrondir border border-2 border-black p-3 me-5">
        <h1 class=" bg-warning arrondir p-3 me-5 border border-black border-2">Bienvenue sur le site</h1>
        <h4 class="text-white mt-5 text-center">
            Ceci est un site qui permet la gestion des sanctions du lycée gaudper
        </h4>
    </div>

    <div class="col ms-4">
        <p>
            <img src="../../assets/image/logo.png" alt="Logo" width="50%" height="50%">
        </p>
    </div>
</div>

<div class="text-center">
    <?php if (isset($_SESSION['message'])):
    foreach ($_SESSION['message'] as $item) {?>
        <div class="alert alert-success">
            <?= $item ?> !
        </div>
        <?php } ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['user'])): ?>
        <div class="alert alert-success">
            Bonjour <?= $_SESSION['user']['prenom'] ?> !
        </div>
        <div class="mt-4">
            <a href="/promotion" class="btn btn-primary btn-lg mx-2">Promotion</a>
            <a class="btn btn-primary btn-lg mx-2" href="/compte/disconnect"
               onclick="return confirm('Êtes-vous sûr de vouloir vous déconnecter ?')">
                Déconnexion
            </a>
        </div>
    <?php else: ?>
        <div class="mt-4 bg-light shadow p-3 m-0 ">
            <a href="/inscription" class="btn btn-warning btn-lg mx-2 border border-2 border-black">Créer un compte</a>
            <a href="/connexion" class="btn btn-warning btn-lg mx-2 border border-2 border-black">Se connecter</a>
        </div>
    <?php endif; ?>
</div>

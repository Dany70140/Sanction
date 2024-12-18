<?php $title = "Ajouter une promotion - Gaudper Sanction"; ?>

<div class="row justify-content-center bg-secondary mt-3 arrondir border border-2 border-black shadow p-2">
    <div class="col-md-6">
        <h1 class="text-center mb-4">Ajouter une promotion</h1>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($_SESSION['error']) ?>
                <?php unset($_SESSION['error']); // Supprimer le message après affichage ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['message']["warning"])): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($_SESSION['message']["warning"]) ?>
                <?php unset($_SESSION['message']["warning"]); // Supprimer le message après affichage ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION["message"]['success'])): ?>
            <div class="alert alert-success">
                <?= htmlspecialchars($_SESSION["message"]['success']) ?>
                <?php unset($_SESSION["message"]['success']); // Supprimer le message après affichage ?>
            </div>
        <?php endif; ?>

        <form action="/promotion/ajouter" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="libelle" class="form-label">Libellé*</label>
                <input type="text"
                       class="form-control"
                       id="libelle"
                       name="libelle"
                       value="<?= htmlspecialchars($_SESSION['form_data']['libelle'] ?? '') ?>"
                       required>
            </div>

            <div class="mb-3">
                <label for="annee" class="form-label">Année*</label>
                <input type="date"
                       minlength="4"
                       maxlength="4"
                       class="form-control"
                       id="annee"
                       name="annee"
                       value="<?= htmlspecialchars($_SESSION['form_data']['annee'] ?? '') ?>"
                       required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-outline-warning">Ajouter la promotion</button>
            </div>

            <div class="mb-3 mt-5">
                <p class="fs-4">Importer une promotion sous la forme d'un fichier .csv</p>
                <label class="form-label" for="input_import_file">Parcourir les fichiers : </label>
                <input class="form-control" type="file" name="import_file" id="input_import_file" accept="text/csv">
            </div>

        </form>

        <?php
        // Nettoyer les données du formulaire après affichage
        unset($_SESSION['form_data']); ?>
    </div>
</div>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <title>Accueil</title>
</head>

<?php

require_once __DIR__ . "/../vendor/autoload.php";
$entityManager = require_once __DIR__ . "/../config/bootstrap.php";

$route = $_GET['route'] ?? 'accueil';

switch ($route) {
    case 'accueil' :
        $accueilController = new \App\Controllers\AccueilController();
        $accueilController->accueil();

        break;
    default :
        // Page erreur 404
        echo "<h1>page introuvable :/</h1>";
        break;
}
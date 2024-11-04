<?php

// Configuration de l'EntityManager

require_once __DIR__ . "/../vendor/autoload.php";
//Définir l'emplacement des entités
$path = [__DIR__.'/../src/Entity'];
$isDevMode = True;
// Définir la configuration des entités
$configuration = \Doctrine\ORM\ORMSetup::createAttributeMetadataConfiguration($path, $isDevMode);
//Définir les éléments de connexion à la BDD
$configurationBD = [
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => '',
    'dbname' => 'db_sanctions',
    'host' => 'localhost'
];
// Création de la connexion à la base de données
$connexionBD = \Doctrine\DBAL\DriverManager::getConnection($configurationBD, $configuration);

// Créer l'EntityManager
$entityManager = new \Doctrine\ORM\EntityManager($connexionBD, $configuration);
return $entityManager;
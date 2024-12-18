<?php

namespace App\Controleurs;

use App\UsersStory\Promotion;
use App\UsersStory\CreateAccount;
use Doctrine\ORM\EntityManager;

class PromotionController extends AbstractController {
    private EntityManager $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }
    public function Ajouter()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                // Récupérer les données du formulaire
                $libelle = trim($_POST['libelle']);
                $annee = trim($_POST['annee']);

                // Tenter de créer la promotion
                $newProm =  new Promotion($this->entityManager);
                $newProm->setLibelle($libelle);
                $newProm->setAnnee($annee);
                try {
                    $newProm-> ajouterProm($libelle, $annee);
                    // Si la création réussit
                    $_SESSION["message"]['success'] = "La promotion créé avec succès !";
                    // Redirection vers l'accueil
                    $this->redirect('/');
                    exit;
                }catch (\Exception $e){
                    $_SESSION["message"]['warning'] = "La promotion n'a pas été ajouté !";
                    exit;
                }

            } catch (\InvalidArgumentException $e) {
                // Stocker le message d'erreur dans la session
                $_SESSION['error'] = $e->getMessage();

                // Stocker les données du formulaire pour les réafficher
                $_SESSION['form_data'] = [
                    'libelle' => $libelle,
                    'annee' => $annee,
                ];
                // Rediriger vers le formulaire
                 $this->render('/promotion');
                 exit;
            }
        }
        // $this->redirect('/');
    }
}
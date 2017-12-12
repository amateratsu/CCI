<?php

class Router
{
    public function load()
    {
        // instances (singletons) utilisées
        global $accueilController, $offersController;

        // ce routeur très simple regarde la valeur du paramètre GET "page" afin d'appeler le controlleur correspondant
        $page = 'accueil';
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }

        // appel du controlleur qui prend la main sur la suite de l'execution
        switch ($page) {
            case 'accueil':
                $accueilController->accueil();
                break;
            case 'list':
                $offersController->listOffers();
                break;
            case '404':
                include '404.php';
                break;
            case 'contact':
                $contactController->contact();
                break;
            case 'faq':
                include 'faq.php';
                break;
            case 'legal':
                include 'legal.php';
                break;
            case 'blog':
                $blogController->blog();
                break;
            case 'offres_bureaux':
                $offersController->listOffers();
                break;
            case 'offres_commerces':
                $offersController->listOffers();
                break;
            case 'offres_entrepots':
                $offersController->listOffers();
                break;
            case 'offres_industries':
                $offersController->listOffers();
                break;
            case 'offres_salles':
                $offersController->listOffers();
                break;
            case 'offres_terrains':
                $offersController->listOffers();
                break;
            case 'samir':
                $logController->log();
                break;
            case 'listentre':
                $affiliatesController->listAffil();
                break;
            case 'profil':
                $logController->log();
                break;
            case 'detail':
                $offersController->offer();
                break;
            case 'edit_listing':
                $offersController->offer();
                break;
            case 'connexion':
                $logController->log();
                break;
            case 'listcollec':
                $affiliatesController->listAffil();
                break;
            case 'listpart':
                $affiliatesController->listAffil();
                break;
            case 'reset_password':
                $affiliatesController->affilInfo();
                break;
            case 'offer':
                // cette méthode a un paramètre "id" obligatoire
                if (!isset($_GET['id'])) {
                    throw new Exception("paramètre 'id' manquant");
                    exit();
                }
                $offerId = $_GET['id'];
                $offersController->offer($offerId);
                break;
            default:
                $accueilController->accueil();
        }
    }
}

// instance du Router
$router = new Router();
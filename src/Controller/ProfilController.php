<?php
// src/Controller/ProfilController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController {
  #[Route("/profil", name: "profil")]
  public function profil() {
    // Récuperer l'utilisateur depuis la séssion
    $user = $this->getUser();

    // ... Faire ce que vous voulez avec, comme récuperer des données ect...

    // Retourner la vue associé
    return $this->render('profil/profil.twig');
  }
}

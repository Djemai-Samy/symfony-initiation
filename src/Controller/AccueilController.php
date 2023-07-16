<?php
// src/Controller/AccueilController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController {
  #[Route("/", name: "accueil")]
  public function accueil() {
    return $this->render('accueil/accueil.twig');
  }
}

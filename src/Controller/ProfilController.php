<?php
// Dans le fichier /src/Controller/ProfilController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController {

  #[Route('/profil', name: 'profil', methods: ['GET'])]
  public function index(Request $request): Response {

    // Variables à transmettre à la template :
    $nom = 'Doe';
    $prenom = 'John';
    $notes = [
      'math' => 12,
      'physique' => 17,
      'informatique' => 18,
      'Chimie' => 8,
    ];

    // Retourner le rendu d'un template Twig
    return $this->render('profil/profil.twig', ['nom' => $nom, 'prenom' => $prenom, 'notes' => $notes]);
  }
}

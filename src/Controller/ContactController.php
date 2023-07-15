<?php
// Dans le fichier /src/Controller/AccueilController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController {

  #[Route('/contact', name: 'contact', methods: ['GET'])]
  public function index(Request $request): Response {

    // Retourner le rendu d'un template Twig
    return $this->render('contact/contact.twig');
  }
}

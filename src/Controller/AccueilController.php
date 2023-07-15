<?php
// src/Controller/AccueilController.php

namespace App\Controller;

// Importer la classe pour les Route de Symfony
use Symfony\Component\Routing\Annotation\Route;

// importer la classe request pour accéder aux données des requête
use Symfony\Component\HttpFoundation\Request;

// Importer la classe Response pour construire des réponse
use Symfony\Component\HttpFoundation\Response;

// Importer la classe JsonResponse pour construire des réponse au format json
use Symfony\Component\HttpFoundation\JsonResponse;

// Utiliser le contrôleur de Symfony pour simplifier les tache basique
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController {
  #[Route("/", name: "accueil")]

  // Action a executé quand une requête est reçcu sur l'url '/'
  public function index(): Response {

    // Retourner un objet de type Response
    return new Response(
      '<h1>Salut tout le monde!</h1>', // Le contenu
      Response::HTTP_OK, // Le status (200)
      ['content-type' => 'text/html'] // Les en-têtes
    );
  }

  // Route associé aux urls: '/salut/3' ou '/salut/10' mais pas '/salut/John'
  #[Route("/salut/{id<\d+>}", name: "accueil.id")]
  public function salutID($id): Response {
    return $this->json(
      ['message' => 'L\'identifiant reçu est ' . $id],
    );
  }

  // Route associé aux urls: '/salut/John' ou '/salut/Jane' etc...
  #[Route("/salut/{nom}", name: "accueil.salut")]

  // Le paramètre de la route est passé à la méthodes en argument
  public function salutNom($nom, Request $req): Response {

    // Accéder aux données de $_POST
    $corps = $req->request;

    // Accéder aux paramètres de requête
    $parametres = $req->query;

    // Accéder aux cookies de la requête
    $cookies = $req->cookies;

    // Accéder aux en-têtes de la requête
    $entetes = $req->headers;

    // Accéder aux fichiers de la requête
    $fichiers = $req->files;

    // Accéder aux données du serveur
    $serveur = $req->server;

    return $this->json(
      ['message' => 'Salut ' . $nom . '!'],
    );
  }

  #[Route("/", name: "accueil.personne", methods: ['POST'])]
  public function bonjour(Request $req): Response {
    // Tester si le corps est vide
    if (!$req->getContent()) {
      return $this->json(
        ['erreur' => 'nom et prenom non fournis!'],
        Response::HTTP_BAD_REQUEST,
      );
    }

    // Récuperer le nom sinon Doe par défaut
    $prenom = $req->getPayload()->get('nom', 'Doe');

    // Récuperer les prénom, sinon John par défaut
    $nom = $req->getPayload()->get('prenom', 'John');

    return $this->json(
      ['message' => 'Bonjour ' . $nom . ' ' . $prenom],
    );
  }
}

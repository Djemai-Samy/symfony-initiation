<?php
// src/Controller/MathController.php

// Importer la classe pour les Route de Symfony
use Symfony\Component\Routing\Annotation\Route;

// importer la classe request pour accéder aux données des requête
use Symfony\Component\HttpFoundation\Request;

// Importer la classe Response pour construire des réponse
use Symfony\Component\HttpFoundation\Response;

// Importer la classe JsonResponse pour construire des réponse au format json
use Symfony\Component\HttpFoundation\JsonResponse;

class MathControlle {
  #[Route("/add", name: "accueil.addition")]
  public function addition(Request $req): Response {
    // Savoir si le paramètre x a été reçu
    $isX = $req->query->has('x');

    // Savoir si le paramètre y a été reçu
    $isY = $req->query->has('y');

    // Tester si x ou y n'a pas été reçu
    if (!$isX || !$isY) {
      // Retourner une réponse pour indiquer l'erreur
      return new JsonResponse(
        ['erreur' => 'Veuillez indiquer x et y!'],
        Response::HTTP_BAD_REQUEST,
        ['content-type' => 'application/json']
      );
    }

    // Accéder au paramètre x de la requête
    $parametreX = $req->query->get('x');

    // Accéder au paramètre y de la requête
    $parametreY = $req->query->get('y');

    $somme = $parametreX + $parametreY;

    return new JsonResponse(
      ['erreur' => $parametreX . ' + ' . $parametreY . ' = ' . $somme],
      Response::HTTP_OK,
      ['content-type' => 'application/json']
    );
  }
}

<?php
// /src/Controller/FilmController.php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Film;
use App\Repository\FilmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilmController extends AbstractController {

  // 3.1. Route pour créer des films
  #[Route('/films', name: 'films.ajout', methods: ['POST'])]
  // 2. Action pour ajouter une film dans la base données en utilisant le repository
  function ajout(Request $req, FilmRepository $repository) {

    // 2.1 Vérifier si le corps de la requête est vide ou si la clé titre n'existe pas
    if (!$req->getContent() || !$req->getPayload()->has('titre')) {
      return $this->json(
        ['erreur' => 'Il manque le titre!'],
        Response::HTTP_BAD_REQUEST
      );
    }

    // 2.2. Récuperer les données du corps de la requête
    $titre = $req->getPayload()->get('titre');

    // 2.3. Créer une instance de l'entité et la peupler
    $film = (new Film())->setTitre($titre);

    // 2.5 utiliser le repository pour enregistrer le nouveau film dans la base de données
    $nouveauFilm = $repository->save($film, true);

    return $this->json(
      ['film' => $nouveauFilm->getTitre() . ' ajouté. ID: ' . $nouveauFilm->getId()],
    );
  }

  // 3.2. Route pour Récuperer tous les films
  #[Route('/films', name: 'films.tout', methods: ['GET'])]
  function tout(Request $req, FilmRepository $repository) {
    // Récupérer un tableau d'entités Film
    $films = $repository->findAll();

    // Les mettre dans un tableau associatif pour les envoyer en JSON
    $filmTableau = [];
    foreach ($films as $film) {
      $filmTableau[] = ['id' => $film->getId(), 'titre' => $film->getTitre()];
    }

    return $this->json(
      ['films' => $filmTableau]
    );
  }

  // 3.3.  Route dynamique avec paramètre id pour récuperer un film
  #[Route('/films/{id}', name: 'films.film', methods: ['GET'])]
  function getById(FilmRepository $repository, int $id): Response {

    // 2. Récupérer une entité Film avec son identifiant
    $film = $repository->find($id);

    // 3. Vérifier si elle n'existe pas
    if (!$film) {
      return $this->json(
        ['erreur' => 'Film introuvable'],
        Response::HTTP_NOT_FOUND
      );
    }

    // 4. Retourner le film en tableau associatifs
    return $this->json(
      ['film' => ['id' => $film->getId(), 'titre' => $film->getTitre()]]
    );
  }

  //3.4.  Route dynamique pour récuperer un film avec son titre acceptant les methode HTTP GET
  #[Route('/films/titre/{titre}', name: 'films.film.titre', methods: ['GET'])]
  function getByTitre(FilmRepository $repository, string $titre): Response {

    // 2. Récupérer une entité Film avec son titre
    $film = $repository->findOneBy(['titre' => $titre]);

    // 3. Vérifier si elle n'existe pas
    if (!$film) {
      return $this->json(
        ['erreur' => 'Film introuvable'],
        Response::HTTP_NOT_FOUND
      );
    }

    // 4. renvoyer une réponse JSON contenant les id et titre du film.
    return $this->json(
      ['film' => ['id' => $film->getId(), 'titre' => $film->getTitre()]],
    );
  }

  // 3.5. Route Dynamique pour mettre à jour le titre d'un film
  #[Route('/films/{id}', name: 'films.update.titre', methods: ['PUT'])]
  function updateTitre(Request $req, FilmRepository $repository, int $id): Response {

    // 2. Tester et Retourner une erreur si le  corps est vide ou pas de clé titre
    if (!$req->getContent() || !$req->getPayload()->has('titre')) {
      return $this->json(['erreur' => 'Titre obligatoire'], Response::HTTP_NOT_FOUND);
    }

    // 3. Récupérer une entité Film avec son identifiant
    $film = $repository->find($id);

    // 4. Retourner une erreur si le film n'existe pas
    if (!$film) {
      return $this->json(['erreur' => 'Film introuvable'], Response::HTTP_NOT_FOUND);
    }

    // 5. Mettre à jour le titre
    $film->setTitre($req->getPayload()->get('titre'));

    // 5. Effectuer une sauvegarde
    $filmAjour = $repository->save($film);

    // 6. Retourner le film mis à jour
    return $this->json(
      ['film' => [
        'id' => $filmAjour->getId(),
        'titre' => $filmAjour->getTitre()
      ]],
    );
  }

  // 3.6. Route pour supprimer un film de la base de données
  #[Route('/films/{id}', name: 'films.supprimer', methods: ['DELETE'])]
  function supprimer(Request $req, FilmRepository $repository, int $id): Response {

    // 1. Récupérer une entité Film avec son identifiant
    $film = $repository->find($id);

    // 2. Retourner une erreur si le film n'existe pas
    if (!$film) {
      return $this->json(['erreur' => 'Film introuvable'], Response::HTTP_NOT_FOUND);
    }

    // 3. Supprimer le film
    $statusSuppression = $repository->supprimer($film);

    // 4. Retourner un message de réussite
    return $this->json(
      ['message' => 'Le film ' . $film->getTitre() . ' est supprimé'],
      Response::HTTP_OK
    );
  }

  // 4.2. Route pour ajouter un commentaire à un film
  #[Route('/films/{id}/commentaires', name: 'film.commentaires.add', methods: ['POST'])]
  public function ajouterCommentaire(
    Request $req,
    FilmRepository $repository,
    int $id
  ): Response {

    // 1. Il faut verifier si les clés auteur, message sont réçues dans le corps de la requete
    if (
      !$req->getContent() ||
      !$req->getPayload()->has('auteur') ||
      !$req->getPayload()->has('message')
    ) {
      return $this->json(
        ['erreur' => 'Veuillez fournir l\'auteur et le message!'],
        Response::HTTP_BAD_REQUEST
      );
    }

    // 2. Récuperer le film avec son id
    $film = $repository->find($id);

    // 3. Si le film n'exsite pas
    if (!$film) {
      return $this->json(
        ['erreur' => 'Film introuvable'],
        Response::HTTP_NOT_FOUND
      );
    }

    // 4. Recuperer les données du corps de la requête
    $auteur = $req->getPayload()->get('auteur');
    $message = $req->getPayload()->get('message');
    $date = date_create();

    // 5. Instancier et populer le commentaire avec les donnée réçues
    $commentaire = (new Commentaire())
      ->setAuteur($auteur)
      ->setMessage($message)
      ->setDate($date)
      ->setFilm($film);

    // 6. Ajouter le commentaire dans le film
    $film->addCommentaire($commentaire);

    // 7. Enregistrer le film et le commentaire grâce au cascade: persist
    $repository->save($film);

    return $this->json(['message' => 'Ajout du commentaire réussi!']);
  }

  // 4.3. Récuperer tous les commentaire d'un film
  #[Route('/films/{id}/commentaires', name: 'film.get.commentaires', methods: ['GET'])]
  public function getCommentaires(
    FilmRepository $repository,
    int $id
  ): Response {

    // Récuperer le film avec son id
    $film = $repository->find($id);

    // Si le film n'exsite pas
    if (!$film) {
      return $this->json(
        ['erreur' => 'Film introuvable'],
        Response::HTTP_NOT_FOUND
      );
    }

    // récuperer les commentaires automatiquement
    $commentaires = $film->getCommentaires();

    // Les transformer en un tableau associatif
    $commantairesJson = [];
    foreach ($commentaires as $c) {
      $commantairesJson[] = [
        'id' => $c->getId(),
        'auteur' => $c->getAuteur(),
        'message' => $c->getMessage()
      ];
    }

    return $this->json(['film' => $film->getTitre(), 'commentaires' => $commantairesJson]);
  }
}

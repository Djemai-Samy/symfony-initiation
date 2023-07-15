<?php
// src/Repository/FilmRepository.php
namespace App\Repository;

use App\Entity\Film;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Film>
 * La classe hérite de ces méthodes
 * @method Film|null find($id, $lockMode = null, $lockVersion = null)
 * @method Film|null findOneBy(array $criteria, array $orderBy = null)
 * @method Film[]    findAll()
 * @method Film[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FilmRepository extends ServiceEntityRepository {
  public function __construct(ManagerRegistry $doctrine) {
    parent::__construct($doctrine, Film::class);
  }

  // Nous ajouterons plus tard ici des méthodes pour interagir avec la base de données

  // 1. Méthode pour ajouter une Film dans la base de donnée
  public function save(Film $nouveauFilm, ?bool $flush = false) {

    // 1.1. Persiste l'entité Film dans le gestionnaire d'entités (Doctrine)
    $this->getEntityManager()->persist($nouveauFilm);

    // 1.2. Tester si nous devons executer la transaction
    if ($flush) {
      // 1.2.2. Effectue les opérations de base de données (INSERT/UPDATE)
      $this->getEntityManager()->flush();
    }

    // 1.3. Retourner l'instance du nouveau film 
    return $nouveauFilm;
  }

  // 1. Méthode pour supprimer une Film dans la base de donnée
  public function remove(Film $film): void {

    // 1.1. AJouter la suppression de l'entité Filmpour la prochaine transaction
    $this->getEntityManager()->remove($film);

    // 1.2. Effectue les opérations de base de données (DELETE) pour supprimer le film
    $this->getEntityManager()->flush();
  }
}

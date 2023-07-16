<?php
// src/Repository/UserRepository.php
namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class UserRepository extends ServiceEntityRepository {
  public function __construct(ManagerRegistry $doctrine) {
    parent::__construct($doctrine, User::class);
  }


  // 1. Méthode pour ajouter une User dans la base de donnée
  public function save(User $nouveauUser, ?bool $flush = false) {

    // 1.1. Persiste l'entité User dans le gestionnaire d'entités (Doctrine)
    $this->getEntityManager()->persist($nouveauUser);

    // 1.2. Tester si nous devons executer la transaction
    if($flush){
      // 1.2.2. Effectue les opérations de base de données (INSERT/UPDATE)
      $this->getEntityManager()->flush();
    }

    // 1.3. Retourner l'instance du nouveau user 
    return $nouveauUser;
  }
}


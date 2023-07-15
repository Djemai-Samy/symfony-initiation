<?php
// /src/Entity/Film.php

namespace App\Entity;

use App\Repository\FilmRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

// Lier la classe Repository pour les films
#[ORM\Entity(repositoryClass: FilmRepository::class)]
class Film {
  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column]
  private ?int $id = null;

  #[ORM\Column(length: 255)]
  private ?string $titre = null;

  #[ORM\OneToMany(
    targetEntity:"App\Entity\Commentaire", 
    mappedBy:"film", 
    cascade:['persist']
  )]
  private $commentaires;

  public function __construct()
  {
      $this->commentaires = new ArrayCollection();
  }

  public function getId(): ?int {
    return $this->id;
  }

  public function getTitre(): ?string {
    return $this->titre;
  }

  public function setTitre(string $titre): static {
    $this->titre = $titre;

    return $this;
  }

  // Méthode pour récuperer la liste des commentaires
  public function getCommentaires(): Collection
  {
    return $this->commentaires;
  }
  
  // Méthode pour ajouter un commentaire
  public function addCommentaire(Commentaire $commentaire): Collection {
    // Permet d'enregistrer le commentaire en enregistrant le film
    $commentaire->setFilm($this);

    // Ajouter le commentaire à la liste
    $this->commentaires->add($commentaire);

    return $this->commentaires;
  }
}

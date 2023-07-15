<?php
// /src/Entity/Commentaire.php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use App\Entity\Film;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire {
  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column]
  private ?int $id = null;

  #[ORM\Column(length: 255)]
  private ?string $auteur = null;

  #[ORM\Column(type: "text")]
  private ?string $message = null;

  #[ORM\Column(type: "date")]
  private ?string $date = null;

  #[ORM\ManyToOne(targetEntity: Film::class, inversedBy: 'commentaires')]
  private $film;

  public function getId(): ?int {
    return $this->id;
  }

  public function getAuteur(): ?string {
    return $this->auteur;
  }

  public function setAuteur(string $auteur): static {
    $this->auteur = $auteur;

    return $this;
  }
  public function getMessage(): ?string {
    return $this->message;
  }

  public function setMessage(string $message): static {
    $this->message = $message;

    return $this;
  }
  public function getDate(): ?string {
    return $this->date;
  }

  public function setDate(string $date): static {
    $this->date = $date;

    return $this;
  }

  public function getFilm(): ?Film {
    return $this->film;
  }

  public function setFilm(?Film $film): self {
    $this->film = $film;

    return $this;
  }
}

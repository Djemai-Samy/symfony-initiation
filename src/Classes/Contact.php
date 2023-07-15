<?php
// dans /src/Classes/Contact.php
namespace App\Classes;
class Contact {
  private $nom = null;
  private $email = null;
  private $mot_de_passe = null;
  private $sexe = null;
  private $accepter_conditions = null;

  public function getNom() {
    return $this->nom;
  }

  public function setNom($valeur) {
    $this->nom = $valeur;
    return $this;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($valeur) {
    $this->email = $valeur;
    return $this;
  }

  public function getSexe() {
    return $this->sexe;
  }

  public function setSexe($valeur) {
    $this->sexe = $valeur;
    return $this;
  }

  public function getAccepterConditions() {
    return $this->accepter_conditions;
  }

  public function setAccepterConditions($valeur) {
    $this->accepter_conditions = $valeur;
    return $this;
  }

  public function getMotDePasse()
  {
    return $this->mot_de_passe;
  }

  public function setMotDePasse($mot_de_passe): self
  {
    $this->mot_de_passe = $mot_de_passe;

    return $this;
  }
}

<?php
// src/Twig/MoyenneExtension.php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class MoyenneExtension extends AbstractExtension {
  public function getFilters() {
    // Retourner le filtre 'moyenne' lié à la fonction 'calculerMoyenne'
    return [
      new TwigFilter('moyenne', [$this, 'calculerMoyenne']),
    ];
  }

  public function getFunctions() {
    return [
      new TwigFunction('format', [$this, 'formatNombre']),
    ];
  }

  // Filtre pour calculer la moyenne
  public function calculerMoyenne($nombres) {
    return array_sum($nombres) / count($nombres);
  }

  // Fonction pour formater un nombre
  public function formatNombre($nombre) {
    return number_format($nombre, 2, ',', '.');
  }
}

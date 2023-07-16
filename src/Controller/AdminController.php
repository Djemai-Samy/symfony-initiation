<?php
// Dans le fichier: /src/Controller/AdminController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController {
  #[Route('/admin', name: 'admin')]
  public function admin() {

    // Si 'lutilisateur n'est pas authentifié, rediriger vers connexion
    if (!$this->isGranted('IS_AUTHENTICATED_FULLY')) {
      return $this->redirectToRoute('app_login');
    }

    // Si l'utilisateur n'a pas le role ROLE_ADMIN, rediriger vers le profil
    if (!$this->isGranted('ROLE_ADMIN')) {
      return $this->redirectToRoute('profil');
    }
    return $this->render('admin/admin.twig');
  }
}

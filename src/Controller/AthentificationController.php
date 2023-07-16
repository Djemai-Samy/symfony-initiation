<?php
// src/Controller/AthentificationController.php
namespace App\Controller;

use App\Entity\User;
use App\Form\UserForm;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AthentificationController extends AbstractController {

  #[Route('/register', name: 'app_register')]
  public function inscription(
    Request $request,
    UserRepository $repository,
    UserPasswordHasherInterface $passwordHasher
  ) {
    // 1. Crée une nouvelle instance de la classe `User`
    $user = new User();

    // 2. Création du formulaire
    $form = $this->createForm(UserForm::class, $user);

    // 3. Iriguer les formulaire avec les données de la requête
    $form->handleRequest($request);

    // 4. Si le formulaire est soumis et valide 
    if ($form->isSubmitted() && $form->isValid()) {

      // 4.1. Hasher le mot de passe avant de l'enregistrer dans la base de données
      $hashedPassword = $passwordHasher->hashPassword(
        $user,
        $user->getPassword()
      );

      // 4.2. Mettre à jour le mot de passe avec la version hashée
      $user->setPassword($hashedPassword);

      // 4.3. Enregistrer l'utilisateur dans la base de données
      $repository->save($user, true);

      // 4.4. Rediriger l'utilisateur vers la page de connexion
      return $this->redirectToRoute('app_login');
    }

    // 5. Affiche la vue de l'inscription avec le formulaire
    return $this->render('authentification/register.twig', [
      'registrationForm' => $form->createView(),
    ]);
  }

  #[Route('/login', name: 'app_login')]
  public function login(Request $request, AuthenticationUtils $authenticationUtils) {
    
    // Tester si l'utilisateur est connecté
    if ($this->isGranted('IS_AUTHENTICATED_FULLY')) {
      return $this->redirectToRoute('profil');
    }

    $error = $authenticationUtils->getLastAuthenticationError();
    $lastEmail = $authenticationUtils->getLastUsername();

    $form = $this->createForm(UserForm::class);

    return $this->render('authentification/login.twig', [
      'last_email' => $lastEmail,
      'error' => $error,
      'loginForm' => $form->createView(),
    ]);
  }

  #[Route('/logout', name: 'app_logout')]
  public function logout() {
    // Controleur peut etre vide!
  }
}

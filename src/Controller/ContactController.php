<?php
// /src/Controller/ContactController.php
namespace App\Controller;

use App\Classes\Contact;
use App\Form\ContactForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type as Types;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController {

  // Route pour envoyer un message
  #[Route('/contact', name: 'contact')]
  public function contact() {

    // Objet pour construire un formulaire
    $formBuilder = $this->createFormBuilder()
      ->setMethod('POST')
      ->setAttributes([
        'class' => 'ma-class',
      ]);

    $formBuilder
      ->add('nom', Types\TextType::class, [
        'label' => 'Nom:',
        'attr' => [
          'placeholder' => 'Entrez votre nom complet',
          'class' => 'my-input-class',
        ],
        'required' => true,
      ])

      ->add('email', Types\EmailType::class, [
        'label' => 'Email:',
        'attr' => [
          'placeholder' => 'Entrez votre adresse e-mail',
          'class' => 'my-input-class',
        ],
        'required' => true,
      ])

      ->add('mot_de_passe', Types\PasswordType::class, [
        'label' => 'Mot de passe:',
        'attr' => [
          'placeholder' => 'Entrez votre adresse e-mail',
          'class' => 'my-input-class',
        ],
        'required' => true,
      ])

      ->add('sexe', Types\ChoiceType::class, [
        'choices' => [
          'Masculin' => 'm',
          'Féminin' => 'f',
        ],
        'expanded' => true,
      ])

      ->add('accepter_conditions', Types\CheckboxType::class, [
        'label' => 'Accepter les condition d\'utilisation',
        'required' => true,
      ])
      ->add('envoyer', Types\SubmitType::class);

    // Créer une instance du formulaire
    $formulaire = $formBuilder->getForm();

    return $this->render('contact/contact.twig', ['formulaire' => $formulaire]);
  }

  #[Route('/utilisateur', name: 'utilisateur')]
  public function utilisateur(Request $req) {
    // Intancier un objet de type Contact a lier au formulaire
    $contact = new Contact();

    // Préremplir les propriétés de l'objet $contact si nécessaire
    $contact->setNom('John Doe');

    // Créer le formulaire en le liant à l'objet Contact
    $form = $this->createForm(ContactForm::class, $contact);

    // Charger le formulaire avec les données de la requpete
    $form -> handleRequest($req);
    // Vérification si le formulaire a été soumis et est valide
    if ($form->isSubmitted() && $form->isValid()) {
      // Récupérer les données du formulaire manuellement
      $email = $form->get('email');
      $nom = $form->get('nom');

      // L'objet contact est irrigué automatiquement
      dump($contact);
    }

    // Envoyer l'instance à la vue
    return $this->render('utilisateur/utilisateur.twig', [
      'formulaire' => $form->createView(),
    ]);
  }
}

<?php
// src/Form/ContactFrom.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type as Types;
use Symfony\Component\Validator\Constraints as Assert;

class ContactForm extends AbstractType {
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
      ->setMethod('POST')
      ->setAttributes(['class' => 'my-form-class'])
      ->add('nom', Types\TextType::class, [
        'label' => 'Nom:',
        'attr' => [
          'placeholder' => 'Entrez votre nom complet',
          'class' => 'my-input-class',
        ],
        'required' => true,
        'constraints' => [
          new Assert\NotBlank(['message' => 'Le champ "Nom" ne peut pas être vide.']),
          new Assert\Length([
            'min' => 2,
            'max' => 255,
            'minMessage' => 'Le champ "Nom" doit contenir au moins {{ limit }} caractères.',
            'maxMessage' => 'Le champ "Nom" ne peut pas dépasser {{ limit }} caractères.',
          ]),
        ],
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
          'placeholder' => 'Entrez votre mot de passe',
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
  }
}

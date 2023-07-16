<?php
// src/Form/UserForm.php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type as Types;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class UserForm extends AbstractType {
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
      ->add('email', Types\EmailType::class, [
        'attr'=>['placeholder'=>'Entrez votre e-mail'],
        'constraints' => [
          new Assert\NotBlank(),
        ],
      ])
      ->add('password', Types\PasswordType::class, [
        'attr'=>['placeholder'=>'Entrez votre mot de passe'],
        'constraints' => [
          new Assert\NotBlank(),
          new Assert\Length(['min' => 6]),
        ],
      ])
      ->add('submit', Types\SubmitType::class)
    ;
  }

  public function configureOptions(OptionsResolver $resolver) {
    $resolver->setDefaults([
      'data_class' => User::class,
    ]);
  }
}

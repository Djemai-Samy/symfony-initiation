# Symfony 6: Les formulaires

## [Page officiel du cours Symfony 6: Les formulaire avec Symfony 6](https://djemai-samy.com/posts/5.symfony6-forms.article)

![Image du cours: Symfony 6: Les formulaires avec Symfony 6](https://djemai-samy.com/blog/2.programmation/2.server/4.php/3.symfony6/1.symfony6-initiation/5.symfony6-forms/5.symfony6-forms.png)

Les formulaires jouent un rôle essentiel dans les applications web, permettant aux utilisateurs d'interagir avec le système en saisissant et en soumettant des données.

En comprenant les concepts et les fonctionnalités des formulaires dans Symfony 6, vous serez en mesure de développer des applications web dynamiques et interactives.

La branche 'main' contient le code de départ de chaque chapitre de la série de cours.

---

## Prérequis

- Connaissance de base en programmation web ([HTML](https://djemai-samy.com/posts/0.html-initiation), [CSS](https://djemai-samy.com/posts/0.css-initiation) et [PHP](https://djemai-samy.com/posts/0.php-initiation))
- Compréhension des concepts de base du modèle MVC (Modèle-Vue-Contrôleur)
- Connaissance sur la programmation orientée objet avec PHP
- [Familiarité avec le framework Symfony (concepts de base, installation, configuration)](https://djemai-samy.com/posts/1.symfony6-introduction.article)
- [Savoir créer et uriliser ses contrôleurs avec Symfony 6)](https://djemai-samy.com/posts/2.symfony6-controller.article)
- [Connaissance sur l'utilisation du moteur de template Twig)](https://djemai-samy.com/posts/4.symfony6-views.article)

---

## Plan du cours

[Vous pouvez suivre la serie d'initiation au Framework Symfony 6 complète directement sur le site:](https://djemai-samy.com/posts/0.symfony6-initiation)

1. [Introduction](https://djemai-samy.com/posts/1.symfony6-introduction.article)

2. [Les Contrôleurs](https://djemai-samy.com/posts/2.symfony6-controller.article)

3. [ORM Doctrine](https://djemai-samy.com/posts/3.symfony6-doctrine.article)

4. [Les vues avec Twig](https://djemai-samy.com/posts/4.symfony6-views.article)

5. [Les Formulaires](https://djemai-samy.com/posts/5.symfony6-forms.article)

   1. Introduction aux formulaires Symfony
      1. Importance des formulaires
      2. Avantages des formulaires Symfony
   2. Formulaire basique
      1. Créer un formulaire
      2. Configuration des options
      3. Ajout de champs
      4. Configuration des options et attributs
      5. Afficher le formulaire
   3. Création de formulaires avancée
      1. Création d'un Formulaire personnalisée
      2. Utilisation du Formulaire personnalisée
      3. Lier un objet avec le formulaire
   4. Validation des données
      1. Utilisation des contraintes intégrées
      2. Utilisation de messages personnalisés
   5. Gestion de la soumission
      1. Capture de la soumission
      2. Redirection après soumission

6. [Authentification](https://djemai-samy.com/posts/6.symfony6-authentification.article)

---

## Branches sur GitHub

Chaque article à comme point de départ la branche **main** et possèdent tous une branche sur le dépot, contenant le code finale et complet de l'article:

- [main](https://github.com/Djemai-Samy/symfony6-initiation)
- [1-introduction](https://github.com/Djemai-Samy/symfony6-initiation/tree/1-introduction)
- [2-routes](https://github.com/Djemai-Samy/symfony6-initiation/tree/2-controller)
- [3-middlewares](https://github.com/Djemai-Samy/symfony6-initiation/tree/3-doctrine)
- [4-views](https://github.com/Djemai-Samy/symfony6-initiation/tree/4-views)
- [5-forms](https://github.com/Djemai-Samy/symfony6-initiation/tree/5-forms)
- [6-authentification](https://github.com/Djemai-Samy/symfony6-initiation/tree/6-athentification)

---

## Branches sur GitLab

Chaque article à comme point de départ la branche **main** et possèdent tous une branche sur le dépot, contenant le code finale et complet de l'article:

- [main](https://gitlab.com/tutoriels-dev/2.server/4.php/3.symfony6/1.symfony6-initiation/1.symfony6-initiaition/-/tree/main)
- [1-introduction](https://gitlab.com/tutoriels-dev/2.server/4.php/3.symfony6/1.symfony6-initiation/1.symfony6-initiaition/-/tree/1-introduction)
- [2-controller](https://gitlab.com/tutoriels-dev/2.server/4.php/3.symfony6/1.symfony6-initiation/1.symfony6-initiaition/-/tree/2-controller)
- [3-doctrine](https://gitlab.com/tutoriels-dev/2.server/4.php/3.symfony6/1.symfony6-initiation/1.symfony6-initiaition/-/tree/3-doctrine)
- [4-views](https://gitlab.com/tutoriels-dev/2.server/4.php/3.symfony6/1.symfony6-initiation/1.symfony6-initiaition/-/tree/4-views)
- [5-forms](https://gitlab.com/tutoriels-dev/2.server/4.php/3.symfony6/1.symfony6-initiation/1.symfony6-initiaition/-/tree/5-forms)
- [6-authentification](https://gitlab.com/tutoriels-dev/2.server/4.php/3.symfony6/1.symfony6-initiation/1.symfony6-initiaition/-/tree/6-authentification)

---

## Objectifs

- **Comprendre** les principes **fondamentaux** de **Symfony** et son **architecture**.
- **Maîtriser** les **fonctionnalités** clés du Framework, y compris la **gestion des routes**, les **contrôleurs** et les **vues**.
- **Apprendre** à **interagir** avec une **base de données** en utilisant **Doctrine**.
- **Savoir** créer des **formulaires**, les **valider** et **gérer** les **saisies** utilisateur.
- **Acquérir** les **compétences** nécessaires pour **mettre en place** des mécanismes de **sécurité** et d'**authentification**.

---

### 1.1 Importance des formulaires

Les formulaires sont une composante clé des applications web, car ils permettent de collecter des informations et d'effectuer des opérations sur ces données.

Ils facilitent l'interaction entre l'utilisateur et l'application en offrant une interface conviviale pour saisir, valider et soumettre des données.

Que ce soit pour un simple formulaire de contact ou un formulaire complexe de création de compte, les formulaires sont omniprésents dans le développement web.

---

### 1.2 Avantages d'utiliser les formulaires Symfony

Symfony propose un composant dédié à la gestion des formulaires, offrant de nombreux avantages aux développeurs :

- **Facilité de création et de personnalisation** : Symfony fournit une API fluide et intuitive pour créer des formulaires à l'aide de la classe `FormBuilder`. Les développeurs peuvent rapidement définir les champs, les options et les contraintes de validation des formulaires.

- **Validation intégrée et personnalisable** : Symfony offre un système de validation puissant et flexible. Les contraintes de validation intégrées permettent de valider facilement les données saisies par les utilisateurs, tandis que les développeurs peuvent créer leurs propres contraintes personnalisées pour répondre aux besoins spécifiques de l'application.

- **Sécurité et protection contre les attaques CSRF** : Symfony intègre des mécanismes de sécurité pour protéger les formulaires contre les attaques de falsification de requête inter-sites (CSRF). Cela garantit que les formulaires soumis proviennent bien de l'application elle-même.

- **Gestion avancée des données liées** : Symfony simplifie la gestion des relations entre entités dans les formulaires. Il permet de créer facilement des champs imbriqués, des collections dynamiques et des formulaires évolutifs, offrant ainsi une grande flexibilité pour manipuler les données liées.

---

### 1.3 Fonctionnalités des formulaires dans Symfony 6

Symfony 6 propose un ensemble complet de fonctionnalités pour la création, la personnalisation et la gestion des formulaires :

- **Création de formulaires** : Symfony offre une API puissante et intuitive pour créer des formulaires. Les développeurs peuvent définir les champs, les options et les contraintes de validation à l'aide de la classe `FormBuilder`.

- **Validation des données** : Symfony propose un système de validation intégré, avec une variété de contraintes prédéfinies telles que les contraintes de longueur, de format, de présence, etc. Les développeurs peuvent également créer des contraintes personnalisées pour valider des données spécifiques.

- **Gestion de la soumission des formulaires** : Symfony facilite la gestion de la soumission des formulaires. Les données soumises peuvent être récupérées dans les contrôleurs Symfony et traitées en fonction des besoins de l'application.

- **Personnalisation du rendu** : Symfony utilise le moteur de templating Twig pour générer les vues des formulaires. Cela permet aux développeurs de personnaliser le rendu des formulaires en utilisant des thèmes, des mises en forme spécifiques, des CSS, etc.

- **Fonctionnalités avancées** : Symfony propose également des fonctionnalités avancées pour les formulaires, telles que la gestion des fichiers envoyés, les formulaires AJAX, la manipulation de données liées via des relations entre entités, la gestion des collections dynamiques, etc.

Les développeurs peuvent créer des formulaires efficaces, flexibles et sécurisés dans leurs applications web en utilisant Symfony 6.

---

### 1.4. Installation

 Afin de pouvoir **utiliser** les **formulaires** avec un **projet Symfony**, il faut d'abord **télécharger et installer** les **dépendances** nécessaires :

```bash
composer require symfony/form
```

---
---

## 2. Formulaire basique

Dans ce chapitre, nous allons explorer les bases de la création de formulaires dans Symfony 6 à l'aide de la classe `FormBuilder`.

Nous allons apprendre à configurer les options du formulaire, ajouter différents types de champs de formulaire tels que des champs de texte, des boutons et des cases à cocher, et enfin afficher le formulaire dans une vue Twig.

---

### 2.1 Utilisation de la classe FormBuilder pour créer un formulaire

Symfony 6 fournit la classe `FormBuilder`, qui permet de créer des formulaires de manière simple et structurée.

Le `FormBuilder` est généralement utilisé dans les contrôleurs Symfony pour générer des instances de formulaires.

Voici un exemple de création d'un formulaire basique à l'aide du `FormBuilder` :

```php
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

// ...
#[Route('/contact', name:'contact')]
public function contact(Request $request)
{
 // Objet pour construire un formulaire
    $formBuilder = $this->createFormBuilder();
}
```

Dans cet exemple, nous avons utilisé le `createFormBuilder()` pour créer une instance du `FormBuilder`.

---

### 2.2 Configuration des options du formulaire

Symfony 6 offre une grande flexibilité pour configurer les options du formulaire.

Vous pouvez spécifier des options telles que la méthode d'envoi (GET ou POST), l'action du formulaire, les attributs HTML supplémentaires, etc.

Voici un exemple de configuration des options du formulaire :

```php
$formBuilder = $this->createFormBuilder()
    ->setMethod('POST')
    ->setAttributes([
        'class' => 'my-form-class',
    ]);
```

Dans cet exemple, nous avons utilisé les méthodes `setMethod()`et `setAttributes()` pour configurer respectivement la méthode d'envoi du formulaire et les attributs HTML supplémentaires.

Vous pouvez également utiliser d'autres méthodes pour configurer d'autres options selon vos besoins comme l'action du formulaire, etc..

---

### 2.3 Ajout de champs de formulaire

Les champs de formulaire représentent les éléments interactifs que les utilisateurs remplissent avec des données.

Symfony 6 fournit une variété de types de champs prédéfinis tels que les champs de texte, les cases à cocher, les boutons, etc., que vous pouvez ajouter à votre formulaire.

Voici un exemple d'ajout de différents types de champs de formulaire :

```php
$formBuilder
    ->add('nom', TextType::class)
    ->add('email', EmailType::class)
    ->add('mot_de_passe', PasswordType::class)
    ->add('sexe', ChoiceType::class, [
        'choices' => [
            'Masculin' => 'm',
            'Féminin' => 'f',
        ],
        'expanded' => true,
    ])
    ->add('accepter_conditions', CheckboxType::class)
    ->add('envoyer', SubmitType::class);
```

Dans cet exemple, nous avons ajouté plusieurs champs de formulaire :

- Le champ "nom" utilise le type `TextType`, qui est un champ de texte simple.
- Le champ "email" utilise le type `EmailType`, qui valide automatiquement les adresses e-mail.
- Le champ "mot_de_passe" utilise le type `PasswordType`, qui masque les caractères saisis.
- Le champ "sexe" utilise le type `ChoiceType`, qui affiche une liste déroulante de choix.
- Le champ "accepter_conditions" utilise le type `CheckboxType`, qui affiche une case à cocher.
- Le champ "envoyer" utilise le type `SubmitType`, qui affiche un bouton de soumission.

---

### 2.4 Configuration des options et des attributs des champs

Symfony 6 offre de nombreuses options pour configurer individuellement chaque champ de formulaire.

Vous pouvez spécifier des options telles que l'étiquette du champ, les attributs HTML supplémentaires, les contraintes de validation, etc.

Voici un exemple de configuration des options et des attributs d'un champ :

```php
$formBuilder->add('nom', TextType::class, [
    'label' => 'Nom complet',
    'attr' => [
        'placeholder' => 'Entrez votre nom complet',
        'class' => 'my-input-class',
    ],
    'required' => true,
]);
```

Dans cet exemple, nous avons ajouté l'option `'label'` pour spécifier l'étiquette affichée à côté du champ.

L'option `'attr'` permet de définir des attributs HTML supplémentaires pour le champ, tels que `'placeholder'` pour afficher un texte d'invite et `'class'` pour définir une classe CSS personnalisée.

L'option `'required'` permet de spécifier si le champ est obligatoire ou non.

---

### 2.5 Afficher le formulaire dans une vue Twig

Une fois que vous avez créé et configuré votre formulaire, vous devez l'afficher dans une vue Twig pour qu'il soit visible par les utilisateurs.

Dans votre contrôleur, vous pouvez envoyer une instance construite du formulaire à votre vue:

```php
use Symfony\Component\Form\Extension\Core\Type as Types;
use Symfony\Component\Form\FormBuilderInterface;

// ...
#[Route('/contact', name:'contact')]
public function contact(Request $request)
{
 // Objet pour construire un formulaire
    $constructeurForm = $this->createFormBuilder()
     ->setMethod('POST')
     ->setAttributes(['class' => 'my-form-class'])
     ->add('nom', Types\TextType::class)
     ->add('email', Types\EmailType::class)
     ->add('mot_de_passe', Types\PasswordType::class)
     ->add('sexe', Types\ChoiceType::class, [
         'choices' => [
             'Masculin' => 'm',
             'Féminin' => 'f',
         ],
         'expanded' => true,
     ])
     ->add('accepter_conditions', Types\CheckboxType::class)
     ->add('envoyer', Types\SubmitType::class);

 // Créer une instance du formulaire
 $formulaire = $formBuilder->getForm();
 
return $this->render('contact.twig', ['formulaire'=> $formulaire])
}
```

Voici comment afficher un formulaire dans une vue Twig :

```twig
{{ form(formulaire) }}
```

En utilisant cette fonction Symfony génère automatiquement le code HTML nécessaire pour afficher le formulaire, y compris les balises `<form>`, les balises `<input>`, etc.

C'est ainsi que vous pouvez créer un formulaire basique en utilisant la classe `FormBuilder` et l'afficher dans une vue Twig dans Symfony 6.

Dans la prochaine section, nous allons explorer la création de formulaires plus avancés en liant le formulaire à une entité et en gérant les données préremplies.

N'hésite pas à personnaliser les options et les attributs des champs selon les besoins de ton application.

---
---
---

## 3. Création de formulaires avancée

Dans ce chapitre, nous allons explorer des fonctionnalités avancées de la création de formulaires dans Symfony 6.

Nous allons apprendre à créer une classe de formulaire personnalisée, à l'utiliser dans un contrôleur et à gérer les données préremplies.

---

### 3.1 Création d'une classe Formulaire personnalisée

Lorsque vous souhaitez créer un formulaire avec des fonctionnalités spécifiques, vous pouvez créer une classe de formulaire personnalisée.

Cette approche vous permet de centraliser la logique de création et de gestion du formulaire dans une classe dédiée.

Voici comment créer une classe de formulaire personnalisée :

```php
// src/Form/ContactFrom.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type as Types;

class ContactForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('POST')
      ->setAttributes(['class' => 'my-form-class'])
      ->add('nom', Types\TextType::class)
      ->add('email', Types\EmailType::class)
      ->add('mot_de_passe', Types\PasswordType::class)
      ->add('sexe', Types\ChoiceType::class, [
          'choices' => [
              'Masculin' => 'm',
              'Féminin' => 'f',
          ],
          'expanded' => true,
      ])
      ->add('accepter_conditions', Types\CheckboxType::class)
      ->add('envoyer', Types\SubmitType::class)
  ;
    }
}
```

Dans cet exemple, nous avons créé une classe `ContactForm` qui étend `AbstractType`.

Dans la méthode `buildForm()`, nous utilisons l'objet `$builder` pour ajouter les champs du formulaire.

---

### 3.2 Utilisation de la classe Formulaire personnalisée dans le contrôleur

Une fois que vous avez créé une classe de formulaire personnalisée, vous pouvez l'utiliser dans un contrôleur Symfony pour créer une instance du formulaire et l'afficher dans une vue Twig.

Voici comment utiliser la classe de formulaire dans le contrôleur :

```php
use App\Form\ContactForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name:'contact')]
    public function contact(Request $request)
    {
     // Créer l'instance du formulaire
        $formulaire = $this->createForm(ContactForm::class);

  // Envoyer l'instance à la vue
        return $this->render('contact/contact.html.twig', [
            'formulaire' => $form->createView(),
        ]);
    }
}
```

Dans cet exemple, nous avons utilisé la méthode `$this->createForm()` pour créer une instance du formulaire en utilisant la classe `ContactForm` que nous avons créée précédemment.

Ensuite, nous traitons la soumission du formulaire en appelant `$form->handleRequest($request)`. Si le formulaire est soumis et valide, vous pouvez effectuer des actions en fonction des données soumises.

Enfin, nous rendons le formulaire dans une vue Twig en utilisant la méthode `$form->createView()`. Cette méthode génère une représentation du formulaire qui peut être utilisée dans la vue pour afficher le formulaire à l'utilisateur.

---

### 3.3 Utiliser/lier un objet avec le formulaire

Lorsque vous utilisez une classe de formulaire personnalisée, vous pouvez également lier un objet avec le formulaire.

Cela devient surtout intéressent quand l'objet est une entité, cela nous permettra de facilement irriguer l'instance de l'entité avec les donnée du formulaire.

Cela nous permettra aussi de préremplir les champs si l'entité a été irriguer depuis la base de données, lors de l'utilisateur du formulaire pour la mise à jour des données.

Imaginons que nous avons une classe Contact pour simuler une entité:

```php
// dans src/Classes/Contact.php
namespace App\Classes;
class Contact
{
    private $nom = null;
    private $email = null;
    private $mot_de_passe = null;
    private $sexe = null;
    private $accepter_conditions = null;

 public function getNom()
 {
  return $this->nom;
 }
 public function setNom($valeur)
 {
  $this-> nom = $valeur;
  return $this;
 }
 
 public function getEmail()
 {
  return $this->email;
 }
 public function setEmail($valeur)
 {
  $this-> email = $valeur ;
  return $this;
 }
 
 public function getSexe()
 {
  return $this->sexe;
 }
 public function setSexe($valeur)
 {
  $this-> sexe = $valeur;
  return $this;
 }
 
 public function getAccepterConditions()
 {
  $this->accepter_conditions
 }

 public function setAccepterConditions($valeur)
 {
  $this->accpeter_conditions  = $valeur;
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
```

Voici comment lier un objet avec le formulaire :

```php
// src/Controller/ContactController.php
  
// Code précédent ...

#[Route('/utilisateur', name: 'utilisateur')]
public function utilisateur() {
  // Intancier un objet de type Contact a lier au formulaire
  $contact = new Contact();

  // Préremplir les propriétés de l'objet $contact si nécessaire
  $contact->setNom('John Doe');

  // Créer le formulaire en le liant à l'objet Contact
  $form = $this->createForm(ContactFormType::class, $contact);

  // Envoyer l'instance à la vue
  return $this->render('utilisateur/utilisateur.twig', [
    'formulaire' => $form->createView(),
  ]);
}
```

Dans cet exemple, nous avons créé une instance de la classe `Contact` et l'avons passée comme deuxième argument à la méthode `$this->createForm()`.

Cela lie l'objet `$contact` avec le formulaire, ce qui permet de préremplir les champs avec les valeurs de l'objet et de relier les données soumises à l'objet lors de la soumission du formulaire.

Vous pouvez préremplir les propriétés de l'objet `$contact` en fonction de vos besoins avant de créer le formulaire.

---
---
---

## 4. Validation des données de formulaire

Lorsque vous travaillez avec des formulaires, il est essentiel de valider les données soumises pour garantir leur intégrité et leur conformité aux règles métier de votre application.

Dans ce chapitre, nous allons explorer les fonctionnalités de validation intégrées de Symfony 6 et apprendre à définir des règles de validation pour les champs de formulaire.

Pour installer le paquet, lancer cette commande:

```bash
composer require symfony/validator
```

---

### 4.1 Utilisation des contraintes de validation intégrées de Symfony

Symfony propose un ensemble de contraintes de validation intégrées qui vous permettent de spécifier les règles de validation pour chaque champ de votre formulaire.

Ces contraintes permettent de vérifier les types de données, les longueurs, les formats, etc.

Les contraintes de validation peuvent être utilisées pour définir des règles de validation spécifiques pour chaque champ de formulaire.

Vous pouvez choisir parmi une variété de contraintes prédéfinies, telles que `NotBlank`, `Email`, `Length`, `Regex`, etc., ou créer vos propres contraintes personnalisées.

Voici quelques exemples de règles de validation couramment utilisées :

- `NotBlank` : Vérifie que le champ n'est pas vide.
- `Email` : Vérifie que le champ est une adresse e-mail valide.
- `Length` : Vérifie la longueur minimale et maximale du champ.
- `Regex` : Vérifie que la valeur du champ correspond à une expression régulière donnée.

Vous pouvez [consulter la documentation officiel de Symfony pour voir plus d'exemples](https://symfony.com/doc/current/validation.html#the-basics-of-validation).

Vous pouvez combiner plusieurs contraintes pour définir des règles de validation complexes.

Voici comment utiliser les contraintes de validation intégrées dans un formulaire :

```php
use Symfony\Component\Validator\Constraints as Assert;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder 
       ->add('name', TextType::class, [ 
        'constraints' => [ 
         new Assert\NotBlank(), 
         new Assert\Length(['min' => 2, 'max' => 255]), 
    ], 
   ]) 
   ->add('email', EmailType::class, [ 
    'constraints' => [ 
     new Assert\NotBlank(), 
     new Assert\Email(), 
    ], 
   ]) 
   ->add('mot_de_passe', PasswordType::class, [ 
    'constraints' => [ 
     new Assert\NotBlank(), 
     new Assert\Length(['min' => 8, 'max' => 255]),
    ], 
   ])
   ->add('sexe', ChoiceType::class, [
    'choices' => [
     'Masculin' => 'm',
     'Féminin' => 'f',
    ],
    'expanded' => true,
   ])
      ->add('accepter_conditions', CheckboxType::class)
      ->add('envoyer', SubmitType::class);
    }
}
```

Dans cet exemple, nous avons ajouté des contraintes de validation aux champs du formulaire.

Par exemple, pour le champ "name", nous avons ajouté les contraintes `NotBlank` (non vide) et `Length` (longueur minimale et maximale).

---

### 4.2 Utilisation de message personnalisés

Vous pouvez aussi préciser qu'elle message afficher quand un validation échoue:

```php
use Symfony\Component\Validator\Constraints as Assert;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
       // Code précédent
       
      ->add('nom', TextType::class, [
        'constraints' => [ 
          new Assert\NotBlank([ 'message' => 'Le champ "Nom" ne peut pas être vide.', ]), 
          new Assert\Length([ 
            'min' => 2, 
            'max' => 255, 
            'minMessage' => 'Le champ "Nom" doit contenir au moins {{ limit }} caractères.', 
            'maxMessage' => 'Le champ "Nom" ne peut pas dépasser {{ limit }} caractères.', 
          ]), 
        ],
      ])
    ;
  }
}
```

Dans cet exemple, nous avons personnalisé les messages d'erreur pour les contraintes `NotBlank` et `Length` appliquées au champ "name".

Vous pouvez utiliser des messages d'erreur statiques ou inclure des variables dynamiques, telles que `{{ limit }}`, pour afficher des messages plus précis.

---
---
---

## 5. Gestion de la soumission des formulaires

La gestion de la soumission des formulaires est une étape cruciale dans le processus de traitement des données envoyées par l'utilisateur.

Dans ce chapitre, nous allons voir comment capturer la soumission d'un formulaire dans un contrôleur Symfony, récupérer et traiter les données envoyées, effectuer des actions telles que la redirection et afficher des messages de confirmation à l'utilisateur.

---

### 5.1 Capture de la soumission du formulaire dans un contrôleur

Pour capturer la soumission d'un formulaire dans un contrôleur Symfony, vous devez utiliser la méthode `handleRequest()` sur l'objet `Request` pour lier les données du formulaire soumis à l'objet de formulaire correspondant.

Voici comment capturer la soumission du formulaire dans un contrôleur :

```php
// Code Précédent ...

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
```

Dans cet exemple, nous avons utilisé la méthode `handleRequest()` pour lier les données soumises au formulaire `$form` à partir de la requête `$request`.

Ensuite, nous avons vérifié si le formulaire a été soumis et s'il est valide en utilisant les méthodes `isSubmitted()` et `isValid()` respectivement.

Vous pouvez récupérer un tableau associatif avec les données du formulaire en utilisant la méthodes `getData()`.

Si vous avez lié un objet lors de la création du formulaire, l'instance sera irriguer avec les donnée du formulaire, dans le cas d'un entité, il ne vous reste plus qu'a l'enregistrer dans la base de données.

---

### 5.3 Redirection après soumission

Après avoir traité les données du formulaire, il est courant de rediriger l'utilisateur vers une autre page, telle qu'une page de confirmation ou une page d'accueil.

Symfony facilite la redirection en utilisant la méthode  `redirectToRoute`.

Voici comment effectuer une redirection après la soumission du formulaire dans un contrôleur :

```php
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/utilisateur', name: 'utilisateur')]
public function utilisateur(Request $req)
{
  // ...

  if ($form->isSubmitted() && $form->isValid()) {
    // Traitement des données du formulaire

    // Redirection vers une autre page
    return $this->redirectToRoute('accueil'):
  }
}
```

---

### 5.4 Flash messages pour afficher des messages de confirmation

Les flash messages sont utilisés pour afficher des messages de confirmation à l'utilisateur après la soumission d'un formulaire.

Ces messages sont généralement utilisés pour fournir un feedback rapide à l'utilisateur et lui indiquer que son action a été traitée avec succès.

Voici comment ajouter un flash message et l'afficher après la soumission du formulaire dans un contrôleur :

```php
use Symfony\Component\HttpFoundation\Session\SessionInterface;

public function contactFormSubmit(Request $request, SessionInterface $session)
{
    // ...

    if ($form->isSubmitted() && $form->isValid()) {
        // Traitement des données du formulaire

        // Ajout d'un flash message
        $session->getFlashBag()->add('success', 'Le formulaire a été soumis avec succès !');

        // Redirection vers une autre page
        return new RedirectResponse($this->generateUrl('accueil'));
    }

    // ...
}
```

Dans cet exemple, nous avons utilisé l'interface `SessionInterface` pour accéder à la session de l'utilisateur.

Nous avons ajouté un flash message à l'aide de la méthode `add()` sur le `FlashBag` de la session, en spécifiant le type du message (par exemple, 'success') et son contenu.

Le flash message sera automatiquement conservé jusqu'à la prochaine requête et peut être affiché dans la vue correspondante.

Dans la vue Twig où vous souhaitez afficher le flash message, vous pouvez utiliser la fonction `app.flashes()` pour récupérer tous les messages flash de la session et les afficher.

Voici comment afficher les flash messages dans une vue Twig :

```twig
{% for flashType, messages in app.flashes() %}
    {% for message in messages %}
        <div class="alert alert-{{ flashType }}">
            {{ message }}
        </div>
    {% endfor %}
{% endfor %}
```

Dans ce chapitre, nous avons appris à gérer la soumission des formulaires en capturant la soumission dans un contrôleur, en récupérant et en traitant les données envoyées, en effectuant des redirections après soumission et en affichant des flash messages pour informer l'utilisateur de l'état de sa soumission.

La gestion appropriée de la soumission des formulaires est essentielle pour offrir une expérience utilisateur fluide et assurer le bon fonctionnement de vos fonctionnalités de formulaire.

---
---
---

## Conclusion

Ce cours sur les formulaires avec Symfony 6 vous a permis de découvrir les concepts essentiels et les fonctionnalités clés pour créer et gérer des formulaires dans vos applications web.

Vous avez appris à :

- Créer et personnaliser des formulaires avec Symfony 6 en utilisant la classe `FormBuilder`.
- Valider les données saisies par les utilisateurs en utilisant les contraintes de validation intégrées de Symfony.
- Gérer la soumission des formulaires dans un contrôleur Symfony en capturant les données et en effectuant des actions appropriées.
- Afficher les formulaires dans des vues Twig et personnaliser leur rendu en utilisant des thèmes et des attributs HTML supplémentaires.
- Utiliser des fonctionnalités avancées des formulaires Symfony, telles que les champs imbriqués, les collections et les formulaires évolutifs.
- Préremplir les champs de formulaire en liant un objet à votre formulaire.
- Effectuer des redirections après soumission et afficher des flash messages pour informer l'utilisateur.

---

Il est important de continuer à explorer les fonctionnalités avancées des formulaires Symfony pour enrichir vos compétences en développement web:

- [Documentation officielle de Symfony sur les formulaires]([https://symfony.com/doc/current/forms.html](https://symfony.com/doc/current/forms.html))
- [Cookbook de Symfony sur les formulaires]([https://symfony.com/doc/current/form/index.html](https://symfony.com/doc/current/form/index.html))

---

Dans le prochain cours, nous aborderons l'authentification avec Symfony.

Nous explorerons les différentes méthodes d'authentification disponibles, la gestion des utilisateurs, la sécurité des mots de passe et bien plus encore.

Ce cours vous permettra de sécuriser vos applications Symfony en mettant en place des mécanismes d'authentification solides.

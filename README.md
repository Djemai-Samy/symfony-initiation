# Symfony 6: Athentification et Autorisation

## [Page officiel du cours Symfony 6: Athentification et Autorisation](https://djemai-samy.com/posts/6.symfony6-authentification.article)

![Image du cours: Symfony 6: Les formulaires avec Symfony 6](https://djemai-samy.com/blog/2.programmation/2.server/4.php/3.symfony6/1.symfony6-initiation/6.symfony6-authentification/6.symfony6-authentification.png)

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

6. [Authentification](https://djemai-samy.com/posts/6.symfony6-authentification.article)

   1. Authentification et Autorisation
      1. L'authentification
      2. L'autorisation
      3. Leur importance dans le Web
      4. Outils de gestion de l'authentification
   2. Configuration de l'authentification
      1. Installation
      2. Configuration de l'authentification
      3. Choix du système d'authentification
      4. Gestion des utilisateurs : entité User
   3. Système d'authentification
      1. Inscription
         1. Formulaire d'inscription
         2. Contrôleur pour l'inscription
      2. Authentification des utilisateurs
         1. L'authentificateur de formulaire
         2. Le contrôleur d'authentification
         3. La vue pour l'authentification
      3. La session
         1. L'utilisateur dans les contrôleurs
         2. Lutilisateur dans la vue
      4. La Déconnexion
   4. Les authorisations
      1. Contrôle d'accès dans la config
      2. Contrôle d'accès dans le contrôleur
      3. Contrôle d'accès dans la vue
      4. Rôles personnalisés
         1. Hiérarchie des rôle
         2. Rôle personnalisés dans les contrôleur
         3. Rôle personnalisés dans les Twig

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

À la fin de ce cours, vous serez en mesure de :

- **Comprendre** les **concepts** d'**authentification** et d'**autorisation** dans le contexte des applications web
- **Configurer** l'**authentification** dans Symfony en utilisant **différents systèmes** tels que les **formulaires**, **OAuth** ou **JWT**
- **Créer** un système d'**inscription** et de **connexion sécurisé** pour les utilisateurs de votre application Symfony
- **Gérer** les **rôles** et les **permissions** des utilisateurs pour **contrôler** leur **accès** aux **fonctionnalités** de l'application
- **Implémenter** des mesures de **sécurité avancées**, telles que la **protection** contre les **attaques** par **force brute**,  les **attaques CSRF**, etc.
- **Personnaliser** l'**interface** d'authentification pour offrir une **expérience utilisateur** cohérente avec votre application
- **Appliquer** les **bonnes pratiques** de **sécurité** pour **protéger** votre application Symfony contre les **failles de sécurité connues**

---

## 1. Introduction à l'authentification et l'autorisation

L'authentification et l'autorisation sont des concepts essentiels dans le développement d'applications web sécurisées.

Dans ce premier chapitre, nous allons explorer ces concepts et comprendre leur importance dans le contexte des applications Symfony 6.

Nous examinerons également les outils fournis par Symfony pour gérer l'authentification et l'autorisation de manière efficace.

---

### 1.1. Comprendre les concepts d'authentification et d'autorisation

#### 1.1.1. L'authentification

L'authentification est le processus de vérification de l'identité d'un utilisateur qui tente d'accéder à une application web.

Elle permet de s'assurer que l'utilisateur est bien celui qu'il prétend être.

Symfony propose différentes méthodes d'authentification, telles que les formulaires de connexion, l'authentification via des services externes (OAuth, JWT, etc.) ou l'authentification basée sur des tokens.

#### 1.1.2. L'autorisation

L'autorisation concerne la gestion des permissions et des droits d'accès des utilisateurs authentifiés à certaines fonctionnalités de l'application.

Elle contrôle ce que chaque utilisateur est autorisé à faire une fois connecté.

Nous discuterons du concept de rôles et de permissions, qui permettent de définir des ensembles de droits pour les utilisateurs en fonction de leur niveau d'accès.

Symfony offre plusieurs mécanismes pour contrôler l'accès aux ressources de l'application en fonction des rôles et des permissions des utilisateurs.

---

### 1.2. L'importance de l'authentification et l'autorisation dans les applications web

1. Sécurité des données : L'authentification et l'autorisation jouent un rôle clé dans la protection des données sensibles de l'application et des utilisateurs. Ils permettent de s'assurer que seules les personnes autorisées peuvent accéder à certaines parties de l'application.

2. Protection contre les attaques : Une bonne gestion de l'authentification et de l'autorisation peut prévenir les attaques telles que l'usurpation d'identité, les attaques par force brute et les injections SQL.

3. Personnalisation de l'expérience utilisateur : L'authentification et l'autorisation permettent de personnaliser l'expérience de chaque utilisateur en fonction de ses rôles et de ses permissions, offrant ainsi une interface adaptée à ses besoins.

---

### 1.3. Présentation des outils fournis par Symfony pour gérer l'authentification et l'autorisation

1. Le composant Security : Symfony fournit le composant Security, qui facilite la gestion de l'authentification et de l'autorisation dans les applications. Ce composant offre des fonctionnalités avancées et une intégration transparente avec le reste du Framework.

2. Les bundles de sécurité : Symfony propose également des bundles de sécurité qui simplifient la mise en place de certaines fonctionnalités liées à l'authentification et à l'autorisation, tels que le bundle FOSUserBundle pour la gestion des utilisateurs.

3. Configuration de la sécurité : Nous aborderons la configuration de la sécurité dans Symfony, notamment la définition des fournisseurs d'authentification, la gestion des firewalls et des stratégies d'accès.

---
---
---

## 2. Configuration de l'authentification dans Symfony

Dans ce chapitre, nous allons plonger dans la configuration de l'authentification dans Symfony 6.

Nous allons apprendre comment définir les paramètres nécessaires pour mettre en place un système d'authentification sécurisé pour votre application web.

---

### 2.1. Installation

Pour commencer, il faut d'abord installer la paquet:

```bash
composer require symfony/security-bundle
```

---

### 2.1. Configuration de l'authentification dans le fichier de configuration

La configuration de l'authentification dans Symfony se fait principalement dans le fichier `security.yaml`.

Ce fichier est responsable de la configuration du système de sécurité global de l'application.

Voici un exemple de configuration de base :

```yaml
# config/packages/security.yaml
security:
  # https://symfony.com/doc/current/security.html#registering-the-user-hashing-passwords
  password_hashers:
    Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface: 'auto'
  # https://symfony.com/doc/current/security.html#where-do-users-come-from-user-providers
  providers:
    users_in_memory: {memory: null}
  firewalls:
    dev:
      pattern: ^/(_(profiler|wdt)|css|images|js)/
      security: false
    main:
      lazy: true
      provider: users_in_memory

      # Activer les différent moyen de connexion
      # https://symfony.com/doc/current/security.html#firewalls-authentication

  # Moyen facile pour controller l'accés à de grosse section de votre site
  # Note: Seulement le premier controle d'accés trouvé est utilisé
  access_control:
    # - { path: ^/admin, roles: ROLE_ADMIN }
    # - { path: ^/profile, roles: ROLE_USER }
```

Dans cet exemple :

- Nous avons défini un encodeur pour l'entité `User` de l'application.
  - Ici, nous utilisons l'algorithme de hachage par défaut configuré pour l'entité `User`. Vous pouvez utiliser différents algorithmes de hachage tels que `bcrypt`, `argon2i`, etc.

- Nous avons configuré un fournisseur d'authentification basé sur l'entité `User` de l'application.
  - Cela permet d'interagir avec la base de données pour récupérer les informations d'authentification des utilisateurs.

- Nous avons défini un firewall nommé `main`.
  - Le firewall détermine quelles parties de l'application sont sécurisées et comment les utilisateurs accèdent aux pages sécurisées.

- Nous avons configuré le système d'authentification en utilisant le `guard authenticator` `LoginFormAuthenticator`.
  - Les `guard authenticators` sont des classes qui gèrent l'authentification dans Symfony.

---

### 2.2. Choix du système d'authentification : Formulaires, OAuth, JWT, etc

Symfony propose différentes méthodes d'authentification en fonction des besoins de votre application.

Voici quelques-unes des méthodes d'authentification les plus courantes :

1. Authentification par formulaires : Cette méthode permet aux utilisateurs de se connecter à l'application en fournissant leur nom d'utilisateur et leur mot de passe via un formulaire de connexion standard.

2. Authentification OAuth : OAuth est un protocole d'autorisation qui permet aux utilisateurs de donner accès à des applications tierces sans partager leurs identifiants. C'est souvent utilisé pour permettre aux utilisateurs de se connecter à l'application à l'aide de leurs comptes sur des réseaux sociaux ou d'autres services tiers.

3. Authentification JWT (JSON Web Tokens) : Les JWT sont des jetons d'accès auto-suffisants qui peuvent être utilisés pour vérifier l'identité de l'utilisateur. Ils sont généralement utilisés pour les applications distribuées et les API.

4. Authentification avec des certificats : Cette méthode d'authentification utilise des certificats numériques pour vérifier l'identité des utilisateurs.

Le choix du système d'authentification dépend des besoins spécifiques de votre application.

Symfony offre une grande flexibilité pour implémenter différentes méthodes d'authentification en utilisant des `guard authenticators`.

---

### 2.3. Gestion des utilisateurs : entité User

Avant de créer le système d'inscription et de connexion, nous devons mettre en place une entité User pour représenter les utilisateurs de notre application.

Voici un exemple d'entité User :

```php
<?php
// src/Entity/User.php
namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface {
  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column(type: 'integer')]
  private int $id;

  #[ORM\Column(type: 'string', length: 180, unique: true)]
  private ?string $email;

  #[ORM\Column(type: 'json')]
  private array $roles = [];

  #[ORM\Column(type: 'string')]
  private string $password;

  public function getId(): ?int {
    return $this->id;
  }

  public function getEmail(): ?string {
    return $this->email;
  }

  public function setEmail(string $email): self {
    $this->email = $email;

    return $this;
  }

  /**
   * Représentation publique de User (e.g. a username, an email, etc.)
   *
   * @see UserInterface
   */
  public function getUserIdentifier(): string {
    return (string) $this->email;
  }

  /**
   * @see UserInterface
   */
  public function getRoles(): array {
    $roles = $this->roles;
    // Yous les utilisateur on au moin le ROLE_USER
    $roles[] = 'ROLE_USER';

    return array_unique($roles);
  }

  public function setRoles(array $roles): self {
    $this->roles = $roles;

    return $this;
  }

  /**
   * @see PasswordAuthenticatedUserInterface
   */
  public function getPassword(): string {
    return $this->password;
  }

  public function setPassword(string $password): self {
    $this->password = $password;

    return $this;
  }

  /**
   * Retourne le hashage: Seulement si vous n'utiliser pas les hasheurs (e.g. bcrypt or sodium) in your security.yaml.
   *
   * @see UserInterface
   */
  public function getSalt(): ?string {
    return null;
  }

  /**
   * @see UserInterface
   */
  public function eraseCredentials(): void {
    // Si vous enregistrer temporairement des données sensible, vous pouvez les éffacer
    // $this->plainPassword = null;
  }
}
```

Dans cette entité User, nous avons des propriétés telles que l'email, le mot de passe et les rôles des utilisateurs.

Les rôles permettent de définir les permissions d'accès aux fonctionnalités de l'application.

Voici le `Repository` associé a l'entité:

```php
<?php
// src/Repository/UserRepository.php
namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class UserRepository extends ServiceEntityRepository {
  public function __construct(ManagerRegistry $doctrine) {
    parent::__construct($doctrine, User::class);
  }


  // 1. Méthode pour ajouter une User dans la base de donnée
  public function save(User $nouveauUser, ?bool $flush = false) {

    // 1.1. Persiste l'entité User dans le gestionnaire d'entités (Doctrine)
    $this->getEntityManager()->persist($nouveauUser);

    // 1.2. Tester si nous devons executer la transaction
    if($flush){
      // 1.2.2. Effectue les opérations de base de données (INSERT/UPDATE)
      $this->getEntityManager()->flush();
    }

    // 1.3. Retourner l'instance du nouveau user 
    return $nouveauUser;
  }
}
```

---

N'oubliez pas de migrer votre base de données, pour créer la table des utilisateurs:

```bash
php bin/console make:migration
```

```bash
php bin/console doctrine:migrations:migrate
```

---

Dans votre fichier de configuration de sécurité, nous allons préciser à notre provider d'utiliser l'entité que nous venons de créer ainsi que la propriété qui représente note utilisateur, dans notre cas l'email.

Puis d'activer cette authentification dans les `firewalls`.

---

NOTE: Vous pouvez utiliser le paquet `maker-bundle` automatiquement pour créer l'entité User compatible avec le composant `Security`, et mettre à jour le fichier de configurations.

```bash
php bin/console make:user
```

```bash
The name of the security user class (e.g. User) [User]:
 > User

 Do you want to store user data in the database (via Doctrine)? (yes/no) [yes]:
 > yes

 Enter a property name that will be the unique "display" name for the user (e.g. email, username, uuid) [email]:
 > email

 Will this app need to hash/check user passwords? Choose No if passwords are not needed or will be checked/hashed by some other system (e.g. a single sign-on server).

 Does this app need to hash/check user passwords? (yes/no) [yes]:
 > yes

 created: src/Entity/User.php
 created: src/Repository/UserRepository.php
 updated: src/Entity/User.php
 updated: config/packages/security.yaml
```

---
---
---

## 3. Création d'un système d'inscription et de connexion

Dans ce chapitre, nous allons aborder la création d'un système d'inscription et de connexion sécurisé pour les utilisateurs de votre application Symfony.

Nous allons nous concentrer sur l'authentification en utilisant les formulaires.

---

### 3.1. Inscription

Maintenant, nous allons créer les formulaires d'inscription pour permettre aux utilisateurs de s'inscrire à notre application.

Symfony fournit des fonctionnalités pratiques pour générer ces formulaires automatiquement, pour la démonstration, nous allons tout faire manuellement.

#### A. Formulaire d'inscription

Nous allons créer un formulaire d'inscription qui permet aux utilisateurs de fournir leur email et leur mot de passe.

Voici un exemple de création du formulaire :

```php
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

```

#### B. Contrôleur pour l'inscription

Nous allons créer une contrôleur pour gérer l'inscription et la connexion:

```php
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
  public function connexion(): Response {
    // Implementer le login plus tard
    return $this->render('authentification/login.twig', [
      'controller_name' => 'LoginController',
    ]);
  }
}

```

1. On crée une nouvelle instance de la classe `User` qui est supposée représenter un utilisateur.

2. On crée un formulaire à l'aide de la méthode `$this->createForm()`.

3. On utilise  la méthode `$form->handleRequest($request)` pour associer les données soumises dans la requête au formulaire créé. Cela permet de valider les données et de les rendre disponibles pour la manipulation ultérieure.

4. On vérifie ensuite si le formulaire a été soumis (`$form->isSubmitted()`) et s'il est valide (`$form->isValid()`). Si c'est le cas, cela signifie que l'utilisateur a rempli le formulaire correctement:
1. On utilise `$passwordHasher->hashPassword()` pour hasher le mot de passe fourni par l'utilisateur. Le mot de passe est obtenu à partir de l'objet `$user` en utilisant la méthode `$user->getPassword()`.
2. On utilise ensuite `$user->setPassword($hashedPassword)` pour mettre à jour le mot de passe de l'utilisateur avec la version hachée.
3. On utilise la méthode `save()` pour enregistrer l'utilisateur dans la base de données.
4. On redirige l'utilisateur vers la route de `login` définit plus bas.

5. Si le formulaire n'est pas soumis ou s'il n'est pas valide, la méthode renvoie la vue de l'inscription. Cette vue est rendue avec les variables supplémentaires `registrationForm` qui représente le formulaire créé et `form->createView()` qui génère la représentation du formulaire.

---

#### C. La vue pour l'inscription

Pour afficher le formulaire, nous allons créer une template qui hérite de la template de base:

```twig
{% extends 'layout/base.twig' %}

{% block title %}
Inscription
{% endblock %}

{% block body %}
<h1>Inscription</h1>

{{ form_start(registrationForm) }}

  {{ form_widget(registrationForm.email) }}
  {{ form_errors(registrationForm.email) }}

  {{ form_widget(registrationForm.password) }}
  {{ form_errors(registrationForm.password) }}
  
  {{ form_widget(registrationForm.submit, {'label':'Inscription'}) }}
{{ form_end(registrationForm) }}

{% endblock %}

```

Maintenant si vous accéder à la route `/register`, vous trouverez le formulaire d'inscription.

Une fois que vous valider, un nouvel utilisateur sera ajouté dans votre base de données, et vous serez rediriger vers la page de login.

L'inscription est terminé, nous pouvons maintenant passé à l'authentification.

---

### 3.2. Authentification des utilisateurs avec Symfony

Dans votre **fichier** de **configuration** de **sécurité**, nous allons :

1. **Préciser** à notre **fournisseur** d'utiliser l'**entité** que nous venons de **créer** ainsi que la **propriété** qui **représente** notre **utilisateur**, dans notre cas l'**email**.
2. **Activer** le **fournisseur** dans les `firewalls`.

```yaml
# config/packages/security.yaml
security:
    
    # ...
    
  providers:
    app_user_provider:
      entity:
        class: App\Entity\User
        property: email
    
  firewalls:
    dev:
      pattern: ^/(_(profiler|wdt)|css|images|js)/
      security: false
    main:
      lazy: true
      provider: app_user_provider

# ...

```

Maintenant que nous avons **mis en place** le **formulaire d'inscription** et utiliser l'**entité** `User` autant que fournisseur, nous pouvons passer à l'étape de l'**authentification** des utilisateurs.

Nous pouvons **utiliser** un **authenticator personnalisé** pour **gérer** le **processus** d'authentification.

Pour notre **démonstration**, nous allons **utiliser** l'**authentificateur native** pour **formulaire** de symfony.

#### 3.3.1 L'authentificateur de formulaire

l'authenticator de formulaire native sera utilisé pour vérifier les informations d'identification fournies par l'utilisateur et créer une session d'authentification.

L'authenticator intercepte les requêtes `POST` sur la route du login préciser

Pour l'activer, il suffit d'ajouter sa configuration dans le `firewalls`:

```yaml
# Dans config/packages/security.yaml

security:
    
    # ...
    
  firewalls:
    dev:
      pattern: ^/(_(profiler|wdt)|css|images|js)/
      security: false
    main:
      lazy: true
      provider: app_user_provider

      # Activez les différents moyen d'authentification
      # https://symfony.com/doc/current/security.html#the-firewall
      form_login:
      
        # "app_login" le nom de la route pour le login
        login_path: app_login
        check_path: app_login
        
        username_parameter: email
        password_parameter: password
        
        # L'url de redirection aprés une authentification réussie
        default_target_path: /profil

```

- `login_path` et `check_path`: La route a intercepter pour géré l'authentification
- `username_parameter`: Le nom du paramètre du formulaire à associé avec `username` (Par défaut: `_username`)
- `password_parameter`: Le nom du paramètre du formulaire à associé avec `password` (Par défaut: `_password`)
- `default_target_path`: L'url de redirection après une authentification réussie (Par défaut: `/`)

---

#### 3.3.2. Le contrôleur d'authentification

Comme l'authentificateur prends en charge l'authentification et la redirection, notre contrôleur n'a pour but que d'afficher le formulaire d'authentification.

Il a accès à quelque données utile de l'authentification à travers un objet de type `AuthenticationUtils`, comme par exemple les erreurs, ou le dernier identifiant utilisé dans l'inscription (dans notre cas l'email).

Dans cet exemple, nous utilisons la méthode `getLastAuthenticationError()` pour récupérer les éventuelles erreurs d'authentification.

La méthode `getLastUsername()` nous permet de récupérer le dernier nom d'utilisateur (email) utilisé dans le formulaire de connexion.

Ensuite, nous pouvons passer ces informations à notre template Twig correspondant pour afficher les messages d'erreur ou préremplir le champ d'email.

```php
// src/Controller/AthentificationController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AthentificationController extends AbstractController
{
  // Code Précédent ...
  
  #[Route('/login', name: 'app_login')]
  public function login(Request $request, AuthenticationUtils $authenticationUtils) {
    $error = $authenticationUtils->getLastAuthenticationError();
    $lastEmail = $authenticationUtils->getLastUsername();

    $form = $this->createForm(UserForm::class);

    return $this->render('login/login.twig', [
      'last_email' => $lastEmail,
      'error' => $error,
      'loginForm' => $form->createView(),
    ]);
  }
}

```

---

#### 3.3.3. La vue pour l'authentification

Dans le template Twig associé, nous allons afficher un formulaire.

Vous pouvez utiliser les variables pour afficher les messages d'erreur ou préremplir le champ d'email :

```twig
{# Dans le ficher: 'authentification/login.twig' #}
{% extends 'layout/base.twig' %}

{% block title %}
  Connexion
{% endblock %}

{% block body %}
  <h1>Connexion</h1>

  {{ form_start(loginForm) }}

    {{ form_widget(loginForm.email, {'full_name':'email', 'value': last_email}) }}
    {{ form_errors(loginForm.email) }}

    {{ form_widget(loginForm.password, {'full_name':'password'}) }}
    {{ form_errors(loginForm.password) }}
    
    {{ form_widget(loginForm.inscription) }}
  {{ form_end(loginForm) }}

  {% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
  {% endif %}

{% endblock %}

```

Lorsque l'utilisateur soumet le formulaire, les informations d'identification sont envoyées à l'authenticator.

Ce dernier va vérifier les identifiants fournis et, en cas de succès, créer une session d'authentification pour l'utilisateur.

Il est important de noter que Symfony gère automatiquement la création et la gestion des sessions d'authentification, ainsi que la génération des cookies de session.

---

### 3.3 Page de profil

Une fois connecté, l'utilisateur est redirigé vers la page de profil.

Maintenant que le système d'authentification est en place, vous pouvez accéder l'entité de l'utilisateur connecté dans vos views.

#### 3.3.1. Contrôleur

Pour récupérer l'entité `User` de l'utilisateur connecté dans vos contrôleurs, il suffit d'utiliser la méthode `getUser()` hérité de `AbstractController`:

```php
<?php
// src/Controller/ProfilController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController {
  #[Route("/profil", name: "profil")]
  public function profil() {
    // Récuperer l'utilisateur depuis la séssion
    $user = $this->getUser();

    // ... Faire ce que vous voulez avec, comme récuperer des données ect...

    // Retourner la vue associé
    return $this->render('profil/profil.twig');
  }
}

```

---

#### 3.3.2. La vue

Pour récupérer l'entité `User` de l'utilisateur connecté dans vos vue, il suffit d'utiliser l'objet `app.user`:

```twig
{# Dans le fichier: templates/profil/profil.twig #}
{% extends 'layout/base.twig' %}

{% block title %}
 Profil
{% endblock %}

{% block body %}
  <h1>Profil de {{ app.user.email }}</h1>
{% endblock %}

```

---
---

### 3.4. Logout

Pour activer la déconnexion, il suffit d'ajouter sa configuration dans le `firewalls`:

```yaml
# Dans config/packages/security.yaml

security:
    
    # ...
    
  firewalls:
    # ...
    main:
      # ...
      logout:
        # "app_logout" le nom de la route pour la déconnexion
        path: app_logout
```

Dans notre contrôleur `AuthentificationController` nous allons ajouter une route vide, car le reste sera gérer par l'authenticator.

```php
// src/Controller/SecurityController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

  #[Route('/logout', name: 'app_logout')]
  public function logout() {
    // Controleur peut etre vide!
  }

}

```

---
---
---

## 4. Contrôle d'accès

Dans ce chapitre, nous allons explorer la gestion des autorisations et des rôles dans Symfony.

Les rôles permettent de définir les permissions accordées à différents utilisateurs de l'application.

Symfony offre un système de gestion des rôles puissant qui s'intègre parfaitement avec le composant de sécurité.

Les rôles sont définis au niveau de l'entité `User` ou dans une table dédiée de la base de données.

Chaque utilisateur peut se voir attribuer un ou plusieurs rôles, qui déterminent les actions qu'il est autorisé à effectuer dans l'application.

---

### 4.1. Contrôle d'accès dans la config

Vous pouvez restreindre l'accès a des section entière de votre site dans le fichier `congif/packages/security.yaml`.

Vous pouvez déterminer un ensemble de route ainsi que les rôle qui peuvent y avoir accès:

```yaml
security:
  access_control:
   - { path: '^/routes', roles: [ROLE] }

```

Les utilisateur ne possèdent pas les rôle nécessaire aurons un message d'erreur `Access Denied`., nous verrons plus tard comment le customiser.

Par exemple, nous pouvons restreindre l'accès à la page de profil en ajoutant un contrôle d'accès a la route seulement pour les utilisateur aillant le rôle `IS_AUTHENTICATED_FULLY`:

```yaml
security:
  # Code précédent
  
  # Méthode facile pour contrôler l'accés a des portion de votre site
  # Note: seul la premièr contrôle d'accées corespoendant sera utilisé
  access_control:
   - { path: '^/profil', roles: [IS_AUTHENTICATED_FULLY] }
```

Quand un utilisateur non authentifié essai d'accéder à la route `profil` il sera rediriger vers la page d'authentification.

---

### 4.2. Contrôle d'accès dans le contrôleur

Vous pouvez aussi  de savoir si l'utilisateur possède le une rôle dans vos contrôleur avec la méthode hérité de `AbstractController`:

```php
function isGranted(mixed $attribute, mixed $subject = null) : bool;
```

Il est aussi possible d'interdire l'accès et de retourner un `Access Denied` avec la méthode:

```php
function denyAccessUnlessGranted(
 mixed $attribute,  
 mixed $subject = null,  
 string $message = "Access Denied."
 ) : void;
```

Par exemple dans notre route pour l'inscription et la connexion, nous pouvons vérifier si l'utilisateur possède le rôle `IS_AUTHENTICATED_FULLY`  et le rediriger vers la page de `profil`.

```php
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

```

---

### 4.3. Contrôle d'accès dans la vue

Vous pouvez aussi  contrôler l'affichage de vos template en utilisant les rôles.

Dans vos Twig, vous avez accès à la fonction

```php
function is_granted(string $role) : bool;
```

Par exemple, nous pouvons l'utiliser dans notre barre de navigation:

```twig
<header>
  <nav>
    <a href={{ path('accueil') }}>Accueil</a>
      
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
    
      <a href={{ path('profil') }}>Profil</a>
      <a href={{ path('app_logout') }}>Déconnexion</a>

    {% else %}

      <a href={{ path('app_register') }}>Inscription</a>
      <a href={{ path('app_login') }}>Connexion</a>

    {% endif %}
  </nav>
</header>
```

---

### 4.4. Rôles personnalisés

Dans Symfony, vous pouvez créer des rôles personnalisés pour répondre aux besoins spécifiques de votre application.

#### A. Hiérarchie des rôle

Pour créer un rôle personnalisé, vous devez :

1. Définir les rôles dans le fichier de configuration de sécurité (`security.yaml`) ou dans une table de base de données dédiée.
2. Attribuer les rôles aux utilisateurs dans votre système de gestion des utilisateurs, par exemple lors de l'inscription ou dans l'interface d'administration.

Voici un exemple de définition de rôles personnalisés dans le fichier `security.yaml` :

```yaml
# security.yaml
security:
  # Code précédent ... 

  role_hierarchy:
    ROLE_ADMIN: [ROLE_USER]
  access_control:
    - { path: '^/profil', roles: [ROLE_USER] }
    - { path: ^/admin, roles: ROLE_ADMIN }
```

Dans cet exemple, nous définissons un rôle hiérarchique où `ROLE_ADMIN` hérite des permissions accordées par `ROLE_USER`.

Cela signifie qu'un utilisateur avec le rôle `ROLE_ADMIN` possède également les permissions accordées par `ROLE_USER` et peux accéder à n'importe qu'elle ressource accessible par `ROLE_USER`, et donc pourront accéder aux url commençant par :`/profil`.

Par contre les utilisateur avec le rôle `ROLE_USER` ne pourrons pas accéder aux ressource de `ROLE_ADMIN`, et donc ne pourront pas accéder aux url commençant par `/admin`

---

#### B. Rôle personnalisées dans les contrôleur

Nous pouvons maintenant tester si un utilisateur est un ROLE_USER ou un ROLE_ADMIN dans nos contrôleurs.

Nous pouvons par exemple restreindre l'accès à une page d'administration que pour les utilisateurs authentifié et aillant le rôle ROLE_ADMIN.

Les autres seront rédiriger vers la page de connexion ou de profil:

```php
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
```

---

#### C. Rôle personnalisés dans les Twig

De la même manière nous pouvons connaitre et tester le rôle de l'utilisateur dans nos templates.

Par exemple dans la barre de navidation pour afficher le lien de navigation vers la route `dashboard` pour les utilisateur aillant le rôle `ROLE_ADMIN`

```twig
{# Dans le fichier: /templates/layout/base.twig #}

{# Code précédent ... #}

<header>
  <nav>
    
    {# Code précédent ... #}

    {% if is_granted('ROLE_ADMIN') %}
      <a href={{path('admin')}}>Administration</a>
    {% endif %}
  </nav>
</header>

{# Code précédent ... #}
```

Dans ce cas, nous utilisons la fonction `is_granted()` de Twig pour vérifier si l'utilisateur actuel possède le rôle `ROLE_ADMIN`. Si c'est le cas, nous pouvons afficher des éléments spécifiques dans le template.

---
---
---

## 5. Conclusion

Ce cours sur l'authentification et l'autorisation avec Symfony vous a permis de comprendre et de mettre en pratique les concepts essentiels liés à la sécurité dans le développement web.

### 5.1. Récapitulatif des concepts clés

1. Authentification : Le processus d'identification des utilisateurs et de vérification de leurs identités pour accéder aux ressources d'une application.

2. Autorisation : Le processus de contrôle des droits d'accès des utilisateurs et de définition des permissions pour limiter leur accès aux différentes fonctionnalités de l'application.

3. Configuration de l'authentification : La mise en place des paramètres et des systèmes d'authentification appropriés dans Symfony, tels que les formulaires, OAuth, JWT, etc.

4. Gestion des utilisateurs : La création de l'entité User, la gestion des rôles et des permissions pour définir les droits des utilisateurs.

5. Création de formulaires d'inscription et de connexion : La création des interfaces utilisateur permettant aux utilisateurs de s'inscrire et de se connecter à l'application.

6. Validation des données et gestion des erreurs : La validation des données saisies par les utilisateurs lors de l'inscription et la gestion des erreurs pour fournir un retour d'information clair.

7. Contrôle d'accès basé sur les rôles : La mise en place de contrôles d'accès pour limiter l'accès aux ressources en fonction des rôles attribués aux utilisateurs.

### 5.2. Ressources supplémentaires pour approfondir l'authentification et l'autorisation

1. Documentation officielle de Symfony :
   - [Authentification](https://symfony.com/doc/current/security.html)
   - [Autorisation](https://symfony.com/doc/current/security.html#access-control-authorization)
   - [Contrôle d'accès](https://symfony.com/doc/current/security/access_control.html)

2. Blogs et forums communautaires :
   - [Le blog Symfony](https://symfony.com/blog)
   - [Stack Overflow](https://stackoverflow.com/questions/tagged/symfony)

---
---
---

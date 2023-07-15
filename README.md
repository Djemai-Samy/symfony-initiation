# ORM: Doctrine

## [Page officiel du cours Symfony 6: ORM Doctrine](https://djemai-samy.com/posts/3.symfony6-doctrine.article)

![Image du cours: Symfony 6: ORM Doctrine](https://djemai-samy.com/blog/2.programmation/2.server/4.php/3.symfony6/1.symfony6-initiation/3.symfony6-doctrine/3.symfony6-doctrine.png)

Ce support de cours mettra l'accent sur la gestion des bases de données avec Symfony.

Vous apprendrez à configurer et à utiliser Doctrine, l'ORM (Object-Relational Mapping) de Symfony, pour interagir avec votre base de données.

Vous découvrirez les concepts fondamentaux de la base de données relationnelle et apprendrez comment créer, lire, mettre à jour et supprimer des données à l'aide de Doctrine.

La branche 'main' contient le code de départ de chaque chapitre de la série de cours.

---

## Prérequis

- Connaissance de base en programmation web ([HTML](https://djemai-samy.com/posts/0.html-initiation), [CSS](https://djemai-samy.com/posts/0.css-initiation) et [PHP](https://djemai-samy.com/posts/0.php-initiation))
- Compréhension des concepts de base du modèle MVC (Modèle-Vue-Contrôleur)
- Connaissance sur la programmation orientée objet avec PHP
- [Familiarité avec le framework Symfony (concepts de base, installation, configuration)](https://djemai-samy.com/posts/1.symfony6-introduction.article)
- [Savoir créer et uriliser ses contrôleurs avec Symfony 6)](https://djemai-samy.com/posts/2.symfony6-controller.article)

---

## Plan du cours

## Programme

[Vous pouvez suivre la serie d'initiation au Framework Symfony 6 complète directement sur le site:](https://djemai-samy.com/posts/0.symfony6-initiation)

1. [Introduction](https://djemai-samy.com/posts/1.symfony6-introduction.article)

2. [Les Contrôleurs](https://djemai-samy.com/posts/2.symfony6-controller.article)

3. [ORM Doctrine](https://djemai-samy.com/posts/3.symfony6-doctrine.article)
   1. Introduction à Doctrine
      1. Avantage de l'utilisation de Doctrine
      2. Installation et configuration de Doctrine
      3. Connexion à la base de données
      4. Créer la base de données
   2. Entity et Repository
      1. Définitaion des entité
      2. Définition du Repository
      3. Migrations: Mise à jour de la base de données
   3. Cas pratique: CRUD
      1. Création d'éléments
      2. Récuperer tous les films
      3. Récupérer un film avec son identifiant
      4. Mettre à jour une film
      5. Supprimer un film
   4. Rélations entre entité
      1. Création de la relation
      2. Ajouter des commenaires
      3. récuperer des commentaires

4. [Les vues avec Twig](https://djemai-samy.com/posts/4.symfony6-views.article)

5. [Les Formulaires](https://djemai-samy.com/posts/5.symfony6-forms.article)

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

- **Comprendre** le **rôle** de **Doctrine** dans la **gestion** de la **base de données** dans Symfony.
- **Configurer** la **connexion** à la **base de données** dans Symfony.
- **Utiliser** les **attributes** pour **définir** des **entités** et des **relations**.
- **Créer** des **requêtes** de **lecture**, d'**écriture** et de **suppression** à l'**aide** du langage **DQL** (Doctrine Query Language).
- **Utiliser** les **migrations** pour **gérer** les **modifications** de **schéma** de base de données.
- **Gérer** les **transactions** et les **relations** entre les **entités**.

---
---
---

## 1. Introduction à Doctrine et à l'ORM

Doctrine est une bibliothèque PHP puissante qui facilite la manipulation des données dans une base de données relationnelle.

Il s'agit d'un ORM (Object-Relational Mapping), ce qui signifie qu'il permet de représenter les données de la base de données sous forme d'objets PHP. Ainsi, au lieu de manipuler directement des requêtes SQL, nous travaillons avec des entités et des objets PHP.

### 1.1. Avantages de l'utilisation de Doctrine

L'utilisation de Doctrine présente plusieurs avantages :

- Productivité accrue : Avec Doctrine, vous pouvez vous concentrer sur les objets et la logique métier plutôt que sur les requêtes SQL. Cela permet d'accélérer le développement et de réduire les erreurs.

- Portabilité : Doctrine prend en charge plusieurs SGBD (Systèmes de Gestion de Bases de Données) tels que MySQL, PostgreSQL, SQLite, etc. Vous pouvez facilement changer de SGBD sans avoir à réécrire votre code.

- Gestion avancée des relations : Doctrine facilite la définition et la gestion des relations complexes entre les entités, telles que les relations One-to-One, One-to-Many et Many-to-Many.

### Installation et configuration de Doctrine

Pour commencer à utiliser Doctrine, nous devons l'installer et le configurer dans notre projet Symfony. Voici les étapes à suivre :

Vous pouvez installer Doctrine en exécutant la commande suivante dans le répertoire racine de votre projet Symfony :

```bash
composer require orm
```

### 1.2. Configuration de Doctrine

La configuration de Doctrine se fait dans le fichier `config/packages/doctrine.yaml`.

Voici un exemple de la configuration par défaut :

```yaml
doctrine:
    dbal:
        url: '%env(resolve:DATABASE_URL)%'

  # IMPORTANT: Vous devez configurer la version du serveurs de votre base de données ici, ou dans le fichier .env dans la variable DATABASE_URL
    orm:
        auto_generate_proxy_classes: true
        enable_lazy_ghost_objects: true
        report_fields_where_declared: true
        validate_xml_mapping: true
        naming_strategy: doctrine.orm.naming_strategy.underscore_number_aware
        auto_mapping: true
        mappings:
            App:
                is_bundle: false
                dir: '%kernel.project_dir%/src/Entity'
                prefix: 'App\Entity'
                alias: App

when@test:
    doctrine:
        dbal:
            # "TEST_TOKEN" is typically set by ParaTest
            dbname_suffix: '_test%env(default::TEST_TOKEN)%'

when@prod:
    doctrine:
        orm:
            auto_generate_proxy_classes: false
            proxy_dir: '%kernel.build_dir%/doctrine/orm/Proxies'
            query_cache_driver:
                type: pool
                pool: doctrine.system_cache_pool
            result_cache_driver:
                type: pool
                pool: doctrine.result_cache_pool

    framework:
        cache:
            pools:
                doctrine.result_cache_pool:
                    adapter: cache.app
                doctrine.system_cache_pool:
                    adapter: cache.system
```

### 1.3. Connexion à la base de données

Vous pouvez indiquer le `dsn` de connexion à la base de données dans le fichier `.env` à la racine du projet.

Dépendant de quelle base de données vous utiliser la valeur peut changer, voici un exemple avec MySql:

```bash
# IMPORTANT: Vous devez configurer votre version de serveur ici ou dans onfig/packages/doctrine.yaml

DATABASE_URL="mysql://utilisateur:motdepasse@127.0.0.1:3306/base?serverVersion=8.0.31&charset=utf8"
```

Vous pouvez retrouver l'équivalent pour d'autres base de données dans  [la documentation officielle de Symfony6](https://symfony.com/doc/current/doctrine.html#configuring-the-database)

### 1.4. Créer la base de données

Doctrine offre plusieurs commandes utiles pour gérer la base de données, nous pouvons par exemple créer la base de données en utilisation la commande:

```bash
php bin/console doctrine:database:create
```

Ou plus facilement avec symfony-cli:

```bash
symfony console doctrine:database:create
```

---

## 2. Entité et Repository

Les **entités** sont des **classes PHP** qui **représentent** les **objets métier** de notre application, ils nous **permettent** de **construire** des **objets** représentant une **ligne** d'une **table** dans la base de données.

Ils nous permette d'**avoir** une répresentation des **tables** sous forme d'**objets** de la classe `Entity`.

Les **entités** permettent aussi la **synchronisation** des **colonnes** des **table** avec les **propriétés** de la **classe** ``Entity`` ce qui **facilite** la **création** et la **mise à jour** des **tables**.

Les **repositories**, quant à eux, sont des **classes** qui **fournissent** des **méthodes** pour **interagir** avec les **entités** dans la base de données.

Ils ressemblent un peu à la **couche Model** dans l'**architecture MVC**.

![Representation graphique du lien entre contrôleur, Entiry et Repository de Symfony 6. Les contrôlleurs peuvent créer des instance de l'entité, la peuplée avec les données de la requête, et l'enregistrer en utilisant le Repository. Ils utilise aussi les Repository pour récuperer les données dan la base de données sou forme d'entité.](https://djemai-samy.com/blog/2.programmation/2.server/4.php/3.symfony6/1.symfony6-initiation/3.symfony6-doctrine/3.symfony6-doctrine-1-entity-repository.svg)

Par conventions, les **entités** sont généralement **situées** dans le **répertoire** `src/Entity` et les **repositories** sont généralement **situés** dans le **répertoire** `src/Repository`.

### 2.1. Définition des entités

Pour créer une entité, nous allons utiliser une classe PHP et y définir les propriétés correspondantes aux colonnes de la table dans la base de données, et contiendra aussi des accesseurs et mutateurs.

Voici un exemple d'une entité Film :

```php
<?php

namespace App\Entity;

use App\Repository\FilmRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilmRepository::class)]
class Film
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }
}

```

Dans cet exemple, nous avons défini une entité `Film` avec des attributs Doctrine pour définir chaque propriétés représentant une colonne de la table:

- une propriété `id`: Générer automatiquement lors de la création
- une propriété `title`: de type `string` et une taille maximale de 255 caractères.

Nous avons également utilisé des annotations Doctrine pour spécifier quelle `FilmRepository` est lié a l'entité.

### 2.2. Définition du Repository

Le repository associé à une entité nous permet d'effectuer des opérations de persistance et de récupération des données.

Un `Repository` doit étendre de la classe `ServiceEntityRepository` et héritera de quelque méthodes afin de récupérer des données:

- `find($id, $lockMode = null, $lockVersion = null)`: Permet de récupérer un élément en utilisant son identifiant.
- `findOneBy(array $criteria, array $orderBy = null)`: Permet de récupérer une élément suivant des critère de sélection
- `findAll()`: Récupérer tous les éléments
- `findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)`: Récupérer plusieurs élément en suivant des critères de sélection.

Nous allons aussi injecter un gestionnaire d'entités dans le constructeur de la classe, un objet de type `ManagerRegistry`.

Le gestionnaire d'entités est responsable de la gestion des entités, de la persistance des objets en base de données et de la coordination des opérations entre l'application Symfony et la base de données.

Voici à quoi ressemble un Repository basiques :

```php
<?php
// src/Repository/FilmRepository.php
namespace App\Repository;

use App\Entity\Film;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Film>
 * La classe hérite de ces méthodes
 * @method Film|null find($id, $lockMode = null, $lockVersion = null)
 * @method Film|null findOneBy(array $criteria, array $orderBy = null)
 * @method Film[]    findAll()
 * @method Film[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FilmRepository extends ServiceEntityRepository
{
  public function __construct(ManagerRegistry $doctrine)
  {
    parent::__construct($doctrine, Film::class);
  }

  // Nous ajouterons plus tard ici des méthodes pour interagir avec la base de données
}
```

### 2.3. Migrations: Mise à jour de la base de données

Maintenant que nous avons défini nos entités, nous devons mettre à jour la base de données pour refléter ces changements.

A chaque changement de vos entités, voudevrez migrer votre base de données.

Nous allons installer un package afin de créer ces migrations en ligne de commande:

```bash
composer require --dev symfony/maker-bundle
```

Puis nous allons créer une migration en lançcant la commande suivante :

```bash
php bin/console make:migration
```

Cette commande générera un fichier de migration basé sur les différences détectées entre vos entités et la structure actuelle de la base de données.

Ensuite, exécutez la commande suivante pour appliquer la migration :

```bash
php bin/console doctrine:migrations:migrate
```

Cela mettra à jour votre base de données avec les nouvelles tables et les relations définies dans vos entités.

## 3. CRUD: Utilisation

### 3.1. Création d'éléments

Pour créer des élément, nous devons créer une entité, la populer avec les données nécessaires puis la sauvegarder dans la base de donnée en utilisant les méthodes `persist()` et `persist()`.

1. **utiliser** la **méthode** `persist()` du gestionnaire d'entités pour ajouter l**enregistrement** de l'entité dans la prochaine transaction.
2. Tester si nous voulons exécuter la transaction.
     2. Utiliser la **méthode** `flush()` pour **exécuter** les **opérations** sur la base de données (`INSERT`/`UPDATE`).
3. Retourner l'instance du nouveaux film.

---

```php
<?php
// src/Repository/FilmRepository.php

class FilmRepository extends ServiceEntityRepository {

  // ... Code précédent

  // 1. Méthode pour ajouter une Film dans la base de donnée
  public function save(Film $nouveauFilm, ?bool $flush = false) {

    // 1.1. Persiste l'entité Film dans le gestionnaire d'entités (Doctrine)
    $this->getEntityManager()->persist($nouveauFilm);

    // 1.2. Tester si nous devons executer la transaction
    if($flush){
      // 1.2.2. Effectue les opérations de base de données (INSERT/UPDATE)
      $this->getEntityManager()->flush();
    }

    // 1.3. Retourner l'instance du nouveau film 
    return $nouveauFilm;
  }
}
```

Nous pouvons maintenant l'utiliser dans un controlleur en injectant un objet de type `FilmRepository`.

Pour **créer** un **élément** dans la base de données, vous devez **d'abord créer une instance de l'entité** correspondante, puis **définir** les **valeurs** des **propriétés nécessaires**, en **utilisant** les **méthodes** d'**accessibilité** de l'entité.

Dans le Contrôleur `FilmControlleur`:

1. **Créer** une **route** sur l'**url** `/films` acceptant les requêtes de type `POST`.
2. **Déclarer** l'**action** associée, en **injectant** la **requête** et une instance du **repository**.
    1. **Vérifier** si le **corps** de la **requête** est **vide** ou ne **contient pas** le **titre**, **retourner** un message d'**erreur**.
    2. **Sinon**, **Récuperer** le `titre` du **corps** de la requête.
    3. **Créer** une **instance** de l'**entité** `Film`.
    4. **Peupler** l'**entité** avec les **données** reçues dans la requête.
    5. **utiliser** la **méthode** `save()` du **repository** pour **enregistrer** le film dans la **base de données**

 ```php
// Code précédent...

// 1. Route associé a l'url '/films' pour ajouter un film
#[Route('/films', name: 'films.ajout', methods: ['POST'])]

// 2. Action pour ajouter une film dans la base données en utilisant le repository
function ajout(Request $req, FilmRepository $repository) {

  // 2.1 Vérifier si le corps de la requête est vide ou si la clé titre n'existe pas
  f (!$req->getContent() || !$req->getPayload()->has('titre')) {
    return $this->json(
      ['erreur' => 'Il manque le titre!'], 
      Response::HTTP_BAD_REQUEST
    );
  }

  // 2.2. Récuperer les données du corps de la requête
  $titre = $req->getPayload()->get('titre');

  // 2.3. Créer une instance de l'entité et la peupler
  $film = (new Film())->setTitre($titre);

  // 2.4 utiliser le repository pour enregistrer le nouveau film dans la base de données
  $nouveauFilm = $repository->save($film);

  return $this->json(
    ['film' => $nouveauFilm->getTitre() . 'ajouté. ID: ' . $nouveauFilm->getId()],
    Response::HTTP_OK
  );
}
 ```

---

### 3.2. Récupérer tous les films

Pour récupérer tous les films de la base données, nous pour utiliser la méthode `findAll()` héritée de la classe `ServiceEntityRepository`:

 ```php
// Code pécédent...

#[Route('/films', name: 'films.tout', methods: ['GET'])]
function tout(Request $req, FilmRepository $repository) {

  // Récuperer un tableau d'entité Film
  $films = $repository->findAll();

  // Les mettre dans un tableau associatif pour les envoyer en json
  $filmTableau = [];
  foreach ($films as $film) {
    $filmTableau[] = ['id' => $film->getId(), 'titre' => $film->getTitre()];
  }
  return $this->json(
    ['films' => $filmTableau],
    Response::HTTP_OK
  );
}
 ```

---

### 3.3. Récupérer un film avec son identifiant

Pour récupérer tous les films de la base données, nous pour utiliser la méthode `findAll()` hérité de la classe `ServiceEntityRepository`:

 ```php
// Code pécédent...

#[Route('/films/{id}', name: 'films.film', methods: ['GET'])]
function getById(Request $req, FilmRepository $repository, int $id) : Response{

  // Récuperer une entité Film avec son identifiant
  $film = $repository->find($id);

  // Verifier si elle n'existe pas
  if(!$film){
    return $this->json(['erreur'=>'Film introuvable'], Response::HTTP_NOT_FOUND);
  }

  return $this->json(
    ['film' => ['id'=>$film->getId(), 'titre'=>$film->getTitre()]], 
    Response::HTTP_OK);
}
```

---

### 3.4. Récupérer un film avec son titre

Pour récupérer un film en utilisant son nom, nous pouvons utiliser la méthode `findOneBy()` hérité de la classe `ServiceEntityRepository`:

 ```php
// Code pécédent...

#[Route('/films/titre/{titre}', name: 'films.film.titre', methods: ['GET'])]
function getByTitre(Request $req, FilmRepository $repository, string $titre) : Response{

  // Récuperer une entité Film avec son identifiant
  $film = $repository->findOneBy(['titre' => $titre],);

  // Verifier si elle n'existe pas
  if(!$film){
    return $this->json(['erreur'=>'Film introuvable'], Response::HTTP_NOT_FOUND);
  }

  return $this->json(
    ['film' => ['id'=>$film->getId(), 'titre'=>$film->getTitre()]], 
    Response::HTTP_OK);
}
```

---

### 3.5. Mettre à jour une film

Pour mettre à jour un film, nous pouvons ajouter une méthode à la classe `FilmRepository` qui permet de savegarder:

```php
//src/Repository/FilmRepository

// Code pécédent

// Méthode pour mettre à jour une Film dans la base de donnée
public function save(Film $film) {
  // Persister l'entité
  $this->getEntityManager()->persist($film);
  // Effectuer la transaction
  $this->getEntityManager()->flush();

  return $film;
}
```

Puis dans le controlleur, nosu devons:

1. Récuperer l'entité Film avec son identifiant
2. Retourner un message d'erreur si il n'existe pas
3. Mettre à jour le titre
4. Effectuer une sauvegarde
5. Retourner le film mis à jour

```php
// Code pécédent...

#[Route('/films/{id}', name: 'films.update.titre', methods: ['PUT'])]
function updateTitre(Request $req, FilmRepository $repository, int $id) : Response{

  // Retourner une erreur si pas de corps ou pas de clé titre
  if(!$req->getContent() || !$req->getPayload()->has('titre')){
    return $this->json(['erreur'=>'Titre obligatoire'], Response::HTTP_NOT_FOUND);
  }

  // 1. Récuperer une entité Film avec son identifiant
  $film = $repository->find($id);

  // 2. Retourner une erreur si le film n'existe pas
  if(!$film){
    return $this->json(['erreur'=>'Film introuvable'], Response::HTTP_NOT_FOUND);
  }
  // 3. Mettre à jour le titre
  $film->setTitre($req->getPayload()->get('titre'));

  // 4. Effectuer une sauvegarde
  $filmAjour = $repository->save($film);

  // 5. Retourner le film mis à jour
  return $this->json(
    ['film' => ['id'=>$filmAjour->getId(), 'titre'=>$filmAjour->getTitre()]], 
    Response::HTTP_OK);
}
```

---

### 3.6. Supprimer un film

Pour supprimer un film, nous allons ajouter une méthode à la classe `FilmRepository` qui permet de supprimer et executer la transaction:

```php
//src/Repository/FilmRepository

// Code pécédent

// Méthode pour Supprimer un Film de la base de donnée
public function supprimer(Film $movie) {
 // Supprimer l'entité
 $this->getEntityManager()->remove($movie);

 // Effectuer la transaction (DELETE)
 $this->getEntityManager()->flush();

 return true;
}
```

Puis dans le controlleur, nosu devons:

1. Récuperer l'entité Film avec son identifiant
2. Retourner un message d'erreur si il n'existe pas
3. Supprimer le film
4. Retourner un message de réussite

```php
// Code pécédent...

#[Route('/films/{id}', name: 'films.supprimer', methods: ['DELETE'])]
function supprimer(Request $req, FilmRepository $repository, int $id): Response {

 // Retourner une erreur si pas de corps ou pas de clé titre
 if (!$req->getContent() || !$req->getPayload()->has('titre')) {
   return $this->json(['erreur' => 'Titre obligatoire'], Response::HTTP_NOT_FOUND);
 }

 // 1. Récuperer une entité Film avec son identifiant
 $film = $repository->find($id);
 // 2. Retourner une erreur si le film n'existe pas
 if (!$film) {
   return $this->json(['erreur' => 'Film introuvable'], Response::HTTP_NOT_FOUND);
 }
 // 3. Supprimer le film
 $statusSuppression = $repository->supprimer($film);

 // 4. Retourner message de réussite
 return $this->json(
   ['message' => 'Le film ' . $film->getTitre() . ' est supprimé'],
   Response::HTTP_OK
 );
}
```

---

## 4. Relations entre entités

Dans le contexte de Doctrine, les relations entre entités sont définies à l'aide d'annotations au-dessus des propriétés correspondantes.

Il existe plusieurs types de relations :

1. Relation ManyToOne : Une relation ManyToOne signifie que plusieurs entités de la classe source peuvent être liées à une seule entité de la classe cible. Par exemple, plusieurs films peuvent être liés à un acteur spécifique.

2. Relation OneToMany : Une relation OneToMany signifie que chaque entité de la classe source peut être liée à plusieurs entités de la classe cible. Par exemple, un acteur peut être lié à plusieurs films.

3. Relation ManyToMany : Une relation ManyToMany signifie que plusieurs entités de la classe source peuvent être liées à plusieurs entités de la classe cible. Par exemple, plusieurs films peuvent être liés à plusieurs acteurs.

### 4.1. Création de la relation

Nous allons ajouté une relation entre notre entité Film et un nouvelle entité Commentaire que nous allons créer.

Cette relation sera de type OneToMany, c'est à dire un film peut avoir plusieurs commentaires, mais un commentaire n'est lié qu'a un seul film.

Commençons par définir notre entité "Commentaire" avec ses propriétés.

Pour garder les choses simple, ous supposerons que chaque commentaire possède un auteur, un message et une date.

L'entité Commentaire aura aussi une proriétés representant le film ou l'en indiquera le type (ManyToOne):

```php
<?php

namespace App\Entity;

use App\Repository\FilmRepository;
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
```

Maintenant, nous allons ajouter une relation OneToMany Dans l'entité Film.

Noté qu'il faut intialiser le tableau de commentaire dans le constructeur.

```php
// src/Entity/Film.php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Film
{
    // ...

  #[@ORM\OneToMany(
   targetEntity:"App\Entity\Commentaire", 
   mappedBy:"film", 
   cascade:['persist']
  )]
  private $commentaires;

  public function __construct()
  {
    $this->commentaires = new ArrayCollection();
  }

  // Méthode pour récuperer la liste des commentaires
  public function getCommentaires(): Collection
  {
    return $this->commentaires;
  }
  
 public function addCommentaire(Commentaire $commentaire): Collection {
  // Permet d'enregistrer le commentaire en enregistrant le film
  $commenrtaire->setFilm($this);

  // Ajouter le commentaire à la liste
  $this->commentaires->add($commentaire);
   
  return $this->commentaires;
 }
}
```

Ici, nous avons utilisé l'annotation `@ORM\OneToMany` pour définir la relation OneToMany entre les entités Film et Commentaires.

**N'oubliez** pas de **migrer** votre **base de données** pour ajouté la nouvelle **table de commentaires**.

---

### 4.2. Interaction avec les entités

#### 4.2.1Ajouter des commentaires à un film

 Maintenant nous pouvons **ajouter** à notre **contrôleur** une **route** pour pouvoir **ajouter** un **commentaire** un **film**:

1. **Si** le **corps** de la **requête** est **vide** **ou** **si** les **clés** auteur et message **ne sont pas réçues**, retourner un **message d'erreur**.
2. **Récuperer** l'entité **film** avec son ``id`` en utilisant le ``FilmRepository``.
3. **Si** le film **n'exsite pas**, retourner un **message d'erreur**.
4. **Recuperer** les **données** du **corps** de la requête.
5. **Instancier** et **populer** le **commentaire** avec les donnée réçues.
6. **Ajouter** le **commentaire** dans le **film**.
7. **Enregistrer** le **film** qui grâce à l'option `cascade:['persist']` va aussi **enregistrer** le **commentaire** dans la **base de données**.

```php
#[Route('/films/{id}/commentaires', name: 'film.commentaires.add', methods: ['POST'])]
public function ajouterCommentaire(
 Request $req,
 FilmRepository $filmRepo,
 int $id
): Response {
 
 // 1. Il faut verifier si les clés auteur, message sont réçues dans le corps de la requete
 if(
   !$req->getContent() || 
   !$req-getPayload()->had('auteur') ||
   !$req-getPayload()->had('auteur')
 ){
   return $this->json(
     ['erreur' => 'Veuillez fournir lauteur et le message!'], 
     Response::HTTP_BAD_REQUEST  
   );
 }

 // 2. Récuperer le film avec son id
 $film = $filmRepo->find($id);

 // 3. Si le film n'exsite pas
 if(!$film){
   return $this->json(
     ['erreur' => 'Film introuvable'], 
     Response::HTTP_NOT_FOUND  
   );
 }
 
 // 4. Recuperer les données du corps de la requête
 $auteur = $req->getPayload()->get('auteur');
 $message = $req->getPayload()->get('message');
 $date = date_create();

 // 5. Instancier et populer le commentaire avec les donnée réçues
 $commentaire = (new Commentaire())
   ->setAuteur($auteur)
   ->setMessage($message)
   ->setDate($date)
   ->setFilm($film);
 
 // 6. Ajouter le commentaire dans le film
 $film->addCommentaire($commentaire);

 // 7. Enregistrer le film et le commentaire grâce au cascade: persist
 $repository->save($film);

 return $this->json(['message' => 'Ajout du commentaire réussi!']);
}
```

---

#### 4.2.2. Récupérer les commentaires d'un film

Pour récupérer les commentaire d'un film il suffit de récupérer le film puis d'utiliser la méthode `getCommentaires` de la class Film:

```php
#[Route('/films/{id}/commentaires', name: 'film.get.commentaires', methods: ['GET'])]
public function getCommentaires(
  FilmRepository $filmRepo,
  int $id
): Response {

  // Récuperer le film avec son id
  $film = $filmRepo->find($id);
²
  // récuperer les commentaires automatiquement
  $commentaires = $film->getCommentaires();

  // Les transformer en un tableau associatif
  $commantairesJson = [];
  foreach ($commentaires as $c) {
    $commantairesJson[] = [
      'id'=> $c->getId(),
      'auteur' => $c->getAuteur(), 
      'message' => $c->getMessage()];
  }

  return $this->json(['film' => $film->getTitre(), 'commentaires' => $commantairesJson]);
}
```

---
---
---

## Conclusion

Dans ce cours, nous avons exploré la gestion des bases de données avec Symfony 6 en utilisant Doctrine, l'ORM de Symfony.

Nous avons appris à configurer la connexion à la base de données, à définir des entités et des relations, à créer des requêtes avec le langage DQL, à gérer les migrations et les transactions, et à manipuler les relations entre les entités.

Doctrine facilite grandement la manipulation des données dans une base de données relationnelle en utilisant des objets PHP plutôt que des requêtes SQL.

Cela améliore la productivité, la portabilité et la gestion des relations complexes entre les entités.

Pour approfondir vos connaissances sur le sujet, voici quelques liens utiles :

- [Documentation officielle de Doctrine](https://www.doctrine-project.org/)
- [Documentation Symfony sur Doctrine](https://symfony.com/doc/current/doctrine.html)
- [Tutoriel Symfony sur la gestion des bases de données avec Doctrine](https://symfony.com/doc/current/doctrine.html)

---

Le prochain cours abordera les vues Twig avec Symfony.

Twig est un moteur de templates puissant et flexible intégré à Symfony qui facilite la création et la manipulation de vues dans les applications Symfony.

Nous verrons comment installer et configurer Twig, comment créer des templates Twig, comment utiliser les variables, les boucles et les conditions dans les templates, comment inclure des fragments de templates, et comment gérer l'internationalisation et la localisation dans les vues Twig.

Ce cours vous permettra de maîtriser l'aspect front-end de vos applications Symfony en utilisant Twig pour générer des vues dynamiques et attrayantes.

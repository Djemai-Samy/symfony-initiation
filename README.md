# Introduction

## [Page officiel du cours Symfony 6: Les contrôleur](https://djemai-samy.com/posts/2.symfony6-controller.article)

![Image du cours: Symfony 6: Initation](https://djemai-samy.com/blog/2.programmation/2.server/4.php/3.symfony6/1.symfony6-initiation/2.symfony6-controller/2.symfony6-controller.png)

Ce support de cours vous introduira aux contrôleurs dans le contexte du développement web avec le Framework Symfony.

Vous apprendrez comment créer, configurer et utiliser des contrôleurs pour interagir avec les utilisateurs, traiter les données et générer des réponses dynamiques.

La branche 'main' contient le code de départ de chaque chapitre de la série de cours.

---

## Prérequis

- Connaissance de base en programmation web ([HTML](https://djemai-samy.com/posts/0.html-initiation), [CSS](https://djemai-samy.com/posts/0.css-initiation) et [PHP](https://djemai-samy.com/posts/0.php-initiation))
- Compréhension des concepts de base du modèle MVC (Modèle-Vue-Contrôleur)
- Connaissance sur la programmation orientée objet avec PHP
- [Familiarité avec le framework Symfony (concepts de base, installation, configuration)](https://djemai-samy.com/posts/1.symfony6-introduction.article)

---

## Plan du cours

[Vous pouvez suivre la serie d'initiation au Framework Symfony 6 complète directement sur le site:](https://djemai-samy.com/posts/0.symfony6-initiation)

1. [Introduction](https://djemai-samy.com/posts/1.symfony6-introduction.article)

2. [Les Contrôleurs](https://djemai-samy.com/posts/2.symfony6-controller.article)
    1. Introduction aux contrôleur de Symfony
       1. Présentation de l'architcure
       2. Avantages d'utiliser des contrôleurs
    2. Création de contrôleur
       1. Contrôleur de base
       2. Les routes
       3. Les actions
       4. Les routes dynamiques
    3. La Requête
    4. AbstractController
       1. Méthodes de génération de réponses HTTP
       2. Méthodes d'accées aux services
       3. Mthodes de gestion de sessions
       4. Méthodes d'accès aux paramètre de configuration
       5. Méthodes de gestion des messages Flash
       6. Méthodes de gestion de la sécurité

3. [ORM Doctrine](https://djemai-samy.com/posts/3.symfony6-doctrine.article)

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

- Comprendre le **rôle** des **contrôleurs** dans le **développement** web avec Symfony
- Savoir **créer**, **configurer** et **utiliser** des **contrôleurs** dans une application Symfony
- **Maîtriser** les **techniques avancées** telles que la **gestion des routes**, la **validation des données** et l'**utilisation des services** dans les contrôleurs
- Être capable de **générer** des **réponses dynamiques** à partir des **contrôleurs**
- Apprendre les **bonnes pratiques** de développement des **contrôleurs** avec Symfony

---
---
---

## 1. Introduction aux contrôleurs Symfony

### 1.1. Rôle des contrôleurs dans le modèle MVC

Dans le développement web, l'architecture Modèle-Vue-Contrôleur (MVC) est largement utilisée pour séparer les différentes responsabilités d'une application.

Le contrôleur est la partie du MVC chargée de recevoir les requêtes HTTP, d'effectuer des traitements et de renvoyer les réponses appropriées.

![Representation graphique du patterne MVC dans le developpement de serveur WEB HTTP. Le Contrôleur s'occupe de traiter les données réçues, d'interagir avec le modèle pour enregistrer ou recuperer des données de la base de données, et construit une réponse en utilisant les moteur de template avant de l'envoyer au client.](https://djemai-samy.com/blog/2.programmation/2.server/4.php/3.symfony6/1.symfony6-initiation/2.symfony6-controller/2.symfony6-controller.1.mvc.svg)

---

### 1.2. Présentation de l'architecture d'une application Symfony et le rôle des contrôleurs

Dans le contexte de Symfony, une application est structurée en différents composants, notamment les contrôleurs, les vues et les modèles.

Les contrôleurs agissent comme des intermédiaires entre les routes (URL) et les actions à effectuer sur les données.

![Representation graphique du fonctionnement d'un contrôleur avec Symfony 6. Le Kernel est reponsable du Routing, et execute l'action associé à la route et à la ma ethode de la reupete HTTP reçue. Le contrôleur est composé d'action associé à des route qui seront éxécutées par le Kernel.](https://djemai-samy.com/blog/2.programmation/2.server/4.php/3.symfony6/1.symfony6-initiation/2.symfony6-controller/2.symfony6-controller-2-Router.svg)

Ils récupèrent les informations de la requête, traitent les données via les modèles et génèrent des réponses pour les afficher aux utilisateurs.

---

### 1.3. Avantages d'utiliser des contrôleurs dans le développement web

L'utilisation de contrôleurs présente plusieurs avantages, tels que la séparation claire des responsabilités, la réutilisabilité du code, la facilité de maintenance et la gestion efficace des requêtes et des réponses.

Bien sûr ! Voici le code pour les exemples du chapitre 2 :

---
---

## 2. Création d'un contrôleur de base

### 1. Création d'un nouveau contrôleur Symfony

Pour créer un nouveau contrôleur dans Symfony, suivez ces étapes :

  1. Naviguez vers le répertoire src/Controller de votre projet Symfony.
  2. Créez un nouveau fichier PHP pour votre contrôleur, par exemple AccueilController.php.
  3. Ajouter le namespace `App\Controller` pour que Symfony puissent reconnaitre vontre controlleur et le charger.
  4. Déclarez la classe AccueilController (Le nom de la classe doit être imperativement le meme que le nom du fichier).

Voici un exemple de code pour la création d'un contrôleur de base :

```php
// src/Controller/AccueilController.php

namespace App\Controller;

class AccueilController
{
    // Vos actions seront définies ici.

}
```

---

### 2. Configuration des routes pour accéder a une action

Dans Symfony, les routes sont associées à des actions (méthodes) de notre classe contrôleur.

Symfony propose plusieurs méthodes pour configurer les routes : l'utilisation des annotations, l'utilisation d'un fichier de configuration YAML ou XML.

Nous allons utiliser la dérnière méthodes ajoutée à Sympfony 6, les `Attributes`.

```php
// src/Controller/AccueilController.php

// ...

use Symfony\Component\Routing\Annotation\Route;

class AccueilController
{ 
  #[Route("/", name:"accueil", methods:['GET','HEAD'])]
}
```

Ici nous avons définit une route nommée `accueil` sur l'url `http://localhost/` et n'accepete que des requetes de type `GET` ou `HEAD`.

---

### 3. L'action

Les actions sont les méthodes executé quand une requete est reçu sur l'url indiquée par la Route qui la précéde.

Pour être valide, une action doit toujours retourner un objet de type `Response` representant la réponse envoyée au client une fois le traitement terminée.

Elle est importé depuis Symfony et prend deux paramètre:

 - `content`: Une chaine de caractère représentant le contenu a envoyer au client, cela peut etre du texte, du JSON ou du HTML par exemple.
 - `status`: Un entier pour indiquer le status de la réponse HTTP, sa valeur est de `200` par défaut.
 - `headers`: Un tableau pour ajouter des en-tetes à vos réponses HTTP.

```php
// src/Controller/FilmController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class AccueilController
{
   #[Route("/", name:"accueil")]
   public function index(): Response
   {
       return new Response(
         '<h1>Salut tout le monde!</h1>', 
         Response::HTTP_OK,
         ['content-type' => 'text/html']
       );
   }
}
```

Dans cet exemple, la route "/" est associée à l'action "salut()" du contrôleur "AccueilController".

Lorsque l'utilisateur accède à cette [URL](http://localhost:8000), l'action "index()" est exécutée.

---

Vous pouvez aussi retourner une reponse en `json`, en utilisant la classe `JsonResponse`, qui hérite de la classe `Response`:

```php
// src/Controller/FilmController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AccueilController
{
   #[Route("/", name:"accueil")]
   public function index(): Response
   {
       return new JsonResponse(
         ['message'=>'Bonjour tout le monde!'],
         Response::HTTP_OK,
         ['content-type' => 'application/json']
       );
   }
}
```

---

### 1.4. Les routes dynamiques

Dans Symfony, vous pouvez définir des routes dynamiques en utilisant des parties de l'URL qui sont précédées d'un paramètre variable spécifique.

Par exemple, vous pouvez utiliser des accolades `{}` pour indiquer un paramètre variable dans une partie de l'URL.

```php
// src/Controller/FilmController.php

// Code pécédent ...

#[Route("/salut/{nom}", name:"accueil.salut")]
public function salutNom($nom): Response
{
   return new JsonResponse(
     ['message'=>'Salut ' . $nom . '!'],
     Response::HTTP_OK,
     ['content-type' => 'application/json']
   );
}
```

Dans cet exemple, nous avons défini une route dynamique `/salut/{nom}` en utilisant la syntaxe `{nom}` pour indiquer un paramètre variable.

La méthode sera executée quand une requete est envoyé sur `/salut/John` ou `/salut/Jane` par exemple.

Le paramètre nom sera extrait de l'URL et passé en tant qu'argument à la méthode `salut`.

Si vous effectuez une requête GET vers `/salut/John`, Symfony extraira la valeur `John` du segment d'URL correspondant au paramètre nom et la passera en tant qu'argument à la méthode `salutNom`.

---

Vous pouvez également spécifier des contraintes sur les paramètres des routes dynamiques en utilisant des expressions régulières.

Par exemple, vous pouvez définir un paramètre `nombre` qui doit être un nombre entier :

```php
// src/Controller/FilmController.php

// Code pécédent ...

#[Route("/salut/{id<\d+>}", name:"accueil.id")]
public function salutID($id): Response
{
   return new JsonResponse(
     ['message'=>'L\identifiant réçu est ' . $id],
     Response::HTTP_OK,
     ['content-type' => 'application/json']
   );
}
```

Dans cet exemple, l'action n'est executée que si le paramètre `id` correspond à un ou plusieurs chiffres.

---
---
---
ATTENTION:

La priorité des routes dans Symfony est déterminée par l'ordre dans lequel elles sont définies.

Lorsqu'une requête est effectuée, Symfony parcourt les routes enregistrées dans l'ordre et utilise la première route qui correspond à l'URL de la requête.

Si vous placez la route `/salut/{nom}` avant la route `/salut/{id<\d+>}`, Symfony tentera d'utiliser la première route pour les URLs de la forme /salut/12.

Donc l'action de la route `/salut/{id<\d+>}` ne sera jamais executée.

En plaçant la route `/salut/{id<\d+>}` avant la route `/salut/{nom}`, Symfony tentera d'abord de faire correspondre les URLs avec des segments numériques à cette route.

Si l'URL correspond au modèle `/salut/{id<\d+>}`, Symfony utilisera cette route.

Sinon, s'il n'y a pas de correspondance, Symfony continuera à chercher une correspondance avec d'autres routes, y compris la route `/salut/{nom}`.

---
---
---

## 3. la requete

Dans les actions, Symfony offre une injection de dépendances dynamique.

Nous pouvons injecter un objet de type `Request` dans notre méthode précisant le Type du paramètre `Request $requete`.

Symfony s'occupe automatiquement de créer et de peupler l'objet `Request` avec les données de la requête en cours.

L'object `Request` est une composante essentielle du framework, il représente la requête HTTP entrante et contient toutes les informations pertinentes, telles que les paramètres de requête, les en-têtes, les cookies et le corps de la requête.

Vous pouvez accédes aux données de la requete a travers ses propriétés.

- `request`: equivalent de `$_POST`, permet d'accéder au corps de la requête, cela est utile pour les requêtes POST, PUT, DELETE, etc., où les données sont envoyées dans le corps de la requête.
- `query`: equivalent de `$_GET`, permet d'accéder aux paramètres de requête.
- `cookies`: equivalent de `$_COOKIE`, permet d'accéder aux cookies de la requête.
- `headers`: permet d'accéder aux en-têtes de la requête.
- `files`: equivalent de `$_POST`
- `server`: equivalent de `$_SERVER`

```php
// src/Controller/FilmController.php

// Code précedent...
#[Route("/salut/{nom}", name:"accueil.salut")]
public function salutNom(Request $req): Response
{
  // Accéder au données de $_POST
  $corps = $req->request;
  
  // Accéder aux paramètres de requête
  $parametres = $req->query;

  // Accéder aux cookies de la requête
  $cookies = $req->cookies;
    
  // Accéder aux en-têtes de la requête
  $entetes = $req->headers;
  
  // Accéder aux fichiers de la requête
  $fichiers = $req->files;
  
  // Accéder aux données du serveur
  $serveur = $req->server;

  return new JsonResponse(
    ['message'=>'Salut ' . $nom . '!'],
    Response::HTTP_OK,
    ['content-type' => 'application/json']
  );
}
```

Les propriétés `request`, `query`, `cookies`, etc., sont des instances de la classe `InputBag`.

La classe InputBag est utilisée pour stocker et manipuler les données associées à ces différentes parties d'une requête HTTP.

Voici quelques méthodes couramment utilisées de la classe InputBag :

- `get(key, default)`: Cette méthode permet de récupérer la valeur associée à une clé spécifique dans le sac de données.
    Si la clé n'existe pas, elle renvoie la valeur par défaut spécifiée (ou null si aucune valeur par défaut n'est fournie).

- `has(key)`: Cette méthode permet de vérifier si une clé spécifique existe dans le sac de données.
    Elle renvoie true si la clé existe et false sinon.

- `all()`: Cette méthode renvoie toutes les données du sac sous la forme d'un tableau associatif.

- `keys()`: Cette méthode renvoie un tableau contenant toutes les clés présentes dans le sac de données.

- `set(key, value)`: Cette méthode permet de définir une valeur pour une clé spécifique dans le sac de données.

- `remove(key)`: Cette méthode permet de supprimer une clé et sa valeur associée du sac de données.

- `replace(data)`: Cette méthode permet de remplacer toutes les données du sac par un nouveau tableau de données.

- `count()`: Cette méthode renvoie le nombre d'éléments présents dans le sac de données.

### 3.1. Paramètre d'url

Voici un exemple ou nous récupérons un nombre envoyé dans les paramètre d'url de cette manière: `/add?x=1&y=2`:

```php
// src/Controller/FilmController.php

// Code précedent...
#[Route("/add", name:"accueil.addition")]
public function addition(Request $req): Response
{
  // Savoir si le paramètre x a été récu
  $isX = $req->query->has('x');
  
  // Savoir si le paramètre y a été récu
  $isY = $req->query->has('y');

  // Tester si x ou y n'a pas été reçu
  if(!$isX || !$isY){
    // Retourner une reponse pour indiquer l'erreur
    return new JsonResponse(
      ['erreur'=>'Veuillez indiquer x et y!'],
      Response::HTTP_BAD_REQUEST,
      ['content-type' => 'application/json']
    );
  }

  // Accéder au paramètre x de la requête
  $parametreX = $req->query->get('x');
  
  // Accéder au paramètre y de la requête
  $parametreY = $req->query->get('y');

  $somme = $parametreX + $parametreY

  return new Response(
    ['erreur'=> $parametreX . ' + ' . $parametreY . ' = ' . $somme],
    Response::HTTP_OK,
    ['content-type' => 'application/json']
  );
}
```

---

### 3.2. Le corps de la requete

L'objet Request offre plusieurs méthodes pour accéder au corps de la requête, qui contient généralement les données envoyées par l'utilisateur.

- `getContent()`: Cette méthode renvoie le contenu brut du corps de la requête sous forme de chaîne de caractères, utile pour savoir si des données on été réçues ou non.
- `getPayload()`: Cette méthode renvoie un objet de type `InputBag`, vous pouvez utilisez les méthode vue précedamment pour récuperer les donnée. Cette méthodes est très utilse car elle serialize les donnée `json` ainsi que les `form-data`.
- `get(key, default)`: Cette méthode permet de récupérer une valeur spécifique du corps de la requête.
- `request->request->all()`: Cette méthode renvoie un tableau associatif contenant toutes les données du corps de la requête.

```php
// src/Controller/FilmController.php

// Code précedent...
#[Route("/", name: "accueil.personne", methods: ['POST'])]
public function bonjour(Request $req): Response {
  // Tester si le corps est vide
  if (!$req->getContent()) {
    return new JsonResponse(
      ['erreur' => 'nom et prenom non fournit!'],
      Response::HTTP_BAD_REQUEST,
      ['content-type' => 'application/json']
    );
  }

  // Savoir si le paramètre x a été récu
  $prenom = $req->getPayload()->get('nom', 'Doe');

  // Savoir si le paramètre y a été récu
  $nom = $req->getPayload()->get('prenom', 'John');

  return new JsonResponse(
    ['message' => 'Bonjour ' . $nom . '  ' . $prenom],
    Response::HTTP_OK,
    ['content-type' => 'application/json']
  );
}
```

---
---
---

## 4. AbstractController

La classe AbstractController est une classe abstraite fournie par le composant HttpFoundation de Symfony

Elle fournit des fonctionnalités supplémentaires utiles pour le développement de contrôleurs dans une application Symfony.

L'utilité principale de la classe AbstractController est de fournir des méthodes pratiques pour faciliter l'interaction avec les composants de Symfony, tels que l'accès aux services, la gestion des réponses HTTP, la génération des URLs et la gestion des formulaires.

En utilisant AbstractController, vous pouvez bénéficier de ces fonctionnalités sans avoir à répéter le code commun dans chaque contrôleur.

### 4.1. utilisation

Pour utiliser la classe AbstractController, vous devez suivre les étapes suivantes :

Importez la classe AbstractController dans votre contrôleur :

```php
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
```

Puis étendez votre contrôleur à partir de AbstractController :

```php
// src/Controller/FilmController.php
class AccueilController extends Controller{
  #[Route("/", name: "accueil.personne", methods: ['GET'])]
  public function index(Request $req): Response {

    return $this->json(
      ['message' => 'Bonjour ' . $nom . '  ' . $prenom],
      Response::HTTP_OK,
    );
  }
}
```

Voici quelques-unes des méthodes utiles héritées de Symfony et disponibles lorsque vous étendez la classe `AbstractController` :

1. Méthodes de génération de réponses HTTP :
   - `render()`: Cette méthode permet de rendre un template et de générer une réponse HTML.
   - `redirectToRoute()`: Elle permet de rediriger vers une autre route de votre application.
   - `json()`: Cette méthode permet de retourner une réponse JSON à partir d'un tableau ou d'un objet.

2. Méthodes d'accès aux services :
   - `getDoctrine()`: Cette méthode vous donne accès au gestionnaire d'entités Doctrine (`EntityManager`), vous permettant de gérer vos entités et d'effectuer des opérations de base de données.
   - `get()`: Cette méthode vous permet d'accéder à d'autres services en utilisant leur nom. Par exemple, vous pouvez accéder au service de génération d'URL en utilisant `$this->get('router')`.

3. Méthodes de gestion des formulaires :
   - `createForm()`: Cette méthode vous permet de créer un objet formulaire en utilisant une classe de formulaire personnalisée.
   - `handleRequest()`: Elle permet de traiter les données soumises par un formulaire et de les associer à l'objet formulaire.
   - `isCsrfTokenValid()`: Cette méthode permet de vérifier si un jeton CSRF (Cross-Site Request Forgery) est valide.

4. Méthodes de gestion des sessions :
   - `getSession()`: Cette méthode vous donne accès à la session en cours. Vous pouvez l'utiliser pour stocker et récupérer des valeurs spécifiques à la session de l'utilisateur.

5. Méthodes d'accès aux paramètres de configuration :
   - `getParameter()`: Cette méthode vous permet d'accéder aux paramètres de configuration définis dans votre application Symfony. Vous pouvez y accéder en utilisant leur nom.

6. Méthodes de gestion des messages flash :
   - `addFlash()`: Cette méthode permet d'ajouter un message flash, qui est un message temporaire stocké en session et généralement utilisé pour afficher des messages de confirmation ou d'erreur après une action.

7. Méthodes de gestion de la sécurité :
   - `getUser()`: Cette méthode vous donne accès à l'utilisateur actuellement authentifié. Vous pouvez l'utiliser pour récupérer des informations sur l'utilisateur connecté.

Ces méthodes ne sont qu'un aperçu des fonctionnalités fournies par la classe `AbstractController`.

Nous les utiliserons avec plus de détaille plus tard dans la serie, mais vous pouvez consulter [la documentation officielle de Symfony pour en savoir plus sur ces fonctionnalités et découvrir de nouvelles méthodes qui pourraient être pertinentes pour votre projet](https://github.com/symfony/symfony/blob/6.3/src/Symfony/Bundle/FrameworkBundle/Controller/AbstractController.php)

## Conclusion

En conclusion, ce cours a débuté par une introduction aux contrôleurs Symfony, qui jouent un rôle central dans le développement d'applications web robustes.

Nous avons appris que les contrôleurs sont responsables de la réception des requêtes HTTP et de la génération des réponses correspondantes.

Ensuite, nous avons exploré le processus de traitement d'une requête dans Symfony, en mettant l'accent sur les différentes étapes telles que la correspondance de la route, la création de l'objet Request, et la gestion des paramètres de la requête.

Nous avons ensuite abordés la classe `AbstractController` de Symfony, qui sert de base pour la création de contrôleurs.

Nous avons découvert que cette classe fournit une multitude de méthodes utiles pour simplifier le développement, notamment la génération de réponses HTTP, l'accès aux services, la gestion des formulaires et des sessions, entre autres.

Vous pouvez poursuivre votre apprentissage en explorant le chapitre suivant, où nous aborderons en détail l'ORM Doctrine et d'autres aspects importants du développement Symfony.

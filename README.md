# Symfony 6: Views avec Twig

## [Page officiel du cours Symfony 6: Les Vue avec Twig](https://djemai-samy.com/posts/4.symfony6-views.article)

![Image du cours: Symfony 6: Les vues avec Twig](https://djemai-samy.com/blog/2.programmation/2.server/4.php/3.symfony6/1.symfony6-initiation/4.symfony6-views/4.symfony6-views.png)

Dans cette partie du cours, nous allons explorer les vues et les templates TWIG, un moteur de templates puissant et flexible utilisé dans le Framework Symfony.

Les vues sont essentielles pour afficher des informations aux utilisateurs finaux, tandis que les templates TWIG fournissent une syntaxe simple et expressive pour générer des pages web dynamiques.

En comprenant ces concepts, vous serez en mesure de créer des interfaces utilisateur interactives et esthétiques pour vos applications Symfony.

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

4. [Les vues avec Twig](https://djemai-samy.com/posts/4.symfony6-views.article)

   1. Introduction aux vues et aux templates Twig
      1. Rôle des vues dans le modèle MVC
      2. Présentation des templates Twig
      3. Installation du package
      4. Utiliser Twig
   2. Syntaxe de base de Twig
      1. Les variables
      2. Les opérations
      3. Envoyer des données dans une Twig
   3. Les filtres et les fonctions
      1. Les filtres
      2. Les fonctions
   4. Structures de contrôle
      1. Les conditions
      2. Les boucles
   5. Composition de templates
      1. L'héritage
      2. Inclusion
      3. Les macros
   6. Les extensions
      1. Créer un filtre
      2. Créer une fonction

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

1. **Comprendre** le rôle des **vues** dans le **modèle MVC** (Modèle-Vue-Contrôleur) et leur **importance** dans les applications web Symfony.
2. **Utiliser** les **templates TWIG** pour **générer** des **pages** web **dynamiques** et **réutilisables**.
3. **Manipuler** des **variables**, des **boucles** et des **conditions** dans les templates TWIG pour rendre les vues plus **interactives**.
4. **Intégrer** des **données** provenant des **contrôleurs** et des **modèle**s dans les **templates TWIG**.
5. **Utiliser** les **filtres** et les **fonctions** TWIG pour **formater** et **manipuler** les données dans les vues.
6. **Organiser** et **étendre** les templates TWIG pour **faciliter** la **maintenance** et la **réutilisation** du code.

---

## 1. Introduction aux vues et aux templates Twig

### 1.1 Rôle des vues dans le modèle MVC

Dans l'architecture MVC, les vues sont responsables de la présentation des données aux utilisateurs.

Elles s'occupent de la mise en forme et de l'affichage des informations provenant du contrôleur.

Les vues sont généralement des fichiers de template qui contiennent du code HTML avec des éléments dynamiques.

Cela permet de séparer la logique de présentation du reste de l'application, ce qui facilite la maintenance et les modifications ultérieures.

---

Prenons l'exemple d'un site de commerce électronique.

Le contrôleur récupère les données des produits à afficher, puis les transmet à la vue correspondante.

La vue utilise ensuite ces données pour générer le code HTML qui présente les produits, y compris leur nom, leur description, leur prix, etc.

Ainsi, la vue est responsable de l'aspect visuel de la page, tandis que le contrôleur gère la récupération et le traitement des données.

---

### 1.2 Présentation des templates Twig

Symfony utilise le moteur de template Twig par défaut pour générer les vues.

Twig offre une syntaxe simple et expressive, facilitant la génération de pages web dynamiques.

Les templates Twig sont des fichiers texte qui contiennent du code Twig mélangé avec du code HTML.

Ils peuvent être étendus et réutilisés pour maintenir une structure cohérente dans les vues.

Avec Twig, vous pouvez manipuler des variables, effectuer des boucles, des conditions, des inclusions, des héritages de templates et bien plus encore.

---

### 1.3 Installation du package

Afin de pouvoir utiliser Twig avec un projet Symfony, il faut d'abord télécharger les dépendances nécessaires :

```bash
composer require twig
```

Vos fichiers Twig devront être placés dans un dossier nommé "templates" à la racine de votre projet.

---

### 1.4 Utiliser Twig

Commencez par créer un fichier dans le dossier "templates" nommé "accueil.html.twig" et ajoutez-y du HTML :

```twig
{# Dans '/tempales/accueil/accueil.twig' #}
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/globals.css">
    <link rel="stylesheet" href="/css/navbar.css">

    <title>Titre du Site</title>
  </head>
  <body>
    <header>
      <nav class='nav-header'>
        <a href="/">Accueil</a>
        <a href="/profil">Profil</a>
        <a href="/contact">Contact</a>
      </nav>
    </header>

    <main>
      <h1>Bienvenue !</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Nesciunt saepe blanditiis, excepturi id at amet reiciendis ad!
        Voluptate dolor omnis nam, provident veritatis, iure inventore vel repellendus expedita tempore asperiores?
      </p>
    </main>

    <footer>
      <nav class='nav-footer'>
        <a href="/">Accueil</a>
        <a href="/profil">Profil</a>
        <a href="/contact">Contact</a>
      </nav>
    </footer>
  </body>
</html>

```

Maintenant, il nous faut retourner le rendu de ce Twig dans un contrôleur en utilisant la méthode `render(string $nomVue)` :

```php
<?php
// Dans le fichier /src/Controller/AccueilController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController {

  #[Route('/', name: 'accueil', methods: ['GET'])]
  public function index(Request $request): Response {

    // Retourner le rendu d'un template Twig
    return $this->render('accueil/accueil.twig');
  }
}
```

---
---
---

## 2. Syntaxe de base de Twig

Twig utilise des balises pour marquer les différentes parties du code. Voici quelques balises couramment utilisées :

- `{{ ... }}` : Utilisée pour afficher des variables ou des expressions.
- `{% ... %}` : Utilisée pour les structures de contrôle telles que les boucles et les conditions.
- `{# ... #}` : Utilisée pour les commentaires qui ne seront pas affichés dans la sortie finale.

---

### 2.1 Les variables

Nous pouvons créer des variables dans les templates Twig en utilisant les balises `{% ... %}` et en précédant le nom de la variable par `set` :

```twig
{% set variable = valeur %}
```

Twig prend en charge différents types de variables, tels que les chaînes de caractères, les nombres, les tableaux et les objets.

Pour afficher des variables, vous pouvez utiliser `{{ ... }}`.

Exemple simple :

```twig
{% set prenom = 'Samy' %}
{% set age = 30 %}
<h2>Bonjour {{ prenom }} !</h2>
<p>Votre âge est {{ age }}</p>
```

### 2.2 Les opérations

Twig prend en charge différentes opérations telles que les additions, les soustractions, la concaténation, etc.

Voici un exemple de concaténation avec l'opérateur `~` :

```twig
{% set prenom = 'Samy' %}
{% set nom = 'Djemai' %}
<h2>Bonjour {{ nom ~ ' ' ~ prenom }}</h2>
```

---

### 2.3 Envoyer des données dans une Twig

La plupart du temps, les données à afficher sont reçues depuis nos contrôleurs.

Symfony permet de passer des données aux vues en utilisant la méthode `render()` du contrôleur.

Nous pouvons transmettre des variables individuelles, des tableaux associatifs ou des objets entiers.

```php
<?php
// Dans le fichier /src/Controller/ProfilController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController {

  #[Route('/profil', name: 'profil', methods: ['GET'])]
  public function index(Request $request): Response {

    // Variables à transmettre à la template :
    $nom = 'Doe';
    $prenom = 'John';
    $notes = [
      'math' => 12,
      'physique' => 17,
      'informatique' => 18,
      'Chimie' => 8,
    ];

    // Retourner le rendu d'un template Twig
    return $this->render('profil/profil.twig', ['nom' => $nom, 'prenom' => $prenom, 'notes' => $notes]);
  }
}
```

Dans cet exemple, nous transmettons les variables `$nom`, `$prenom` et `$notes` à la vue.

Elles sont encapsulées dans un tableau associatif où les clés représentent les noms des variables dans le template et les valeurs correspondent aux données réelles.

---

Les données transmises seront accessibles dans le template à travers des variables.

```twig
{# Dans : /templates/profil/profil.twig #}
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="/css/globals.css">
  <link rel="stylesheet" href="/css/navbar.css">

  <title>Profil de {{ nom }}</title>
</head>
<body>
  <header>
    <nav class='nav-header'>
      <a href="/">Accueil</a>
      <a href="/profil">Profil</a>
      <a href="/contact">Contact</a>
    </nav>
  </header>

  <main>
    <h2>Bonjour {{ nom|capitalize ~ ' ' ~ prenom|capitalize }}!</h2>

    <h3>Vous avez {{ notes|length }} notes.</h3>
  </main>

  <footer>
    <nav class='nav-footer'>
      <a href="/">Accueil</a>
      <a href="/profil">Profil</a>
      <a href="/contact">Contact</a>
    </nav>
  </footer>
</body>
</html>

```

Dans cet exemple, nous utilisons des balises Twig telles que `{{ }}` pour afficher des variables dont la valeur a été envoyée depuis le contrôleur.

---
---
---

## 3. Les filtres et les fonctions

### 3.1 Les filtres

Les filtres Twig permettent de formater et de manipuler les données affichées dans les templates.

Les filtres permettent de formater et de manipuler la valeur des variables avant de les afficher.

Les filtres sont appliqués en utilisant le symbole `|` :

```twig
{{ variable|filtre1|filtre2|filtre3 }}
```

Par exemple, il existe un filtre qui permet de mettre la première lettre d'une chaîne de caractères en majuscule.

Nous pouvons l'utiliser pour mettre en majuscule la première lettre du nom et du prénom :

```twig
<h2>Bonjour {{ nom|capitalize ~ ' ' ~ prenom|capitalize }}!</h2>
```

Un autre filtre permet de connaître la taille d'un tableau. Nous pouvons l'utiliser pour afficher le nombre de notes reçues, par exemple :

```twig
<h3>Vous avez {{ notes|length }} notes.</h3>
```

Il existe de nombreux filtres intéressants. Vous pouvez consulter [la documentation officielle de Twig pour une liste complète des filtres disponibles et leurs utilisations détaillées.](https://twig.symfony.com/doc/3.x/filters/index.html)

Voici une liste de filtres populaires :

1. `date` : Ce filtre permet de formater une date selon le format spécifié. Par exemple, `{{ date|date('d/m/Y') }}` affichera la date au format jour/mois/année.

2. `number_format` : Ce filtre permet de formater un nombre en utilisant une séparation des milliers et une précision décimale. Par exemple, `{{ price|number_format(2, ',', ' ') }}` formatera le prix avec deux décimales, une virgule comme séparateur décimal et un espace comme séparateur de milliers.

3. `length` : Ce filtre retourne la longueur d'une chaîne de caractères, d'un tableau ou d'une collection. Par exemple, `{{ text|length }}` affichera le nombre de caractères dans la variable `text`.

4. `truncate` : Ce filtre permet de tronquer une chaîne de caractères à une longueur spécifiée. Par exemple, `{{ text|truncate(50) }}` affichera les 50 premiers caractères de la variable `text`.

5. `upper` et `lower` : Ces filtres permettent de convertir une chaîne de caractères en majuscules ou en minuscules. Par exemple, `{{ 'text'|upper }}` affichera `TEXT`.

6. `join` : Ce filtre permet de joindre les éléments d'un tableau en utilisant un séparateur spécifié. Par exemple, `{{ array|join(', ') }}` affichera les éléments du tableau séparés par des virgules et des espaces.

7. `default` : Ce filtre permet de définir une valeur par défaut si une variable est nulle ou non définie. Par exemple, `{{ username|default('Guest') }}` affichera la valeur de `username` s'il est défini, sinon affichera 'Guest'.

8. `url_encode` et `url_decode` : Ces filtres permettent d'encoder ou de décoder une chaîne de caractères en utilisant l'encodage URL.

 Par exemple, `{{ url|url_encode }}` encodera la variable `url`.

---

### 3.2 Les fonctions

Twig propose également des fonctions qui offrent des fonctionnalités supplémentaires.

Par exemple, il existe une fonction nommée `date` qui retourne la date avec le format désiré :

```twig
{{ date('d/m/Y') }}
```

Twig propose de nombreuses autres fonctions qui offrent une gamme étendue de fonctionnalités pour manipuler, formater et afficher les données dans les templates.

Vous pouvez consulter [la documentation officielle de Twig pour une liste complète des fonctions disponibles et leurs utilisations détaillées.](https://twig.symfony.com/doc/3.x/functions/index.html)

Voici quelques exemples de fonctions Twig couramment utilisées :

1. `path` : Cette fonction permet de générer l'URL d'une route Symfony en utilisant son nom. Par exemple, `{{ path('route_name') }}` générera l'URL correspondante à la route spécifiée.

2. `url` : Cette fonction est similaire à `path`, mais elle génère une URL absolue plutôt qu'une URL relative. Elle prend également en compte le schéma et le nom d'hôte de l'application Symfony.

3. `asset` : Cette fonction permet de générer l'URL d'un fichier statique (CSS, JavaScript, images, etc.) en utilisant le système de gestion des ressources de Symfony. Par exemple, `{{ asset('css/style.css') }}` générera l'URL complète du fichier CSS.

4. `dump` : Cette fonction est utilisée pour déboguer les variables et afficher leur contenu. Elle affiche les informations de débogage dans la console ou dans la barre de débogage Symfony. Par exemple, `{{ dump(variable) }}` affichera les détails de la variable dans l'outil de débogage.

5. `range` : Cette fonction génère une séquence de nombres. Elle est souvent utilisée pour générer une boucle avec un nombre prédéfini d'itérations. Par exemple, `{% for i in range(1, 5) %}{{ i }}{% endfor %}` générera les nombres de 1 à 5.

6. `date` : Cette fonction permet de formater une date selon le format spécifié. Elle est utile pour l'affichage de dates dans différents formats. Par exemple, `{{ date(my_date, 'Y-m-d') }}` affichera la date au format AAAA-MM-JJ.

7. `random` : Cette fonction génère un nombre aléatoire. Elle est souvent utilisée pour afficher des éléments aléatoires dans les templates. Par exemple, `{{ random(1, 10) }}` générera un nombre aléatoire entre 1 et 10.

Ce ne sont que quelques exemples de fonctions Twig couramment utilisées. Twig propose de nombreuses autres fonctions qui offrent une gamme étendue de fonctionnalités pour manipuler, formater et afficher les données dans les templates.

---
---
---

## 4. Structures de contrôle

---

### 4.1 Les conditions

Vous pouvez également afficher un élément ou un autre en utilisant les conditions.

La syntaxe ressemble à ceci :

Exemple :

```twig
{% if condition %}
    <p>Ce texte est affiché si la condition est vraie.</p>
{% else %}
    <p>Ce texte est affiché si la condition est fausse.</p>
{% endif %}
```

Ou l'opérateur ternaire :

```twig
<p>La condition est {% condition ? 'vraie' : 'fausse' %}</p>
```

Nous pouvons par exemple l'utiliser pour tester si la taille du tableau de notes est supérieure à 0 :

```twig
{% if notes|length %}
    <p>Afficher la liste de notes</p>
{% else %}
    <p>Vous n'avez pas de notes pour l'instant</p>
{% endif %}
```

---

### 4.2 Les boucles

La plupart du temps, les données reçues depuis le contrôleur sont sous forme de tableau.

Twig nous offre un moyen simple d'itérer sur les éléments d'un tableau :

```twig
{% for cle, valeur in elements %}
  {{ cle }}
  {{ valeur }}
{% endfor %}
```

Par exemple, nous pouvons l'utiliser pour afficher la liste des matières et la note associée :

```twig
<table>
  <thead>
    <tr>
      <th>Matiere</th>
      <th>Note</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    {% for matiere, note in notes %}
      <tr>
        <td>{{ matiere|capitalize }}</td>
        <td>{{ note }}</td>
        <td>{{ note > 10 ? '✅ Validé' : '❌ Ajourné' }}</td>
      </tr>
    {% endfor %}
  </tbody>
</table>
```

---
---
---

## 5. Inclusion de fichiers et héritage de templates

Dans une application, il arrive souvent de réutiliser des bouts de vues dans différentes pages ou de vouloir utiliser la même disposition dans plusieurs pages.

Twig permet d'assembler et de composer nos pages, ce qui permet de réutiliser du code commun dans plusieurs vues.

---

### 5.1 L'héritage

Imaginons que nous ayons différentes pages suivant la même structure de base :

1. Page d'accueil

```twig
{# Dans le template parent "accueil/accueil.twig" #}
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/globals.css">
    <link rel="stylesheet" href="/css/navbar.css">

    <title>Page d'accueil</title>
  </head>
  <body>
      <header>
        <nav class="nav-header">
          <a href={{ path('accueil')}}>Accueil</a>
          <a href={{ path('profil')}}>Profil</a>
          <a href={{ path('contact')}}>Contact</a>
        </nav>
      </header>

      <main>
        {# Contenu de la page d'accueil #}
        <h1>Bienvenue !</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Nesciunt saepe blanditiis, excepturi id at amet reiciendis ad! 
          Voluptate dolor omnis nam, provident veritatis, iure inventore vel repellendus expedita tempore asperiores?
        <p>

        <section>
          {% set prenom = 'Samy' %}
          {% set nom = 'Djemai' %}
          {% set age = 30 %}
          <h2>Bonjour {{ nom ~ ' ' ~ prenom }}</h2>
          <p>Votre âge est {{ age }}</p>
        </section>
      </main>

      <footer>
        <nav class="nav-footer">
          <a href={{ path('accueil')}}>Accueil</a>
          <a href={{ path('profil')}}>Profil</a>
          <a href={{ path('contact')}}>Contact</a>
        </nav>
      </footer>
  </body>
</html>

```

2. Page de contact

```twig
{# Dans le template parent "contact/contact.twig" #}
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/globals.css">
    <link rel="stylesheet" href="/css/navbar.css">

    <title>Page de contact</title>
  </head>
  <body>
      <header>
        <nav class="nav-header">
          <a href={{ path('accueil')}}>Accueil</a>
          <a href={{ path('profil')}}>Profil</a>
          <a href={{ path('contact')}}>Contact</a>
        </nav>
      </header>

      <main>
        {# Contenu de la page de contact #}
        <h1>Contactez-nous :</h1>
        <form>
          <input name='Email' placeholder='Entrez votre email'/>
          <textarea name='message' placeholder='Votre message...'></textarea>
          <button>Envoyer</button>
        </form>
      </main>

      <footer>
        <nav class="nav-footer">
          <a href={{ path('accueil')}}>Accueil</a>
          <a href={{ path('profil')}}>Profil</a>
          <a href={{ path('contact')}}>Contact</a>
          </nav>
      </footer>
  </body>
</html>
```

Les seules différences entre les deux pages sont le `<title>` dans la balise `<head>` et le contenu de la balise `<main>`, tout le reste est identique.

Nous pouvons alors utiliser l'héritage pour créer un template de base en permettant la modification du `<title>` et du `<main>`.

Pour faire cela, nous commençons par créer ce template de base et utiliser des blocs (`block`) pour indiquer quelles sont les parties pouvant contenir du contenu différent :

```twig
{# Dans le template parent "layout/base.twig" #}
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {% block styles %}
      <link rel="stylesheet" href="/css/globals.css">
      <link rel="stylesheet" href="/css/navbar.css">
    {% endblock %}

    <title>
      {% block titrePage %}Titre Site{% endblock %}
    </title>
  </head>
  <body>
      <header>
        <nav class="nav-header">
          <a href={{ path('accueil')}}>Accueil</a>
          <a href={{ path('profil')}}>Profil</a>
          <a href={{ path('contact')}}>Contact</a>
        </nav>
      </header>

      <main>
        {% block contenuMain %}{% endblock %}
      </main>

      <footer>
        <nav class="nav-footer">
          <a href={{ path('accueil')}}>Accueil</a>
          <a href={{ path('profil')}}>Profil</a>
          <a href={{ path('contact')}}>Contact</a>
        </nav>
      </footer>
  </body>
</html>

```

Ici, nous avons créé deux blocs modifiables :

- `titrePage` : Partie pour le titre du site, si elle n'est pas modifiée dans les templates enfants, elle sera par défaut "Titre Site".
- `contenuMain` : Partie principale de la page, vide par défaut.

Maintenant, il est possible d'hériter de ce template dans des templates enfants en utilisant la balise `extends`.

Dans le template `accueil.html.twig` :

```twig
{# Dans "/templates/accueil/accueil.twig" #}

{% extends 'base.twig' %}

{% block contenuMain %}
  <h1>Bienvenue !</h1>

  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Nesciunt saepe blanditiis, excepturi id at amet reiciendis ad!
    Voluptate dolor omnis nam, provident veritatis, iure inventore vel repellendus expedita tempore asperiores?
  </p>

  <section>
    {% set prenom = 'Samy' %}
    {% set nom = 'Djemai' %}
    {% set age = 30 %}
    <h2>Bonjour {{ nom ~ ' ' ~ prenom }}</h2>
    <p>Votre âge est {{ age }}</p>
  </section>

{% endblock %}
```

Et dans le template `contact.html.twig` :

```twig
{# Dans "/templates/contact/contact.twig" #}

{% extends 'base.twig' %}

{% block titrePage %}Contact{% endblock %}

{% block contenuMain %}
  <h1>Contactez-nous :</h1>
  <form>
    <input name='Email' placeholder='Entrez votre email'/>
    <textarea name='message' placeholder='Votre message...'></textarea>
    <button>Envoyer</button>
  </form>
{% endblock %}
```

Et dans le template `profil.html.twig` :

```twig
{# Dans "/templates/profil/profil.twig" #}

{% extends 'base.twig' %}

{% block styles %}
  {{ parent()}}

  <link rel="stylesheet" href="/css/notes.css">
{% endblock %}

{% block titrePage %}Profil de {{ nom }}{% endblock %}

{% block contenuMain %}
  <h1>Bonjour {{ nom ~ ' ' ~ prenom }} !</h1>
  
  <table>
    <thead>
      <tr>
        <th>Matiere</th>
        <th>Note</th>
        <th>Statut</th>
      </tr>
    </thead>

    <tbody>
      {% if notes|length > 0 %}
        {% for matiere, note in notes %}
          <tr>
            <td>{{ matiere|capitalize }}</td>
            <td>{{ note }}</td>
            <td>{{ note > 10 ? '✅ Validé' : '❌ Ajourné' }}</td>
          </tr>
        {% endfor %}
      {% endif %}
    </tbody>
  </table>

{% endblock %}
```

---

### 5.2 Composition

Twig permet d'inclure des fichiers partiels dans d'autres templates à l'aide de la balise `include`. Cela est très utile pour séparer nos pages en différents morceaux et réduire leur taille.

Pour l'exemple, notre page de profil pourrait devenir très large plus tard si nous y ajoutons du contenu. Nous allons séparer le tableau des notes dans un fichier séparé, puis l'inclure dans

 le fichier `profil.html.twig` :

```twig
{# Dans la template "/profil/notes.twig" #}
<table>
  <thead>
    <tr>
      <th>Matiere</th>
      <th>Note</th>
      <th>Statut</th>
    </tr>
  </thead>

  <tbody>
    {% if notes|length > 0 %}
      {% for matiere, note in notes %}
        <tr>
          <td>{{ matiere|capitalize }}</td>
          <td>{{ note }}</td>
          <td>{{ note > 10 ? '✅ Validé' : '❌ Ajourné' }}</td>
        </tr>
      {% endfor %}
    {% endif %}
  </tbody>
</table>
```

Puis, dans le fichier `profil.html.twig` :

```twig
{# Dans "/templates/profil.twig" #}

{% extends 'layout/base.twig' %}

{% block styles %}
  {{ parent()}}

  <link rel="stylesheet" href="/css/notes.css">
{% endblock %}

{% block titrePage %}Profil de {{ nom }}{% endblock %}

{% block contenuMain %}
  <h1>Bonjour {{ nom|capitalize ~ ' ' ~ prenom|capitalize }}!</h1>

  <h2>Vous avez {{ notes|length }} notes.</h2>

  {% if notes|length %}
    
    {% include 'profil/notes.twig' %}
    
  {% else %}
    <p>Vous n'avez pas de notes pour l'instant</p>
  {% endif %}
{% endblock %}

```

---

### 5.3 Les macros

Les macros sont des morceaux de code réutilisables dans les templates Twig. Elles permettent de réduire la duplication de code en encapsulant des fonctionnalités couramment utilisées. Elles agissent comme des fonctions et peuvent recevoir des paramètres.

Voici un exemple de macro :

```twig
{% macro maMacro(param1, param2) %}
    {# Code à exécuter #}
{% endmacro %}


{{ maMacro('valeur1', 'valeur2') }}

{{ maMacro('valeur3', 'valeur4') }}
```

Par exemple, nous pouvons utiliser des macros pour éviter de dupliquer notre navbar dans l'en-tête et le pied de page.

Notre macro recevra le nom de la classe à appliquer à la balise `<nav>` pour la rendre plus flexible :

```twig
{# Dans '/templates/layout/layout.macro.twig' #}
{% macro navbar(navClasse) %}
  <nav class="{{ navClasse }}">
    <a href={{ path('accueil')}}>Accueil</a>
    <a href={{ path('profil')}}>Profil</a>
    <a href={{ path('contact')}}>Contact</a>
  </nav>
{% endmacro %}
```

Dans le template de base :

```twig
{# Dans le template parent "templates/layout/base.twig" #}

{% import 'layout/layout.macro.twig' as layout %}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {% block styles %}
      <link rel="stylesheet" href="/css/global.css">
      <link rel="stylesheet" href="/css/navbar.css">
    {% endblock %}

    <title>
      {% block titrePage %}Titre Site{% endblock %}
    </title>
  </head>

  <body>
    <header>
      {{ layout.navbar('nav-header') }}
    </header>

    <main>
      {% block contenuMain %}{% endblock %}
    </main>

    <footer>
      {{ layout.navbar('nav-footer') }}
    </footer>
  <body>
</html>

```

Maintenant, vous pouvez utiliser la macro `navbar` dans le fichier `base.html.twig` pour inclure la navigation à différents endroits sans dupliquer le code.

---
---
---

## 6. Les extensions

Les extensions Twig permettent d'étendre les fonctionnalités de Twig en ajoutant des filtres personnalisés, des fonctions et des tests.

Dans notre exemple, nous allons créer une extension pour gérer la moyenne d'un élève :

Les extensions sont des classes, nous allons la définir dans le fichier `/src/Twig/MoyenneExtension.php` :

```php
// src/Twig/MoyenneExtension.php
namespace App\Twig;

use Twig\Extension\AbstractExtension;

class MoyenneExtension extends AbstractExtension
{
    public function getFilters()
    {
        // Retourner les filtres
        return [];
    }

    public function getFunctions()
    {
        // Retourner les fonctions
        return [];
    }
}
```

---

### 6.1 Créer un filtre

Nous allons créer un filtre permettant de calculer la moyenne d'un tableau de nombres :

```php
// src/Twig/MoyenneExtension.php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class MoyenneExtension extends AbstractExtension
{
    public function getFilters()
    {
        // Retourner le filtre 'moyenne' lié à la fonction 'calculerMoyenne'
        return [
            new TwigFilter('moyenne', [$this, 'calculerMoyenne']),
        ];
    }

    public function getFunctions()
    {
        return [];
    }

    // Filtre pour calculer la moyenne
    public function calculerMoyenne($nombres)
    {
        return array_sum($nombres) / count($nombres);
    }
}
```

Vous pouvez maintenant l'utiliser pour afficher la moyenne des notes :

 ```twig
{# Dans la template parent "/profil/notes.html.twig" #}
<table>
  <thead>
    <tr>
      <th>Matière</th>
      <th>Note</th>
      <th>Statut</th>
    </tr>
  </thead>
  <tbody>
    
    {# Code précédent pour afficher les notes... #}
    
    <tr>
      {% set moyenne = notes|moyenne %}
      <td><strong>Moyenne</strong></td>
      <td>{{ moyenne }}</td>
      <td>{{ moyenne > 10 ? '✅ Validé' : '❌ Ajourné' }}</td>
    </tr>

  </tbody>
</table>
```

---

### 6.2 Créer une fonction

Nous allons ajouter une fonction permettant de formatter la moyenne en ne laissant que deux nombres derrière la virgule et de changer le `.` par une `,` :

```php
// src/Twig/MoyenneExtension.php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class MoyenneExtension extends AbstractExtension
{
    // Code précédent pour les filtres

    public function getFunctions()
    {
        return [
            new TwigFunction('format', [$this, 'formatNombre']),
        ];
    }

    // Fonction pour formater un nombre
    public function formatNombre($nombre)
    {
        return number_format($nombre, 2, ',', '.');
    }
}
```

Vous pouvez maintenant l'utiliser pour formater la moyenne des notes :

 ```twig
{# Dans la template parent "/profil/notes.html.twig" #}

<tr>
  {% set moyenne = notes|moyenne %}
  <td><strong>Moyenne</strong></td>
  <td>{{ format(moyenne) }}</td>
  <td>{{ moyenne > 10 ? '✅ Validé' : '❌ Ajourné' }}</td>
</tr>
```

---
---
---

## Conclusion

Ce cours sur les vues avec Twig dans Symfony 6 nous a permis d'explorer en détail les concepts et les fonctionnalités clés nécessaires pour créer des interfaces utilisateur dynamiques et esthétiques dans le Framework Symfony.

---

Nous avons commencé par comprendre le rôle des vues dans le modèle MVC et comment les templates Twig sont utilisés pour générer des pages web dynamiques.

---

Nous avons appris à manipuler des variables, des boucles et des conditions dans les templates Twig pour rendre nos vues plus interactives.

---

Ensuite, nous avons exploré les filtres et les fonctions Twig, qui nous ont permis de formater et de manipuler les données affichées dans nos templates.

Nous avons découvert une multitude de filtres et de fonctions prédéfinis, ainsi que la possibilité de créer nos propres filtres et fonctions personnalisés.

---

Nous avons également abordé les structures de contrôle Twig, telles que les conditions et les boucles, qui nous ont permis de contrôler l'affichage des éléments en fonction de certaines conditions ou d'itérer sur des listes de données.

---

Enfin, nous avons exploré l'inclusion de fichiers et l'héritage de templates, qui nous ont permis de réutiliser du code commun et de maintenir une structure cohérente dans nos vues.

Nous avons également découvert les macros, qui nous ont permis de créer des morceaux de code réutilisables dans nos templates.

---

En combinant toutes ces connaissances, vous serez en mesure de créer des vues flexibles, réutilisables et esthétiques pour vos applications Symfony.

---

Dans notre prochain cours, nous aborderons les formulaires avec Symfony.

Nous découvrirons comment créer des formulaires interactifs, valider les données soumises et les intégrer dans nos vues et contrôleurs Symfony.

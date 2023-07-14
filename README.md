# Introduction

## [Page officiel du cours Symfony 6: Initiation](https://djemai-samy.com/posts/0.symfony6-initiation)

![Image du cours: Symfony 6: Initation](https://djemai-samy.com/blog/2.programmation/2.server/4.php/3.symfony6/1.symfony6-initiation/0.symfony6-initiation.png)

Ce support de cours vous fournira une introduction complète au Framework Symfony.

Vous découvrirez les concepts fondamentaux de Symfony 6, tels que la gestion des routes, la manipulation des bases de données, l'authentification et l'autorisation, la création de formulaires, ainsi que l'intégration de composants tiers populaires tels que Doctrine et Twig.

La branche 'main' contient le code de départ de chaque chapitre de la série de cours.

---

## Présentation du Framework Symfony

Symfony est un Framework de développement web largement utilisé et apprécié par de nombreux développeurs.

Il offre une architecture solide, des composants puissants et une grande flexibilité.

Les avantages de Symfony incluent sa modularité, sa facilité de maintenance, sa communauté active et son écosystème riche en extensions.

Symfony convient aux projets de petite à grande envergure, des sites web simples aux applications complexes.

---

## Plan du cours

## Programme

[Vous pouvez suivre la serie d'initiation au Framework Symfony 6 complète directement sur le site:](https://djemai-samy.com/posts/0.symfony6-initiation)

1. [Introduction](https://djemai-samy.com/posts/1.symfony6-introduction.article)

    1. Présentation du Framework Symfony
    2. Créer un projet Symfony
    3. Structure d'une application Symfony

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
    4. ABstractController
       1. Méthodes de génération de réponses HTTP
       2. Méthodes d'accées aux services
       3. Mthodes de gestion de sessions
       4. Méthodes d'accès aux paramètre de configuration
       5. Méthodes de gestion des messages Flash
       6. M2thodes de gestion de la sécurité 

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

- **Comprendre** les principes **fondamentaux** de **Symfony** et son **architecture**.
- **Maîtriser** les **fonctionnalités** clés du Framework, y compris la **gestion des routes**, les **contrôleurs** et les **vues**.
- **Apprendre** à **interagir** avec une **base de données** en utilisant **Doctrine**.
- **Savoir** créer des **formulaires**, les **valider** et **gérer** les **saisies** utilisateur.
- **Acquérir** les **compétences** nécessaires pour **mettre en place** des mécanismes de **sécurité** et d'**authentification**.

---

# Introduction

## [Page officiel du cours Symfony 6: Introduction](https://djemai-samy.com/posts/0.symfony6-initiation)

![Image du cours: Symfony 6: Introduction](https://djemai-samy.com/blog/2.programmation/2.server/4.php/3.symfony6/1.symfony6-initiation/1.symfony6-introduction/1.symfony6-introduction.png)

Ce support de cours vous fournira une introduction complète au Framework Symfony.

Vous découvrirez comment installer et configurer Symfony sur votre machine, ainsi que les principes fondamentaux, son architecture et la manière de configurer votre environnement de développement.

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
      - Installation:
      - Configuration de l'environnement de développement

   2. Créer un projet Symfony
      - Initialisation avec symfony-cli
      - Initialisation avec composer

   3. Structure d'une application Symfony :
      - Organisation des fichiers et répertoires dans une application Symfony
      - Architecture MVC (Modèle-Vue-Contrôleur)
      - Composants clés de Symfony


2. [Les Contrôleurs](https://djemai-samy.com/posts/2.symfony6-controller.article)

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

- Comprendre les **concepts** clés et l'**architecture** de **Symfony**.
- Savoir **installer** Symfony et **configurer** l'environnement de développement.
- Connaître la **structure** d'une **application** Symfony et l'**organisation** des **fichiers**.

---


## 1. Installation

Avant de commencer à développer avec Symfony, il est essentiel d'installer le Framework et de le configurer correctement.

Symfony peut être installé via Composer, Symfony CLI ou en téléchargeant l'archive officielle depuis le site web de Symfony.

### 1.1. PHP

Si vous voulez utiliser la version 6 de Symfony, il faut au minimum installer la version 8 de PHP.

#### 1.1. Installation de PHP sur Windows

1. Téléchargement de PHP

   - Accédez au [site officiel de PHP](https://www.php.net/downloads.php).
   - Sous la section "Windows Downloads", téléchargez le fichier d'installation adapté à votre version de Windows.

2. Configuration de PHP
   - Une fois le téléchargement terminé, ouvrez le fichier exécutable et suivez les instructions de l'assistant d'installation.
   - Sélectionnez "Installation type" et choisissez "Full" pour installer PHP avec tous les composants nécessaires.
   - Sélectionnez le répertoire d'installation de votre choix (par défaut, il est recommandé de le conserver dans le répertoire C:\php).
   - Cochez l'option "Add PHP to system PATH" pour ajouter PHP à la variable d'environnement PATH de Windows.
   - Cliquez sur "Next" et suivez les instructions pour terminer l'installation.

3. Vérification de l'installation
   - Fermez et rouvrez l'invite de commandes (cmd.exe).
   - Tapez la commande `php -v` pour vérifier la version de PHP installée.
   - Vous devriez voir les détails de la version de PHP s'afficher, ce qui confirme que l'installation a été réussie.

---

#### 1.2. Installation de PHP sur Mac

1. Installation de Homebrew (gestionnaire de paquets)

   - Ouvrez Terminal, l'application de ligne de commande par défaut sur macOS.
   - Exécutez la commande suivante et appuyez sur Enter :

      ```bash
      /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
      ```

   - Suivez les instructions à l'écran pour terminer l'installation de Homebrew.

2. Installation de PHP
   - Dans Terminal, exécutez la commande suivante pour installer PHP :

      ```bash
      brew install php
      ```

   - Homebrew téléchargera et installera la dernière version de PHP.

3. Vérification de l'installation
   - Fermez et rouvrez le terminal pour prendre en compte les modifications.
   - Dans Terminal, tapez la commande `php -v` pour vérifier la version de PHP installée.
   - Les détails de la version de PHP devraient s'afficher si l'installation a réussi.

---

#### 1.3 Installation de PHP sur Linux

1. Installation de PHP
    - Ouvrez le terminal.
    - Exécutez la commande d'installation appropriée selon votre distribution Linux (Pour Ubuntu/Debian):

      ```bash
      sudo apt update
      sudo apt install php
      ```

2. Vérification de l'installation
   - Fermez et rouvrez le terminal pour prendre en compte les modifications.
   - Dans Terminal, tapez la commande `php -v` pour vérifier la version de PHP installée.
   - Les détails de la version de PHP devraient s'afficher si l'installation a réussi.

---
---

### 2. Composer

Symfony peut être installé de différentes manières, mais l'approche recommandée est d'utiliser Composer, un gestionnaire de dépendances pour PHP.

Composer permet d'installer Symfony et ses dépendances de manière automatisée.

---

#### 2.1. Installation de Composer sur Windows

1. Téléchargement de Composer
   1. Accédez au [site officiel de Composer](https://getcomposer.org/download/).
   2. Sous la section "Windows", cliquez sur le lien de téléchargement correspondant à la version de Composer souhaitée (par exemple, "Composer-Setup.exe").

2. Installation de Composer
   1. Une fois le téléchargement terminé, exécutez le fichier "Composer-Setup.exe".
   2. L'assistant d'installation de Composer s'ouvrira. Suivez les instructions à l'écran pour terminer l'installation.
   3. Par défaut, Composer sera installé dans le répertoire "C:\ProgramData\ComposerSetup\bin". Vous pouvez modifier le répertoire d'installation si nécessaire.

3. Vérification de l'installation
   1. Fermez et rouvrez l'invite de commandes (cmd.exe).
   2. Tapez la commande `composer --version` pour vérifier si Composer a été installé avec succès.
   3. Les détails de la version de Composer devraient s'afficher si l'installation a réussi.

---

#### 2.2 Installation de Composer sur Mac

1. Installation de Composer via Homebrew
   1. Ouvrez Terminal, l'application de ligne de commande par défaut sur macOS.
   2. Exécutez la commande suivante et appuyez sur Enter :

      ```bash
      brew install composer
      ```

   3. Homebrew téléchargera et installera Composer.

2. Vérification de l'installation
   1. Fermez et rouvrez le terminal pour prendre en compte les modifications.
   2. Dans Terminal, tapez la commande `composer --version` pour vérifier si Composer a été installé avec succès.
   3. Les détails de la version de Composer devraient s'afficher si l'installation a réussi.

---

#### 2.3 Installation de Composer sur Linux

1. Installation de Composer via le script d'installation
   1. Ouvrez le terminal.
   2. Exécutez la commande suivante pour télécharger le script d'installation de Composer :

      ```bash
      php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
      ```

   3. Ensuite, exécutez la commande suivante pour vérifier l'intégrité du script téléchargé :

        ```bash
        php -r "if (hash_file('sha384', 'composer-setup.php') === 'baf1608c33254d00611ac1705c1d9958c817a1a33bce370c0595974b342601bd80b92a3f46067da89e3b06bff421f182') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
        ```

   4. Si l'intégrité est vérifiée, exécutez la commande suivante pour installer Composer globalement :

      ```bash
      sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
      ```

   5. Vous pouvez également installer Composer localement en remplaçant `--install-dir=/usr/local/bin` par le répertoire de votre choix.

2. Vérification de l'installation
   1. Fermez et rouvrez le terminal pour prendre en compte les modifications.
   2. Dans le terminal, tapez `composer --version` pour vérifier si Composer a été installé avec succès.
   3. Les détails de la version de Composer devraient s'afficher si l'

---
---

### 3. Symfony-cli

Symfony CLI est un outil en ligne de commande qui facilite le développement et l'administration d'applications Symfony.

#### 3.1. Installation de Symfony-cli sur Windows

1. Installer `scoop`
   1. Accédez au [site officiel de Scoop](https://scoop.sh/).
   2. Ouvrez un terminal PowerShell.
   3. Entrez la commande permettant d'exécuter des script:

      ```PS
      Set-ExecutionPolicy RemoteSigned -Scope CurrentUser 
      ```

   4. Puis la commande pour lancer le script d'installation de scoop

      ```PS
      irm get.scoop.sh | iex
      ```

2. Installation de symfony-cli
   1. Installer la cli en exécutant la commande:

      ```PS
      scoop install symfony-cli
      ```

3. Vérification de l'installation
   1. Fermez et rouvrez le terminal pour prendre en compte les modifications.
   2. Tapez la commande `symfony --version` pour vérifier si symfony-cli a été installé avec succès.
   3. Les détails de la version de symfony-cli devraient s'afficher si l'installation a réussi.

---

#### 3.2. Installation de Symfony-cli sur Mac

1. Installation de Symfony-cli via Homebrew
   1. Ouvrez Terminal, l'application de ligne de commande par défaut sur MacOs.
   2. Exécutez la commande suivante et appuyez sur Enter :

      ```bash
      brew install symfony
      ```

   3. Homebrew téléchargera et installera Symfony-cli.

2. Vérification de l'installation
   1. Fermez et rouvrez le terminal pour prendre en compte les modifications.
   2. Dans Terminal, tapez la commande `symfony --version` pour vérifier si Symfony-cli a été installé avec succès.
   3. Les détails de la version de Symfony-cli devraient s'afficher si l'installation a réussi.

---

#### 3.3. Installation de Symfony-cli sur Linux

1. Installation de Symfony-cli via le script d'installation
   1. Ouvrez le terminal.
   2. Exécutez la commande suivante pour télécharger le script d'installation de Composer :

      ```bash
      wget https://get.symfony.com/cli/installer -O - | bash
      ```

2. Configuration de Symfony CLI
   1. Exécutez la commande suivante pour déplacer Symfony CLI vers un emplacement accessible dans le système :

      ```bash
      sudo mv /home/votre_nom_utilisateur/.symfony/bin/symfony /usr/local/bin/symfony
      ```

   - Assurez-vous de remplacer /home/votre_nom_utilisateur/ par le chemin vers votre répertoire d'accueil.

3. Vérification de l'installation
   1. Fermez et rouvrez le terminal pour prendre en compte les modifications.
   2. Dans le terminal, tapez `composer --version` pour vérifier si Composer a été installé avec succès.
   3. Les détails de la version de Composer devraient s'afficher si l'

---
---

## 4. Configuration de l'environnement de développement

Une fois Symfony installé, vous devez configurer votre environnement de développement pour travailler efficacement.

Cela peut inclure la configuration d'un serveur web local tel que Apache ou Nginx, la configuration de la base de données, et l'installation d'autres outils utiles tels que l'interface graphique MySql et un éditeur de code adapté au développement web.

La configuration de l'environnement est essentielle pour créer un flux de travail fluide et productif.

### VSCode Extensions

- PHP Intelephense
- PHPDoc Comment (Auteur: Rex Shi).
- PHP Namespace resolver (Auteur: Mehedi Hassan).
- Symfony code snippets (Auteur: Nadim Al Abdou).
- Symfony for VSCode (Auteur: TheNouillet).
- Twig (Auteur: whatwedo).
- Twig Language 2 (Auteur: mblode0).
- Activer BracketPairColorizes (Optionnel)

---
---

## 5. Créer un projet Symfony

Maintenant que l'environnement est configuré, nous allons voir pour créer et initialiser un projet Symfony.

Ouvrez un terminal le dossier ou vous voulez avoir votre projet.

### 5.1 Initialisation avec Symfony-cli

Pour créer un projet avec symfony-cli, il suffit de lancer la commande:

```bash
symfony new MonProjet
```

---

### 5.2 Initialisation avec Composer

Pour créer un projet avec Composer, il suffit de lancer la commande:

```bash
composer create-project symfony/skeleton MonProjet
```

---
---

## 6. Structure d'une application Symfony

Symfony suit une structure bien définie pour les applications web.

Vous découvrirez la structure des répertoires tels que:

- "src" pour le code source de votre application
- "config" pour les fichiers de configuration
- "templates" pour les vues
- "public" pour les ressources accessibles publiquement

Comprendre cette structure vous aidera à naviguer et à organiser vos fichiers de manière cohérente.

Nous explorerons en détail l'organisation des fichiers et répertoires dans une application Symfony.

### 6.1 Architecture MVC (Modèle-Vue-Contrôleur)

Cette structure est basée sur l'architecture MVC (Modèle-Vue-Contrôleur) qui favorise la séparation des préoccupations et la modularité du code.

L'architecture MVC est un patron de conception couramment utilisé dans le développement web.

Nous vous présenterons les trois composants clés de l'architecture MVC : le modèle, la vue et le contrôleur.

Le modèle représente les données et la logique métier de l'application, le contrôleur gère les interactions utilisateur et coordonne les actions à effectuer, tandis que la vue est responsable de l'affichage des données à l'utilisateur.

Vous apprendrez où placer vos fichiers de contrôleurs, vos modèles, vos vues et autres éléments spécifiques à votre application.

Comprendre cette organisation facilitera la maintenance et l'extension de votre application Symfony.

---

### 6.2 Composants clés de Symfony

Symfony fournit des composants puissants qui facilitent la mise en œuvre de l'architecture MVC.

Nous nous concentrerons sur quelques composants clés tels que:

- Le système de routage, qui permet de mapper les URLs aux actions des contrôleurs.
- Le noyau HTTP (HTTP Kernel), qui gère les requêtes et les réponses HTTP.
- Le gestionnaire d'événements (Event Dispatcher), qui permet de créer des flux d'événements personnalisés.

---
---

## 7. Lancer l'application

Vous pouvez vérifier si environnement est bien configurer et peut lancer votre application dans un serveur locale, vous pouvez utiliser cette commande:

```bash
symfony check:requirement
```

### 7.1. Lancer l'application avec log

Pour lancer le serveur et pouvoir accéder a l'application avec le navigateur tout en affichant les `logs` dans votre terminal, il suffit de lancer la commande:

```bash
symfony server:start
```

Puis y accéder dans vote navigateur en utilisant l'url
[http://localhost:8000/](http://localhost:8000/)

---

### 7.2. Lancer l'application sans log

Pour lancer le serveur et pouvoir accéder a l'application avec le navigateur en mode `background`, vous pouvez lancer cette commande:

```bash
symfony server:start -d
```

Puis y acceder dans vote navigateur en utilisant l'url
[http://localhost:8000/](http://localhost:8000/)

---

### Stopper l'application

Pour arreter le serveur, vous pouvez lancer cette commande:

```bash
symfony server:stop
```

## Conclusion

Dans ce support de cours, vous avez découvert les bases de Symfony.

Vous connaissez maintenant les différentes méthodes d'installation et de configuration de Symfony et comment créer et initialiser un projet Symfony.

Pour approfondir vos connaissances sur Symfony, voici quelques liens utiles :

- [Site web officiel de Symfony.](https://symfony.com/)
- [Documentation de Symfony.](https://symfony.com/doc)
- [SymfonyCast.](https://symfonycasts.com/)

Maintenant que vous avez acquis les bases de Symfony, nous vous invitons à poursuivre votre apprentissage en suivant le prochain support de cours qui couvrira en détail les fondamentaux de Symfony, y compris le système de routage, les contrôleurs et les actions.

---

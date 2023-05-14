# Gestion de Warehouse CRUD MVC avec Laravel et Authentification utilisateur

Ce projet est une application Laravel pour gérer un entrepôt en utilisant les opérations CRUD (Create, Read, Update, Delete) en suivant le modèle de conception MVC (Modèle-Vue-Contrôleur). L'application permettra à l'utilisateur d'ajouter, de modifier et de supprimer des produits, des catégories et des commandes, ainsi que de visualiser les stocks de produits disponibles. De plus, l'application comprend également la gestion d'utilisateur pour permettre l'authentification et la gestion des comptes utilisateur.

## Installation

1. Clonez ce dépôt en utilisant la commande `git clone`.
2. Accédez au répertoire du projet et exécutez la commande `composer install` pour installer les dépendances de Laravel.
3. Copiez le fichier `.env.example` en `.env` et configurez la base de données.
4. Exécutez la commande `php artisan key:generate` pour générer une nouvelle clé d'application Laravel.
5. Exécutez la commande `php artisan migrate` pour exécuter les migrations de base de données.
6. Exécutez la commande `php artisan db:seed` pour remplir la base de données avec des données de test.
7. Exécutez la commande `php artisan serve` pour démarrer l'application Laravel.

## Utilisation

1. Accédez à `http://localhost:8000` dans votre navigateur pour accéder à l'application.
2. Connectez-vous avec l'un des comptes utilisateur de test (voir la section "Comptes utilisateur de test" ci-dessous) ou créez un nouveau compte utilisateur en cliquant sur le lien "S'inscrire" dans le menu de navigation.

## Fonctionnalités

L'application comprend les fonctionnalités suivantes:

### Produits

- Affichage de la liste des produits.
- Ajout d'un nouveau produit.
- Modification d'un produit existant.
- Suppression d'un produit existant.
- Affichage du stock disponible pour chaque produit.

### Catégories

- Affichage de la liste des catégories.
- Ajout d'une nouvelle catégorie.
- Modification d'une catégorie existante.
- Suppression d'une catégorie existante.

### Commandes

- Affichage de la liste des commandes.
- Ajout d'une nouvelle commande avec les produits correspondants.
- Modification d'une commande existante avec les produits correspondants.
- Suppression d'une commande existante.

### Utilisateurs

- Gestion des comptes utilisateur avec les fonctionnalités d'inscription, de connexion et de déconnexion.
- Affichage de la liste des utilisateurs (réservé aux administrateurs).
- Modification des comptes utilisateur existants (réservé aux administrateurs).
- Suppression des comptes utilisateur existants (réservé aux administrateurs).

## Comptes utilisateur de test

L'application est livrée avec les comptes utilisateur de test suivants:

### Administrateur

- Email: admin@example.com
- Mot de passe: password

### Utilisateur régulier

- Email: user@example.com
- Mot de passe: password

## Licence

Ce projet est sous licence MIT. Veuillez consulter le fichier `LICENSE` pour plus d'informations.# Gestion-warehouse-Laravel-

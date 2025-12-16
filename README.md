# etudiant_app (Version Laravel)

## Description

**etudiant_app_laravel** est une application web de gestion des étudiants, que j'ai recodé en utilisant le framework Laravel
Il y a une video **Test_video_etudiant_app_laravel.webm** qui montre le test 


## Objectifs de la version Laravel

* Structurer l’application selon le modèle MVC
* Sécuriser l’authentification et la déconnexion
* Faciliter la maintenance et l’évolution du projet
*Toujours utiliser l'interface de la version sans framework


## Prérequis

Pour installer le projet, il faut avoir :

* PHP >= 8.1
* Composer
* MySQL
* Node.js et npm 


## Démarrer le serveur Laravel pour tester

```
php artisan serve
```


## Fonctionnalités

* Authentification des utilisateurs (login / logout sécurisé)
* Gestion des étudiants (Créer, Lire, Modifier, Supprimer)
* Support multilingue (fichiers `resources/lang`)


## Sécurité

* Protection CSRF activée par défaut
* Déconnexion sécurisée via requête POST
* Accès protégé par middleware `auth`


## Structure du projet

```
app/Http/Controllers   → Logique métier
resources/views        → Vues Blade
routes/web.php         → Routes web
resources/lang         → Traductions
public/css             → Styles personnalisés
```


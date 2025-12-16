#       < etudiant_app (Version Laravel) >
---
## Des captures vidéos montrons l'installation et le test sont présents dans ce repository
> INSTALLATION_etudiant_app_laravel.webm\
> Test_video_etudiant_app_laravel.webm

## Installation

>**Prérequis**
>>Pour installer le projet, il faut avoir sur son pc :
>>* PHP >= 8.1
>>* Composer
>>* MySQL
>>* Node.js et npm 

>**Etapes à suivre**
>>1-*clonner l'application sur github*
```
git clone https://github.com/pablo-23-08/etudiant_app_laravel.git
```
>>2-*aller dans le répertoire*
```
cd etudiant_app_laravel
```
>>3-*installer les dépendances de Laravel*
```
composer install
```
>>4-*Créer la base de données :*
```
Exécutez le script *database.sql* fourni pour créer les tables
```
>>5-*modifier le fichier *.env*, remplacer <__user_mysql__> et <__password__> par ces vrais valeurs*
```
DB_USERNAME= <user_mysql>
DB_PASSWORD= <password>
```
>>6-*générer la clé de l'application*
```
php artisan key:generate
```
>>7-*démarrer le serveur Laravel pour tester*
```
php artisan serve
```
>>8-*aller sur [http://127.0.0.1:8000] dans le navigateur*


## Description

>**etudiant_app_laravel** est une application web de gestion des étudiants, que j'ai recodé en utilisant le framework Laravel\
Il y a une video **Test_video_etudiant_app_laravel.webm** qui montre le test 


## Objectifs de la version Laravel

>* Structurer l’application selon le modèle MVC
>* Sécuriser l’authentification et la déconnexion
>* Faciliter la maintenance et l’évolution du projet
>* Toujours utiliser l'interface de la version sans framework


## Fonctionnalités

>* Authentification des utilisateurs (login / logout sécurisé)
>* Gestion des étudiants (Créer, Lire, Modifier, Supprimer)
>* Support multilingue (fichiers `resources/lang`)


## Sécurité

>* Protection CSRF activée par défaut
>* Déconnexion sécurisée via requête POST
>* Accès protégé par middleware `auth`


## Structure du projet

```
app/Http/Controllers   → Logique métier
resources/views        → Vues Blade
routes/web.php         → Routes web
resources/lang         → Traductions
public/css             → Styles personnalisés
```


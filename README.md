
## setup the app

``` shell
docker-compose up -d 
docker exec app_php composer install
docker exec app_php npm install
docker exec app_php php artisan migrate --seed
```
## jump in the php container

``` shell
docker exec -it app_php  /bin/bash
```

# Laravel level 2
**L'objectif de ce test est d'observer votre raisonnement et l'application des bonnes pratiques Laravel préconisées dans la documentation au travers d'un développement similaire à ce qui se fait chez Bynativ.**

Vous êtes libre de réaliser le test au moment qu'il vous convient et en prenant le temps qu'il vous est nécessaire. Nous pensons qu'il peut être réalisé en 1h30, cette durée ne tient pas en compte de l'installation d'un environnement de développement PHP, MySQL, Laravel, Composer, Npm, ...

Pour ce test, il vous faudra réaliser une partie d'un CRUD (Create, Read) pour une prise de rendez-vous, à partir de l'énoncé ci-dessous.

*Pour l'intégration des éléments HTML/CSS nous vous recommandons d'utiliser un framework comme Bootstrap*
***Le design des pages n'est pas évalué dans ce test, faîtes au plus simple.*** 

Chez Bynativ nous utilisons actuellement la version 7 de Laravel sous PHP 7.4, pour démarrer un projet Laravel 7 :

> composer create-project --prefer-dist laravel/laravel:^7.0 Bynativ

> php artisan serve

Bon test !

## Objectif
### Prise de rendez-vous
#### Créer un formulaire de prise de rendez-vous
Créer un formulaire de prise de rendez-vous avec les champs suivant :
- Nom (obligatoire).
- Téléphone (format Français).
- Email (obligatoire).
- Date et heure du rendez-vous (obligatoire, format Français).
- Message (facultatif).

#### Traiter le formulaire de prise de rendez-vous
- Traiter la réception du formulaire dans un contrôleur.
- Valider les données côté serveur.
- Persister les données.
- Une fois le formulaire de prise de rendez-vous soumis afficher un message de succès ou d'erreur.
- Si succès, afficher un lien pour prévisualiser la dernière demande de rendez-vous avec le message "Consulter votre demande de rendez-vous".

### API
#### Créer une route API d'accès aux rendez-vous
- Créer une route API publique pour récupérer la liste de tous les rendez-vous.

*La route API est publique, il n'est pas nécessaire d'utiliser une authentification.*

### Contraintes
- Le format de date persisté doit être au format EN avec le timezone UTC.
- Un email de confirmation de rendez-vous doit être envoyé.
  
### Tests
Effectuer une série de tests (https://laravel.com/docs/master/http-tests) pour vérifier que les routes suivantes soient fonctionnelles :
- Affichage du formulaire.
- Affichage du dernier rendez-vous.
- Traitement du formulaire.
- Route API.

### Aides
Il est recommandé d'utiliser aux mieux le framework Laravel dans sa version 7, ci-après une liste de lien vers la documentation.

**Route :**
- https://laravel.com/docs/7.x/routing

**Templating et formulaire :**
- https://laravel.com/docs/7.x/blade
- https://laravel.com/docs/7.x/csrf

**Contrôleur, injection et validation :**
- https://laravel.com/docs/7.x/controllers#basic-controllers
- https://laravel.com/docs/7.x/controllers#dependency-injection-and-controllers
- https://laravel.com/docs/7.x/validation

**API :**
- https://laravel.com/docs/7.x/routing#basic-routing
- https://laravel.com/docs/7.x/eloquent-resources

**Modèle, propriété et migration :**
- https://laravel.com/docs/7.x/eloquent#defining-models
- https://laravel.com/docs/7.x/eloquent-mutators#accessors-and-mutators
- https://laravel.com/docs/7.x/migrations#generating-migrations

**Notification mail :**
- https://laravel.com/docs/7.x/eloquent#observers
- https://laravel.com/docs/7.x/notifications
- https://laravel.com/docs/7.x/notifications#on-demand-notifications

**Tests :**
- https://laravel.com/docs/master/http-tests
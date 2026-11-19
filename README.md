# Dokkena

**Dokkena** (« notre boutique » en tunisien) : la cuisine tunisienne de chez nous, livrée chez vous.

Projet Laravel réalisé en suivant le cours en trois parties :

| Partie | Contenu | État |
| --- | --- | --- |
| 1 | Vitrine Blade : routes, contrôleurs, layout, partiels, contact | ✅ terminée |
| 2 | Base de données, migrations, seeders, CRUD catégories et plats | à venir |
| 3 | Fortify, rôles et permissions, avis, images, panier | à venir |
| Bonus | Ansahni (assistante IA), serveur MCP | à venir |

## Installation (Laragon)

1. Copier le dossier `dokkena` dans `C:\laragon\www\`.
2. Ouvrir le **Terminal** de Laragon dans ce dossier :

```bash
cd C:\laragon\www\dokkena
composer install
copy .env.example .env
php artisan key:generate
```

3. Créer la base `dokkena` dans MySQL (Laragon : bouton **Database**, ou HeidiSQL → clic droit → Créer → Base de données), puis :

```bash
php artisan migrate
php artisan serve
```

4. Ouvrir <http://127.0.0.1:8000>.

> Avec Laragon, le site est aussi disponible sur <http://dokkena.test> après un clic sur **Recharger** (Apache).

## Pages de la partie 1

| Page | URI | Nom de route | Contenu |
| --- | --- | --- | --- |
| Accueil | `/` | `page.home` | Bienvenue et les 3 derniers plats |
| À propos | `/about` | `page.about` | Présentation de Dokkena |
| La carte | `/dishes` | `dish.index` | 12 plats avec `@forelse`, liens vers les fiches |
| Fiche plat | `/dishes/{id}` | `dish.show` | Détail ; identifiant numérique ; 404 si inconnu |
| Contact | `/contact` (GET) | `contact.create` | Formulaire avec `@csrf` |
| Remerciement | `/contact` (POST) | `contact.store` | Récapitulatif des données envoyées |

Cas limites à tester : `/dishes/999` (404, plat inconnu), `/dishes/abc` (404, contrainte `whereNumber`), formulaire vide.

## Organisation du code (partie 1)

```
app/Data/DishCatalog.php              tableau provisoire des plats (remplacé par le modèle Dish en partie 2)
app/Http/Controllers/PageController   accueil et à propos
app/Http/Controllers/DishController   liste et fiche des plats (404)
app/Http/Controllers/ContactController formulaire GET / POST
resources/views/layouts/app           layout unique (@yield('title'), @yield('content'))
resources/views/partials/             navbar, footer, page-header, dish-card
resources/views/pages|dishes|contact  une vue par page
resources/views/errors/404            page 404 personnalisée
public/css/dokkena.css                thème clair de Dokkena, chargé après le CSS du template
```

## Sortie de `php artisan route:list --except-vendor`

> À régénérer sur votre machine après `composer install` et à coller ici.

```
  GET|HEAD   / ........................... page.home › PageController@home
  GET|HEAD   about ...................... page.about › PageController@about
  GET|HEAD   contact ........... contact.create › ContactController@create
  POST       contact .............. contact.store › ContactController@store
  GET|HEAD   dishes ................... dish.index › DishController@index
  GET|HEAD   dishes/{id} ................ dish.show › DishController@show

                                                         Showing [6] routes
```

## Template et crédits

- Template **Restoran** de [HTML Codex](https://htmlcodex.com), distribué par [ThemeWagon](https://themewagon.com), licence Creative Commons Attribution 4.0 (voir `public/lib/RESTORAN-LICENSE.txt`). Le lien de crédit est conservé dans le pied de page, comme l'exige la licence.
- Thème clair Dokkena (`public/css/dokkena.css`) : fond crème, bleu Sidi Bou Saïd, terracotta pour les prix, polices Inter et Fraunces.
- Les images de `public/img/dishes/` sont provisoires : remplacez-les par de vraies photos **en gardant le même nom de fichier** (format 4:3 conseillé, par exemple 800 × 600).

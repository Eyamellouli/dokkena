<?php

namespace App\Data;

/**
 * Catalogue provisoire des plats (partie 1).
 *
 * Le tableau remplace la base de données. En partie 2, il sera remplacé
 * par le modèle Dish : les routes et les vues changeront très peu.
 */
class DishCatalog
{
    private const DISHES = [
        1 => [
            'name' => "Couscous à l'agneau",
            'category' => 'Couscous',
            'price' => 28,
            'image' => 'img/dishes/couscous-agneau.jpg',
            'description' => "Semoule fine roulée à la main, agneau mijoté, pois chiches et légumes de saison, comme le vendredi chez nous.",
            'spicy' => false,
        ],
        2 => [
            'name' => 'Couscous au poisson',
            'category' => 'Couscous',
            'price' => 32,
            'image' => 'img/dishes/couscous-poisson.jpg',
            'description' => "Le couscous des villes côtières : mérou, sauce relevée à l'harissa, coing et potiron.",
            'spicy' => true,
        ],
        3 => [
            'name' => "Brik à l'œuf",
            'category' => 'Entrées',
            'price' => 4,
            'image' => 'img/dishes/brik-oeuf.jpg',
            'description' => "Feuille de malsouka croustillante, œuf coulant, thon, persil et câpres.",
            'spicy' => false,
        ],
        4 => [
            'name' => 'Salade méchouia',
            'category' => 'Entrées',
            'price' => 9,
            'image' => 'img/dishes/salade-mechouia.jpg',
            'description' => "Poivrons et tomates grillés au feu de bois, ail, huile d'olive, œuf dur et thon.",
            'spicy' => true,
        ],
        5 => [
            'name' => 'Lablabi',
            'category' => 'Soupes',
            'price' => 7,
            'image' => 'img/dishes/lablabi.jpg',
            'description' => "Pois chiches, pain rassis, cumin, harissa et un filet d'huile d'olive : le réconfort tunisien.",
            'spicy' => true,
        ],
        6 => [
            'name' => 'Chorba frik',
            'category' => 'Soupes',
            'price' => 8,
            'image' => 'img/dishes/chorba-frik.jpg',
            'description' => "Soupe de blé vert concassé à l'agneau, tomate et coriandre, servie avec un citron.",
            'spicy' => false,
        ],
        7 => [
            'name' => 'Ojja merguez',
            'category' => 'Plats mijotés',
            'price' => 15,
            'image' => 'img/dishes/ojja-merguez.jpg',
            'description' => "Œufs pochés dans une sauce tomate et poivrons, merguez maison et harissa.",
            'spicy' => true,
        ],
        8 => [
            'name' => 'Kammounia',
            'category' => 'Plats mijotés',
            'price' => 22,
            'image' => 'img/dishes/kammounia.jpg',
            'description' => "Bœuf mijoté longuement au cumin et à l'ail, la recette de Sfax.",
            'spicy' => false,
        ],
        9 => [
            'name' => 'Makrouna au poulet',
            'category' => 'Pâtes',
            'price' => 16,
            'image' => 'img/dishes/makrouna-poulet.jpg',
            'description' => "Pâtes en sauce rouge, poulet fondant, ail et piment doux.",
            'spicy' => true,
        ],
        10 => [
            'name' => 'Makroudh (4 pièces)',
            'category' => 'Pâtisseries',
            'price' => 6,
            'image' => 'img/dishes/makroudh.jpg',
            'description' => "Losanges de semoule fourrés aux dattes, frits puis trempés dans le miel.",
            'spicy' => false,
        ],
        11 => [
            'name' => 'Citronnade maison',
            'category' => 'Boissons',
            'price' => 4,
            'image' => 'img/dishes/citronnade.jpg',
            'description' => "Citrons entiers mixés, sucre et eau de fleur d'oranger, servie bien fraîche.",
            'spicy' => false,
        ],
        12 => [
            'name' => 'Thé aux pignons',
            'category' => 'Boissons',
            'price' => 6,
            'image' => 'img/dishes/the-pignons.jpg',
            'description' => "Thé rouge à la menthe servi avec des pignons de pin grillés.",
            'spicy' => false,
        ],
    ];

    /** Tous les plats, indexés par identifiant. */
    public function all(): array
    {
        return self::DISHES;
    }

    /** Un plat par identifiant, ou null s'il n'existe pas. */
    public function find(int $id): ?array
    {
        return self::DISHES[$id] ?? null;
    }

    /** Les $count derniers plats ajoutés (identifiants les plus grands). */
    public function latest(int $count = 3): array
    {
        return array_slice(self::DISHES, -$count, $count, true);
    }
}

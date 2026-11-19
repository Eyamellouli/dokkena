@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    {{-- Bannière --}}
    <section class="hero">
        <div class="container py-5">
            <div class="row align-items-center g-5 py-lg-4">
                <div class="col-lg-6 text-center text-lg-start">
                    <p class="eyebrow mb-3 wow fadeInUp">Cuisine tunisienne faite maison</p>
                    <h1 class="display-4 mb-4 wow fadeInUp" data-wow-delay="0.1s">La cuisine de chez nous, livrée chez vous</h1>
                    <p class="lead-soft mb-4 pb-2 wow fadeInUp" data-wow-delay="0.2s">
                        Couscous du vendredi, brik croustillante, ojja bien relevée et makroudh au miel :
                        des recettes de famille préparées chaque jour à Tunis.
                    </p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start wow fadeInUp" data-wow-delay="0.3s">
                        <a href="{{ route('dish.index') }}" class="btn btn-primary py-3 px-4">Voir la carte</a>
                        <a href="{{ route('page.about') }}" class="btn btn-light-outline py-3 px-4">Notre histoire</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img class="img-fluid hero-image wow zoomIn" src="{{ asset('img/hero.jpg') }}" alt="Assiette de couscous">
                </div>
            </div>
        </div>
    </section>

    {{-- Nos engagements --}}
    <section class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item">
                        <i class="fa fa-2x fa-hands text-primary mb-3"></i>
                        <h5>Fait maison</h5>
                        <p class="mb-0">Semoule roulée à la main, harissa et merguez préparées sur place.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item">
                        <i class="fa fa-2x fa-leaf text-primary mb-3"></i>
                        <h5>Produits frais</h5>
                        <p class="mb-0">Légumes du marché central et huile d'olive du Sahel.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item">
                        <i class="fa fa-2x fa-shopping-basket text-primary mb-3"></i>
                        <h5>Commande en ligne</h5>
                        <p class="mb-0">Composez votre panier et suivez votre commande.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item">
                        <i class="fa fa-2x fa-comments text-primary mb-3"></i>
                        <h5>Ansahni</h5>
                        <p class="mb-0">Notre assistante vous conseille un menu selon vos envies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Les 3 derniers plats --}}
    <section class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp">
                <p class="eyebrow mb-2">Nouveautés</p>
                <h2 class="section-heading">Les derniers plats à la carte</h2>
            </div>
            <div class="row g-4">
                @forelse ($latestDishes as $id => $dish)
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        @include('partials.dish-card', ['id' => $id, 'dish' => $dish])
                    </div>
                @empty
                    <p class="text-center">Aucun plat pour le moment.</p>
                @endforelse
            </div>
            <div class="text-center mt-5">
                <a href="{{ route('dish.index') }}" class="btn btn-outline-primary py-2 px-4">Toute la carte</a>
            </div>
        </div>
    </section>
@endsection

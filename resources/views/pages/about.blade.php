@extends('layouts.app')

@section('title', 'À propos')

@section('content')
    @include('partials.page-header', [
        'title' => 'À propos',
        'subtitle' => 'Dokkena, « notre boutique » : une cuisine de famille ouverte à tous.',
    ])

    <section class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded-soft w-100 wow zoomIn" src="{{ asset('img/about-1.jpg') }}" alt="Ojja">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded-soft w-75 wow zoomIn" data-wow-delay="0.2s" src="{{ asset('img/about-2.jpg') }}" alt="Brik" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded-soft w-75 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('img/about-3.jpg') }}" alt="Makroudh">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded-soft w-100 wow zoomIn" data-wow-delay="0.4s" src="{{ asset('img/about-4.jpg') }}" alt="Salade méchouia">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="eyebrow mb-2">Notre histoire</p>
                    <h2 class="section-heading mb-4">Des recettes transmises de génération en génération</h2>
                    <p class="mb-4">
                        Dokkena est née d'une idée simple : retrouver le goût des plats que l'on mange
                        en famille, le vendredi midi ou pendant les soirées de Ramadan. Chaque recette
                        vient de nos mères et de nos grands-mères, de Tunis à Sfax en passant par Nabeul.
                    </p>
                    <p class="mb-4">
                        Nous cuisinons chaque matin avec des produits frais et nous livrons dans tout le
                        Grand Tunis. Pas de surgelé, pas de raccourci : du temps, des épices et beaucoup d'amour.
                    </p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="stat">
                                <span class="stat-number" data-toggle="counter-up">12</span>
                                <span class="stat-label">plats à la carte</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="stat">
                                <span class="stat-number" data-toggle="counter-up">7</span>
                                <span class="stat-label">jours sur 7</span>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-4" href="{{ route('dish.index') }}">Découvrir la carte</a>
                </div>
            </div>
        </div>
    </section>
@endsection

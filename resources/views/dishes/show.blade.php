@extends('layouts.app')

@section('title', $dish['name'])

@section('content')
    <section class="container-xxl py-5">
        <div class="container">
            <nav aria-label="Fil d'Ariane" class="mb-4">
                <ol class="breadcrumb breadcrumb-soft">
                    <li class="breadcrumb-item"><a href="{{ route('page.home') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dish.index') }}">La carte</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $dish['name'] }}</li>
                </ol>
            </nav>

            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid rounded-soft w-100 dish-photo" src="{{ asset($dish['image']) }}" alt="{{ $dish['name'] }}">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex gap-2 mb-3">
                        <span class="badge-soft badge-blue">{{ $dish['category'] }}</span>
                        @if ($dish['spicy'])
                            <span class="badge-soft badge-terracotta"><i class="fa fa-pepper-hot me-1"></i>Piquant</span>
                        @endif
                    </div>
                    <h1 class="mb-3">{{ $dish['name'] }}</h1>
                    <p class="price price-lg mb-4">{{ $dish['price'] }} DT</p>
                    <p class="lead-soft mb-4">{{ $dish['description'] }}</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <button type="button" class="btn btn-primary py-3 px-4" disabled title="Disponible en partie 3">
                            <i class="fa fa-shopping-basket me-2"></i>Ajouter au panier
                        </button>
                        <a href="{{ route('dish.index') }}" class="btn btn-light-outline py-3 px-4">Retour à la carte</a>
                    </div>
                    <p class="small text-muted-soft mt-3 mb-0">Référence du plat : n° {{ $id }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection

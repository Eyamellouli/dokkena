@extends('layouts.app')

@section('title', 'Page introuvable')

@section('content')
    <section class="container-xxl py-5">
        <div class="container text-center py-5">
            <p class="eyebrow mb-2">Erreur 404</p>
            <h1 class="mb-3">Ce plat n'est pas à la carte</h1>
            <p class="lead-soft mb-4">La page demandée n'existe pas ou a été déplacée.</p>
            <a href="{{ route('dish.index') }}" class="btn btn-primary py-3 px-4">Voir la carte</a>
        </div>
    </section>
@endsection

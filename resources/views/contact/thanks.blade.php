@extends('layouts.app')

@section('title', 'Merci')

@section('content')
    @include('partials.page-header', [
        'title' => 'Message envoyé',
        'subtitle' => 'Votre message est bien arrivé. Nous vous répondons sous 24 heures.',
    ])

    <section class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="form-card">
                        <h5 class="mb-1">Merci {{ $name }} !</h5>
                        <p class="text-muted-soft mb-4">Voici le récapitulatif de votre message.</p>
                        <dl class="recap mb-4">
                            <dt>Nom</dt>
                            <dd>{{ $name }}</dd>
                            <dt>E-mail</dt>
                            <dd>{{ $email }}</dd>
                            <dt>Sujet</dt>
                            <dd>{{ $subject }}</dd>
                            <dt>Message</dt>
                            <dd class="mb-0">{{ $message }}</dd>
                        </dl>
                        <a href="{{ route('page.home') }}" class="btn btn-primary py-2 px-4">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

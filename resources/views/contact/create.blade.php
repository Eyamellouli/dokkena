@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    @include('partials.page-header', [
        'title' => 'Contact',
        'subtitle' => 'Une question, une commande pour un événement ? Écrivez-nous.',
    ])

    <section class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h5 class="mb-4">Nos coordonnées</h5>
                        <p class="mb-3"><i class="fa fa-map-marker-alt text-primary me-3"></i>Rue de Marseille, Tunis</p>
                        <p class="mb-3"><i class="fa fa-phone-alt text-primary me-3"></i>+216 71 000 000</p>
                        <p class="mb-3"><i class="fa fa-envelope text-primary me-3"></i>bonjour@dokkena.tn</p>
                        <p class="mb-0"><i class="fa fa-clock text-primary me-3"></i>Tous les jours dès 11 h 30</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form method="POST" action="{{ route('contact.store') }}" class="form-card">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" required>
                                    <label for="name">Votre nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Votre e-mail" required>
                                    <label for="email">Votre e-mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet" required>
                                    <label for="subject">Sujet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Votre message" style="height: 160px" required></textarea>
                                    <label for="message">Votre message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Envoyer le message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

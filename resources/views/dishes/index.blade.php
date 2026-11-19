@extends('layouts.app')

@section('title', 'La carte')

@section('content')
    @include('partials.page-header', [
        'title' => 'La carte',
        'subtitle' => 'Couscous, plats mijotés, soupes, pâtisseries : tout est préparé le jour même.',
    ])

    <section class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                @forelse ($dishes as $id => $dish)
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        @include('partials.dish-card', ['id' => $id, 'dish' => $dish])
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center">La carte est vide pour le moment. Revenez bientôt !</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection

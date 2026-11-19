<footer class="footer pt-5 mt-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('page.home') }}" class="navbar-brand p-0 mb-3 d-inline-flex">
                    <span class="brand-mark"><i class="fa fa-utensils"></i></span>
                    <span class="brand-name">Dokkena</span>
                </a>
                <p class="mb-0">La cuisine tunisienne de chez nous, livrée chez vous. Des plats faits maison, préparés chaque jour.</p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h6 class="footer-title">Navigation</h6>
                <a class="btn btn-link" href="{{ route('page.home') }}">Accueil</a>
                <a class="btn btn-link" href="{{ route('page.about') }}">À propos</a>
                <a class="btn btn-link" href="{{ route('dish.index') }}">La carte</a>
                <a class="btn btn-link" href="{{ route('contact.create') }}">Contact</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-title">Nous trouver</h6>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-2"></i>Rue de Marseille, Tunis</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-2"></i>+216 71 000 000</p>
                <p class="mb-2"><i class="fa fa-envelope me-2"></i>bonjour@dokkena.tn</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-title">Horaires</h6>
                <p class="mb-1">Lundi au samedi</p>
                <p class="text-muted-soft">11 h 30 – 22 h 30</p>
                <p class="mb-1">Dimanche</p>
                <p class="text-muted-soft mb-0">12 h – 21 h</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; Dokkena. Tous droits réservés.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    {{-- Lien de crédit obligatoire : licence CC BY 4.0 du template Restoran --}}
                    Template <a href="https://htmlcodex.com" target="_blank" rel="noopener">HTML Codex</a>,
                    distribué par <a href="https://themewagon.com" target="_blank" rel="noopener">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
</footer>

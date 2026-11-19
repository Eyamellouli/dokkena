<nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('page.home') }}" class="navbar-brand p-0">
        <span class="brand-mark"><i class="fa fa-utensils"></i></span>
        <span class="brand-name">Dokkena</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="Ouvrir le menu">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-lg-4">
            <a href="{{ route('page.home') }}" class="nav-item nav-link {{ request()->routeIs('page.home') ? 'active' : '' }}">Accueil</a>
            <a href="{{ route('page.about') }}" class="nav-item nav-link {{ request()->routeIs('page.about') ? 'active' : '' }}">À propos</a>
            <a href="{{ route('dish.index') }}" class="nav-item nav-link {{ request()->routeIs('dish.*') ? 'active' : '' }}">La carte</a>
            <a href="{{ route('contact.create') }}" class="nav-item nav-link {{ request()->routeIs('contact.*') ? 'active' : '' }}">Contact</a>
        </div>
        <a href="{{ route('dish.index') }}" class="btn btn-primary py-2 px-4">Commander</a>
    </div>
</nav>

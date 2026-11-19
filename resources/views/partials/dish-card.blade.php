<article class="dish-card h-100">
    <a href="{{ route('dish.show', $id) }}" class="dish-card-image">
        <img src="{{ asset($dish['image']) }}" alt="{{ $dish['name'] }}" loading="lazy">
    </a>
    <div class="dish-card-body">
        <div class="d-flex gap-2 mb-2">
            <span class="badge-soft badge-blue">{{ $dish['category'] }}</span>
            @if ($dish['spicy'])
                <span class="badge-soft badge-terracotta"><i class="fa fa-pepper-hot me-1"></i>Piquant</span>
            @endif
        </div>
        <h3 class="dish-card-title">
            <a href="{{ route('dish.show', $id) }}">{{ $dish['name'] }}</a>
        </h3>
        <p class="dish-card-text">{{ $dish['description'] }}</p>
        <div class="d-flex justify-content-between align-items-center mt-auto">
            <span class="price">{{ $dish['price'] }} DT</span>
            <a href="{{ route('dish.show', $id) }}" class="btn btn-outline-primary btn-sm">Voir le plat</a>
        </div>
    </div>
</article>

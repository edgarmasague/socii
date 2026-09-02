<x-layouts.app title="Socii - Galerías">
    <div class="galleries-page">
        <x-archive-nav active="galleries" />
        <header class="galleries-header">
            <div class="galleries-header__line"></div>
            <div class="galleries-header__inner">
                <span class="galleries-header__mark">
                    ✦
                </span>
                <h1 class="galleries-header__title">
                    Galerías
                </h1>
                <p class="galleries-header__subtitle">
                    Colecciones fotograficas de la comunidad, organizadas por quienes las crearon.
                </p>
            </div>
            <div class="galleries-header__line"></div>
        </header>
        <main class="galleries-body">
            @if($galleries->count())
                <div class="gallery-grid">
                    @foreach($galleries as $gallery)
                        <x-gallery-tile :gallery="$gallery" />
                    @endforeach
                </div>
                <div class="galleries-pagination">
                    {{ $galleries->links() }}
                </div>
            @else
                <div class="archive-empty">
                    <p class="archive-empty__mark">✦</p>
                    <p class="archive-empty__label">
                        Todavía no hay galerías creadas.
                    </p>
                    @auth
                        <a
                            href="{{ route('galleries.create') }}"
                            class="btn btn--solid galleries-empty__cta"
                        >
                            Crear la primera galería
                        </a>
                    @endauth
                </div>
            @endif
        </main>
        <x-archive-footer />
    </div>
</x-layouts.app>
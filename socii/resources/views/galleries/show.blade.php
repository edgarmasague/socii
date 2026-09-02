<x-layouts.app :title="$gallery->name . ' - Socii'">
    <div class="gallery-show-page">
        <x-archive-nav active="galleries" />
        <div class="gallery-show__crumbs">
            <a
                href="{{ route('galleries.index') }}"
            >
                Galerías
            </a>
            <span>/</span>
            <span>
                {{ $gallery->name }}
            </span>
        </div>
        <header class="gallery-show__header">
            <h1 class="gallery-show__title">
                {{ $gallery->name }}
            </h1>
            <div class="gallery-show__byline">
                <a
                    href="{{ route('profile.show', $gallery->user) }}"
                >
                    {{ $gallery->user->username }}
                </a>
                <span>·</span>
                <span>
                    {{ $gallery->photos->count() }}
                    {{ Str::plural('fotografía', $gallery->photos->count()) }}
                </span>
            </div>
            @if($gallery->description)
                <p class="gallery-show__description">
                    {{ $gallery->description }}
                </p>
            @endif
            @auth
                @if(auth()->id() === $gallery->user_id)
                    <div class="gallery-show__owner-actions">
                        <a
                            href="{{ route('galleries.edit', $gallery) }}"
                            class="auth-link"
                        >
                            Editar galeria
                        </a>
                        <a
                            href="{{ route('photos.create', ['gallery' => $gallery->id]) }}"
                            class="auth-link"
                        >
                            + Añadir fotos
                        </a>
                    </div>
                @else
                    <form
                        method="POST"
                        action="{{ route('galleries.subscribe', $gallery) }}"
                        class="gallery-show__subscribe"
                    >
                        @csrf
                        <button
                            type="submit"
                            class="btn {{ $gallery->is_subscribed ?? false ? 'btn--ghost' : 'btn--solid' }}"
                        >
                            {{ $gallery->is_subscribed ?? false ? 'Suscrito ✓' : 'Suscribirse' }}
                        </button>
                    </form>
                @endif
            @endauth
        </header>
        <main class="gallery-show__body">
            @if($gallery->photos->count())
                <div class="photo-grid">
                    @foreach($gallery->photos as $photo)
                        <x-photo-tile :photo="$photo" />
                    @endforeach
                </div>
            @else
                <div class="archive-empty">
                    <p class="archive-empty__mark">✦</p>
                    <p class="archive-empty__label">
                        Esta galería todavia no tiene fotografias.
                    </p>
                    @auth
                        @if(auth()->id() === $gallery->user_id)
                            <a
                                href="{{ route('photos.create', ['gallery' => $gallery->id]) }}"
                                class="btn btn--solid galleries-empty__cta"
                            >
                                Subir la primera fotografía
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </main>
        <x-archive-footer />
    </div>
</x-layouts.app>
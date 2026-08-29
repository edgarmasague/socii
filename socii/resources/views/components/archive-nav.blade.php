@props(['active' => null])

<nav class="archive-nav" x-data="{ open: false }" @keydown.escape.window="open = false">
    <a href="{{ route('home') }}" class="archive-nav__brand">
        <span>Socii</span>
    </a>
    <button
        type="button"
        class="archive-nav__toggle"
        @click="open = !open"
        :aria-expanded="open"
        aria-label="Abrir menú"
    >
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div
        class="archive-nav__links"
        :class="{ 'archive-nav__links--open': open }"
        @click="open = false"
    >
        <a
            href="{{ route('galleries.index') }}"
            class="archive-nav__link @if($active === 'galleries') archive-nav__link--active @endif"
        >
            Galerías
        </a>
        @auth
            <a
                href="{{ route('photos.create') }}"
                class="archive-nav__link"
            >
                +Subir
            </a>
            <a 
                href="{{ route('profile.show', auth()->user()) }}"
                class="archive-nav__link"
            >
                {{ auth()->user()->username }}
            </a>
        @else
            <a
                href="{{ route('login') }}"
                class="archive-nav__link"
            >
                Entrar
            </a>
            <a
                href="{{ route('register') }}"
                class="archive-nav__signup"
            >
                Registrarse
            </a>
        @endauth
    </div>
</nav>
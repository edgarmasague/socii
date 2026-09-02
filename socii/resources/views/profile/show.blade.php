<x-layouts.app :title="$user->username . ' - Socii'">
    <div class="profile-page">
        <x-archive-nav />
        <header class="profile-header">
            <div class="profile-header__inner">
                <h1 class="profile-header__name">
                    {{ $user->name }}
                </h1>
                <p class="profile-header__username">
                    {{ '@' . $user->username }}
                </p>
                <p class="profile-header__count">
                    {{ $galleries->total() }}
                    {{ Str::plural('galeria', $galleries->total()) }}
                </p>
            </div>
        </header>
        <main class="profile-body">
            @if($galleries->count())
                <div class="gallery-grid">
                    @foreach($galleries as $gallery)
                        <x-gallery-card :gallery="$gallery" />
                    @endforeach
                </div>
                <div class="galleries-pagination">
                    {{ $galleries->links() }}
                </div>
            @else
                <div class="archive-empty">
                    <p class="archive-empty__mark">✦</p>
                    <p class="archive-empty__label">
                        {{ $user->username }} todavia no tiene galerias
                    </p>
                </div>
            @endif
        </main>
        <x-archive-footer />
    </div>
</x-layouts.app>
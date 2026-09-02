@props(['gallery'])
@php
    $cover = $gallery->photos->first() ?? null;
@endphp

<a 
    href="{{ route('galleries.show', $gallery) }}"
    class="gallery-card"
>
    <div class="gallery-card__frame">
        @if($cover)
            <img
                src="{{ Storage::url($cover->path) }}"
                alt="{{ $gallery->name }}"
            >
        @else
            <div class="gallery-card__placeholder">
                <span>✦</span>
            </div>
        @endif
    </div>
    <div class="gallery-card__meta">
        <h3 class="gallery-card__name">
            {{ $gallery->name }}
        </h3>
        <p class="gallery-card__byline">
            {{ $gallery->user->username}}
            <span class="gallery-card__count">
                {{ $gallery->photos_count}}
                {{ Str::plural('fotografía', $gallery->photos_count)}}
            </span>
        </p>
        @if($gallery->description)
            <p class="gallery-card__desc">
                {{ Str::limit($gallery->description, 90)}}
            </p>
        @endif
    </div>
</a>
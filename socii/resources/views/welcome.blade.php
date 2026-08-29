<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="snap-container bg-socii-paper">
            <section class="screen hero-screen">
                <div class="hero-grid">
                    <div>
                        <div class="hero-brand">
                            <img src="{{ asset('images/logo.png') }}" alt="Socii" class="hero-brand__logo">
                            <div>
                                <span class="hero-brand__name">Socii</span>
                                <span class="hero-brand__label">Archivo de momentos</span>
                            </div>
                        </div>
                        <div class="hero-sep">
                            <div class="hero-sep__line"></div>
                            <span class="hero-sep__mark">✦</span>
                            <div class="hero-sep__line"></div>
                        </div>
                        <p class="hero-tagline">Una foto dice más que mil palabras.</p>
                        <blockquote class="hero-quote">
                            <p>
                                La cámara es un instrumento que enseña<br>
                                a la gente a ver sin cámara.
                            </p>
                            <cite>— Dorothea Lange</cite>
                        </blockquote>
                    </div>
                    <div class="hero-grid__divider"></div>
                    <div class="hero-aside">
                        <span class="hero-aside__mark">✦</span>
                        <p class="hero-aside__lines">
                            Capturar el instante.<br>
                            Preservar la mirada.<br>
                            Honrar el paso del tiempo.
                        </p>
                        <a href="{{ route('galleries.index') }}" class="hero-explore">
                            Explorar galerías <span>→</span>
                        </a>
                        @guest
                            <div class="hero-cta">
                                <a href="{{ route('register')}}" class="btn btn--solid">Unirse</a>
                                <a href="{{ route('login') }}" class="btn btn--ghost">Entrar</a>
                            </div>
                        @endguest
                    </div>
                </div>
                <div class="scroll-hint">
                    <span class="scroll-hint__label">Selección de Portada</span>
                    <span class="scroll-hint__arrow">↓</span>
                </div>
            </section>
            <section class="screen">
                <x-archive-nav />
                    <div class="archive-body">
                        <div class="archive-inner">
                            <div class="archive-heading">
                                <div class="archive-heading__line"></div>
                                <span class="archive-heading__label">Selección de Portada</span>
                                <div class="archive-heading__line"></div>
                            </div>
                            @if($photos->count())
                                <div class="photo-grid">
                                    @foreach($photos as $photo)
                                        <a href="{{ route('photos.show', $photo) }}" class="photo-tile">
                                            <div class="photo-tile__frame">
                                                <img
                                                    src="{{ Storage::url($photo->path) }}"
                                                    alt="{{ $photo->location ? "Fotografía en {$photo->location->city}, {$photo->location->country}" : 'Fotografía del archivo' }}"
                                                    loading="lazy"
                                                >
                                            </div>
                                            <div class="photo-tile__footer">
                                                <div>
                                                    @if($photo->location)
                                                        <p class="photo-tile__location">
                                                            {{ $photo->location->city }}, {{ $photo->location->country }}
                                                        </p>
                                                    @endif
                                                    @if($photo->metadata)
                                                    <p class="photo-tile__specs">
                                                        {{ $photo->metadata->camera_model }}
                                                        @if($photo->metadata->focal_length)· {{ $photo->metadata->focal_length }}mm @endif
                                                        @if($photo->metadata->aperture)· {{$photo->metadata->aperture }}@endif
                                                    </p>
                                                    @endif
                                                </div>
                                                @if($photo->taken_at)
                                                    <span class="photo-tile__date">
                                                        {{ $photo->taken_at->format('M Y') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                                <div class="archive-more">
                                    <a href="{{ route('galleries.index') }}">Ver todas las galerías →</a>
                                </div>
                            @else
                                <div class="archive-empty">
                                    <p class="archive-empty__mark">✦</p>
                                    <p class="archive-empty__label">Todavía no hay fotografías</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <x-archive-footer />
            </section>
        </div>
    </body>
</html>

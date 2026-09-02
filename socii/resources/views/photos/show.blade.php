<x-layouts.app :title="($photo->location->city ?? $photo->filename) . '- Socii'">
    <div class="photo-page">
        <x-archive-nav />
        <div class="photo-detail__crumbs">
            <a
                href="{{ route('galleries.index') }}"
            >
                Galerías
            </a>
            <span>/</span>
            <a
                href="{{ route('galleries.show', $photo->gallery) }}"
            >
                {{ $photo->gallery->name }}
            </a>
        </div>
        <main class="photo-detail">
            <div class="photo-detail__card">
                <img
                    src="{{ Storage::url($photo->path) }}"
                    alt="{{ $photo->filename }}"
                >
                <div class="photo-detail__caption">
                    <div class="photo-detail__heading">
                        @if($photo->location)
                            <h1 class="photo-detail__location">
                                {{ $photo->location->city }}
                                <span>,
                                    {{ $photo->location->country }}
                                </span>
                            </h1>
                        @else
                            <h1 class="photo-detail__location">
                                {{ $photo->filename }}
                            </h1>
                        @endif
                        @if($photo->taken_at)
                            <p class="photo-detail__date">
                                {{ $photo->taken_at->translatedFormat('d \d\e F \d\e Y') }}
                            </p>
                        @endif
                    </div>
                    @if($photo->metadata)
                        <p class="photo-detail__specs">
                            @if($photo->metadata->camera_make || $photo->metadata->camera_model)
                                {{ trim($photo->metadata->camera_make . ' ' . $photo->metadata->camera_model) }}
                            @endif
                            @if($photo->metadata->lens_model)
                                <span>
                                    {{ $photo->metadata->lens_model }}
                                </span>
                            @endif
                            @if($photo->metadata->focal_length)
                                <span>
                                    {{ $photo->metadata->focal_length }}
                                </span>
                            @endif
                            @if($photo->metadata->aperture)
                                <span>
                                    {{ $photo->metadata->aperture }}
                                </span>
                            @endif
                            @if($photo->metadata->shutter_speed)
                                <span>
                                    {{ $photo->metadata->shutter_speed }}
                                </span>
                            @endif
                            @if($photo->metadata->iso)
                                <span>
                                    {{ $photo->metadata->iso }}
                                </span>
                            @endif
                        </p>
                    @endif
                </div>
            </div>
            <a
                href="{{ route('galleries.show', $photo->gallery) }}"
                class="photo-detail__back"
            >
                ← Ver galería completa
            </a>
        </main>
        <x-archive-footer />
    </div>
</x-layouts.app>
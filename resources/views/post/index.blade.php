@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="/img/{{ $post->image }}.jpg" class="w-100">
        </div>
    </div>
    <div class="col-3">
        <div>
            <h3>
                {{ $post->user->username }}
            </h3>
            <p>
                {{ $post->description }}
            </p>
        </div>
    </div>
</div>
@endsection

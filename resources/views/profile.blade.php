@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="img/photo1.jpg" class ="photo-profile rounded-circle" alt="">
        </div>
        <div class="col-6">
            <div class="name">
                {{ $userdata->profile->name }}
            </div>
            <div class="user">
                {{ $userdata->username }}
            </div>
            <div>
            <button type="button" class="btn btn-info">Subscribe</button>
            </div>
            <div class="info">
                {{ $userdata->profile->description }}
            </div>
        </div>
        <div class="d-flex pl-5 pt-3 pb-3">
            <div class="pr-3">573 Follwing</div>
            <div class="pr-3">678 Followers</div>
            <div class="pr-3">21445 Likes</div>
            <div class="pr-3">{{ $userdata->posts->count() }} Posts</div>
        </div>
    </div>
    <div class="posts row pt-5">
        @foreach($userdata->posts as $post)
            <div class="post">
                <a href="/post/{{ $post->id }}">
                    <img src="/img/{{ $post->image }}.jpg">
                    <div class="post-info">
                        <span>5</span>
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        <span>10</span>
                        <i class="fa fa-comments" aria-hidden="true"></i>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection

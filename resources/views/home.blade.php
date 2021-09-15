@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="img/photo1.jpg" class ="photo-profile rounded-circle" alt="">
        </div>
        <div class="col-6">
            <div class="name">
                Mister Dog
            </div>
            <div class="user">
                @misterdog123
            </div>
            <div>
            <button type="button" class="btn btn-info">Subscribe</button>
            </div>
            <div class="info">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium officiis culpa debitis quam, in aliquam placeat, ab atque beatae sed quidem aliquid animi error autem temporibus qui perferendis, minima harum?
            </div>
        </div>
        <div class="d-flex pl-5 pt-3 pb-3">
            <div class="pr-3">573 Follwing</div>
            <div class="pr-3">678 Followers</div>
            <div class="pr-3">21445 Likes</div>
            <div class="pr-3">2143 Posts</div>
        </div>
    </div>
    <div class="posts row pt-5">
            <div class="post">
                <a href="">
                    <img src="img/photo2.jpg">
                    <div class="post-info">
                        <span>5</span>
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        <span>10</span>
                        <i class="fa fa-comments" aria-hidden="true"></i>
                    </div>
                </a>
            </div>
            <div class="post">
                <img src="img/photo3.jpg">
            </div>
            <div class="post">
                <img src="img/photo4.jpg">
            </div>
            <div class="post">
                <img src="img/photo5.jpg">
            </div>
            <div class="post">
                <img src="img/photo6.jpg">
            </div>
            <div class="post">
                <img src="img/photo7.jpg">
            </div>
    </div>
    <div class="lightbox">
        <div class="post-content">
            <div class="post-photo">
                <img src="img/photo7.jpg">
            </div>
            <div class="post-info">
                <div class="post-header">
                    <img src="img/photo1.jpg" class ="photo-owner rounded-circle" alt="">
                    <span>Mister Dog</span>
                    <div class="post-action">
                        <a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
                        <span>50</span>
                        <a href=""><i class="fa fa-comments" aria-hidden="true"></i></a>
                        <span>10</span>
                        <a href=""><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        <span>4</span>
                    </div>
                </div>
                <div class="post-comments">
                    <img src="img/photo1.jpg" class ="photo-owner rounded-circle" alt="">
                    <div class="post-comment">
                    <span>Mister Dog</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi voluptatum nihil ad quae autem alias nesciunt aspernatur modi beatae nemo.
                </div>
                </div>
                <div class="post-footer">
                    <div class="input-comment">
                        <input type="text" placeholder="Add comment">
                        <button class="btn btn-outline-light">Post</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

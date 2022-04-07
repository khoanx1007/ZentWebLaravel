@extends('backend.layouts.master')
@section('title')
Post
@endsection
@section('content-header')
<div class=""> 
    <span><a class="crumb" href="#">Trang chủ</a></span>
    <i class="penci-faicon fa fa-angle-right"></i> 
    <span><a class="crumb" href="#">{{$post->category->name}}</a></span>
    <i class="penci-faicon fa fa-angle-right"></i> 
    <span>{{$post->title}}</span> 
</div>
@endsection
@section('content')
<div class="header-standard header-classic single-header"> 
    <div class="penci-standard-cat">
        <span class="cat">
            <a class="penci-cat-name penci-cat-2" href="#" rel="category tag">
                @foreach($post->tags as $tag)
                    <span class="badge badge-warning">{{ $tag->name }}</span>
                @endforeach
            </a>
        </span>
    </div> 
    <h1 class="post-title single-post-title entry-title">{{$post->title}}</h1> 
    <div class="penci-hide-tagupdated"> 
        <span class="author-italic">By <a class="url fn n" href="#">{{$post->user->name}}</a></span> on <time class="text-primary" datetime="2021-12-21T08:06:13+00:00">{{$post->updated_at}}</time> 
    </div> 
</div>
<div class="mt-3">
    <span>{{$post->content}}a</span>
</div>
@endsection

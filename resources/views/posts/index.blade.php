@extends('layouts.app')
@section('content')
<h1>Our Post Titles</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        {{-- <div class="well">
            {{-- <h3>{{$post->title}}</h3> --}}
            {{-- <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4> --}}
        {{-- </div> --}}

        <div class="well">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div>
        </div>
        
        @endforeach
        <br>
        <br>
        {{$posts->links()}}
 
    @else
        <p>No posts found</p>
    @endif
    
@endsection
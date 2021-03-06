@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$posts->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$posts->cover_image}}">
    <h4>{{$posts->body}}</h4>

<hr>
<small>Written on {{$posts->created_at}} by {{$posts->user->name}}</small>

    <hr>
@if(!auth::guest())
    @if(auth::user()->id == $posts->user_id )
        <a href="/posts/{{$posts->id}}/edit" class="btn btn-default">Edit</a>

        {!!Form::open(['action' => ['PostsController@destroy', $posts->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
@endif
@endsection
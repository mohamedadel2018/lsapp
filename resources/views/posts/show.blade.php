@extends('layout.app')
@section('content')

        <h3>{{$post->title}}</h3>
        <h6>Written on {{$post->created_at}} </h6>
        <div>
            {{$post->body}}
        </div>
@endsection
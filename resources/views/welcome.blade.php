@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>{{$nome}}</h1>

<div id="search-container"></div>

@foreach($events as $event)
    <p>{{$event->title}} -- {{$event->description}}</p>
@endforeach
@endsection

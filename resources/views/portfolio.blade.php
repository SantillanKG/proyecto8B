@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>@lang('Portfolio')</h1>
    <ul>
        @forelse ($portfolio as $item)
            <li>{{$item['title']}}</li>
        @empty
            <li>No hay proyectos a mostrar</li>
        @endforelse
    </ul>
@endsection
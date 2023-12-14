@extends('layouts.layout')

@section('content')

<!-- Contenido -->
<section class="container-fluid content py-5">

        <div class="row justify-content-center">
            <!-- Post -->
            <div class="col-12 col-md-7 text-center">
                <h1>{{$event->title}}</h1>
                <hr>
                <img src="{{asset($event->featured)}}" alt="{{$event->tittle}}" class="img-fluid">

                <p class="text-left mt-3 event-txt">
                    <span><strong>Autor:</strong> {{$event->author}} &nbsp; <strong>Fecha:</strong> {{$event->date}}</span>
                    <br></br>
                    <p class="text-left event-txt"><i>Categoría: {{$event->category->name}}</i></p>
                </p>
                <p class="text-left">
                <strong>DESCRIPCIÓN</strong> <br></br>{{$event->content}}
                </p>
                <span class="float-right">Creado: {{$event->created_at->diffForHumans()}}</span>
            </div>

            <!-- Entradas recientes -->
            <div class="col-md-3 offset-md-1">
                <p>Últimas entradas</p>

                @foreach ($latestEvents as $event)
                <div class="row mb-4">
                    <div class="col-4 p-0">
                        <a href="{{route('event', $event->id)}}">
                            <img src="{{asset($event->featured)}}" class="img-fluid rounded" width="100" alt="{{$event->title}}">
                        </a>
                    </div>
                    <div class="col-7 pl-0">
                        <a href="{{route('event', $event->id)}}" class="link-event">{{$event->title}}</a><br></br>
                        <a href="{{route('event', $event->id)}}" class="link-event">{{$event->date}}</a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection
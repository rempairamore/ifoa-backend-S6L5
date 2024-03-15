@extends('layouts.layout')
@section('title', 'Homepage')

<?php print_r($activities)?>

@section('content')
@if($activities&&$project)
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach($activities as $key => $value)
<div class="col">
    <div class="card">
        <img src="https://www.celoxis.com/cassets/img/pmc/project-management.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nome Attività :{{$value->title}}</h5>
            <p class="card-text">ID:{{$value->id}}</p>
            <p class="card-text">Tot.Pagine{{$value->pages}}</p>
            <p class="card-text">Anno Pubblicazione: {{$value->year}}</p>
            <a type="button" class="btn btn-outline-info" href="projects/activities/{{$project[0]->id}}">Info</a>
            <a type="button" class="btn btn-outline-danger" href="/books/{{$value->id}}/destroy">Delete</a>
        </div>
    </div>
</div>
@endforeach
</div>
        @endif
@endsection
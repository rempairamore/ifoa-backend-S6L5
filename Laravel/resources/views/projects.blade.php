@extends('layouts.layout')
@section('title', 'Homepage')



@section('content')
@if($activities && $project)
<a type="button" href="/projects/create" class="btn btn-secondary d-block text-black my-3">Add Project</a>
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach($project as $key => $value)
<div class="col">
    <div class="card">
        <img src="https://www.celoxis.com/cassets/img/pmc/project-management.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nome Progetto :{{$value->title}}</h5>
            <p class="card-text">ID:{{$value->id}}</p>
            <p class="card-text">Tot.Pagine{{$value->pages}}</p>
            <p class="card-text">Anno Pubblicazione: {{$value->year}}</p>
            <div class="d-flex">
            <a type="button" class="btn btn-outline-info mx-2" href="projects/activities/{{$value->activities_id}}">Info</a>
            <form method="post" action="/projects/activities/{{$value->activities_id}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">
                    Delete
                 </button>
            </form>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>
        @endif
@endsection
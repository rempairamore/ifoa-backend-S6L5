@extends('layouts.layout')
@section('title', 'Project Detail')

@section('content')
    @if($project)
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$project->title}}</h5>
                    <p class="card-text">Pages: {{$project->pages}}</p>
                    <p class="card-text">Year: {{$project->year}}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated {{$project->updated_at}}</small></p>
                </div>
                <div class="card-body">
                    <a type="button" class="btn btn-outline-dark d-block" href="/projects">Back</a>
                </div>
            </div>
        </div>
    @endif
@endsection
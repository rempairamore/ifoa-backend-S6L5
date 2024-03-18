@extends('layouts.layout')
@section('title', 'Create Project')

@section('content')
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="/projects">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="title" placeholder="Project title">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" name="pages" placeholder="Project pages">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" name="year" placeholder="Project year">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success d-block text-black">Add Project</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
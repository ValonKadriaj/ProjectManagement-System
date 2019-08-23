@extends('layouts.app')

@section('content')
    <div class="lg:w-1/2 lg:mx-auto bg-white p-6 md:py-12 md:px-16 rounded-lg shadow">
        <h1 class="text-3xl font-normal mb-10 text-center">
                Edit Project
        </h1>
        <form   
            action="{{ $project->path() }}"
            method="POST"
            >
            @method('patch')

            @include('projects.form', [
                'buttonText' => 'Update Project'
            ])
        </form>
    </div>
@endsection
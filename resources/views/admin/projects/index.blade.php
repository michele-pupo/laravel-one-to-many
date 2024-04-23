@extends('layouts.app')

@section('content')

<div class="container py-2">
    <h1 class="text-center pb-4 display-5 fw-bold text-uppercase">Lista progetti</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Tecnologie usate</th>
            <th scope="col">Data</th>
            </tr>
        </thead>
    <tbody>
    
            {{-- @dump($posts) --}}
            @foreach($projects as $project)
            <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$project->name}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->used_technologies}}</td>
                <td>{{ \Carbon\Carbon::parse($project->project_date)->format('d/m/Y') }}</td>
                <td><a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-info">Mostra</a></td>
                <td><a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning">Modifica</a></td>
            </tr>
            @endforeach
    
    </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <button class="btn btn-primary mt-5"><a class="text-decoration-none " href="{{route('admin.projects.create')}}">Aggiungi progetto</a></button>
    </div>
</div>

@endsection
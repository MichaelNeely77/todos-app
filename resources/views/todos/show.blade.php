@extends('layouts.app')

@section('title')
Single Todo: {{ $todo->name }}
@endsection

@section('content')

<h1 class="text-center">
    {{ $todo->name }}
</h1>

<div class="row justify-content-center">

<div class="col-md-6">
    <div class="card card-default">
            <div class="card-header">
                Details
            </div>
            <div class="card-body">
                {{ $todo->description }}
            </div>
        </div>
        <a href="/todos-app/public/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm my-2">Edit</a>
        <a href="/todos-app/public/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm my-2">Delete</a>
</div>
</div>

@endsection
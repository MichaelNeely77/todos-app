@extends('layouts.app')

@section('content')

<h1 class="text-center">
    Edit Todos
</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Edit Todo</div>
                    <div class="card-body">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                            <form action="update-todos" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $todo->name }}">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="description" placeholder="Description" cols="30" rows="10" class="form-control" >{{ $todo->description }}</textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-success">
                                            Update Todo
                                        </button>

                                    </div>
                                </form>
                    </div>
                
            </div>
        </div>
    </div>
@endsection
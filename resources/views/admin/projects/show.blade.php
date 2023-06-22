@extends('layouts.admin')

@section('content')
    <h1 class="text-uppervase"> {{ $project -> title }} </h1>

    <div class="card">
        <div class="card-body p-3">
            <p class="card-text"><strong> Image: </strong> <p class="card-text"> <img class="img-fluid" src="{{asset('storage/' . $project->image)}}" alt=""> </p> </p>
            <p class="card-text"><strong> Description: </strong> {{ $project -> description }} </p>
            <p class="card-text"><strong> Languages: </strong> {{ $project -> languages }} </p>
        </div>
    </div>
    <div class="mt-5">
        <a href=" {{ route( 'admin.projects.edit', $project ) }} " class="btn btn-warning text-danger text-uppercase"><strong> edit</strong></a>
    </div>
    <div class="mt-2">
        <form action="{{route('admin.projects.destroy', $project)}}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger text-uppercase text-warning" onclick="return confirm('Are you sure you want to delete {{$project -> title }}')"> <strong> delete </strong> </button>

        </form>
    </div>

@endsection

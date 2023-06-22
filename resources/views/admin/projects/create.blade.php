@extends('layouts.admin')

@section('content')
    <h1 class="text-uppervase"> add a project to portfolio </h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action=" {{ route('admin.projects.store') }} " method="POST" enctype="multipart/form-data" class="row">

        @csrf

        <div class="form-group mt-3">
            <label for="input-title" class="form-label text-white">Title:</label>
            <input type="text" id="input-title" class="form-control" name="title" placeholder="title" autofocus>
        </div>
        <div class="form-group mt-3">
            <label for="input-description" class="form-label text-white">Description:</label>
            <textarea id="input-description" class="form-control" name="description" cols="35" rows="3">
            </textarea>
        </div>
        <div class="form-group mt-3">
            <label for="input-image" class="form-label text-white">Image:</label>
            <input type="file" id="input-image" class="form-control" name="image" placeholder="image link"> 
        </div>
        <div class="form-group mt-3 col-6">
            <label for="input-languages" class="form-label text-white">Languages:</label>
            <input type="text" id="input-languages" class="form-control" name="languages" placeholder="languages"> 
        </div>
        <button type="submit" class="btn btn-primary btn-outline-light my-4 col-2 mx-auto text-uppercase"><strong> add </strong></button>
    </form>


@endsection

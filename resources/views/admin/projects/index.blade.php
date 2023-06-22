@extends('layouts.admin')

@section('content')
    <h1 class="text-uppervase"> my projects </h1>

    @if (Session::has('success'))
        <div>
            {!! Session::get('success') !!}
        </div>
    @endif

    </div>
        <button class="text-uppercase btn btn-primary"><a class="text-uppercase text-white text-decoration-none" href="{{ route('admin.projects.create') }}">add project</a></button>
    </div>

    @forelse ($projects as $elem)
    <div class="card">
        <div class="card-body p-3">
            <p class="card-text"><strong> Title: </strong> {{ $elem->title }} </p>
            <p class="card-text"> <img class="img-fluid" src="{{asset('storage/' . $elem->image)}}" alt=""> </p>
            <p class="card-text"><strong> Languages: </strong> {{ $elem->languages }} </p>
            <p> <a class="text-decoration-none" href="{{ route('admin.projects.show', $elem) }}"> More </a></p>
        </div>
        
    @empty
        
    @endforelse

@endsection

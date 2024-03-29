@extends('layouts.app')

@section('content')
<main class="container-xl">
    <div class="row my-5">
        @foreach ($comics as $comic)
        <div class="col-2 d-flex align-items-stretch my-2">
            <div class="card bg-dark text-light fs-4">
                <div style="min-height: 300px">
                    <img class="card-img-top h-100" src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{$comic['series']}}">
                </div>
                <h2 class="card-title"> {{$comic['series']}} </h2>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        <button class="w-25 mb-5">Load More</button>
    </div>
</main>

@endsection


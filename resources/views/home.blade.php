@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-5">
                <h1>Photo gallery!</h1>
            </div>
            @foreach($randomPhotos AS $photo)
                <div class="col-12 col-md-4 col-ld-4 text-center">
                    <img src="{{ $photo->url }}" class="img-fluid" alt="Image" style="height: 300px;">
                    <p class="mb-0 mt-2">
                        {{ $photo->desc }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection

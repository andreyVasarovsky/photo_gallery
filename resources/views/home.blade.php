@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-5">
                <h1>Photo gallery!</h1>
            </div>
            @foreach($randomPhotos AS $photo)
                <a href="{{ route('public.theme.show', $photo->theme->id) }}" class="col-12 col-md-6 text-center mt-2 text-decoration-none text-secondary">
                    <div class="preview-card shadow-lg p-3 bg-white rounded">
                        <img src="{{ $photo->url }}" class="img-fluid" alt="Image" style="height: 300px;">
                        <h5 class="mb-2 mt-2">{{ $photo->theme->title }}</h5>
                        <p class="mb-0 mt-2 text-decoration-none">
                            @if($photo->desc)
                                {{ $photo->desc }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection

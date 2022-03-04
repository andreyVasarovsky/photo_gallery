@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>{{ $theme->title }}</h1>
            </div>
            @if($theme->photos->count() > 0)

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($theme->photos AS $index => $photo)
                            <div class="carousel-item {{ $index == 0 ? ' active' : '' }}">
                                <img class="d-block w-100" src="{{ $photo->url }}" alt="First slide">
                            </div>

                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            @else
                <div class="alert alert-dark" role="alert">
                    Записей нет!
                </div>
            @endif

            <div class="col-md-12">
                {{ $theme->photos }}
            </div>
        </div>
    </div>
@endsection

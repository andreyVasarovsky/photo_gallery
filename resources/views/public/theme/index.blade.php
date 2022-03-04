@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>{{ $theme->title }}</h1>
            </div>
            <div class="col-6">
                @if($theme->photos->count() > 0)
                    <div id="photo-slider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($theme->photos AS $index => $photo)
                                <div class="carousel-item {{ $index == 0 ? ' active' : '' }}">
                                    <img class="d-block w-100" src="{{ $photo->url }}" alt="First slide">
                                    @if(strlen($photo->desc) > 0)
                                        <div class="carousel-caption d-none d-md-block"
                                             style="background-color: #e5e5e5 !important; color: black !important; border-radius: 8px; padding: 8px;">
                                            <p class="mb-0">
                                                {{ $photo->desc }}
                                            </p>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#photo-slider"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#photo-slider"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                @else
                    <div class="alert alert-dark" role="alert">
                        Записей нет!
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

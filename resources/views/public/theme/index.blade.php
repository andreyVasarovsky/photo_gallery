@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Список тем</h1>
            </div>
            <div class="col-6">
                @if($themes->count() > 0)
                    <div class="list-group">
                        @foreach($themes AS $theme)
                            <a href="{{ route('public.theme.show', $theme->id) }}" class="list-group-item list-group-item-action">{{ $theme->title }}</a>
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-dark" role="alert">
                        Записей нет!
                    </div>
                @endif
            </div>
            <div class="col-6"></div>
        </div>
    </div>
@endsection

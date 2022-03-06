@extends('admin.main')
@extends('admin.nav')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-12 mb-2">
                            <h1 class="m-0 d-inline align-middle">Фото</h1>
                        </div>
                        <div class="col-12 mb-2">
                            <a href="{{ route('admin.photo.create') }}" type="button"
                               class="btn btn-sm btn-success d-inline">Добавить</a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        @if($photos->count() > 0)
                            @foreach($photos AS $photo)
                                <div class="col-12 col-sm-6 col-md-3 mt-4">
                                    <div href="{{ route('admin.photo.show', $photo->id) }}" class="photo-admin-card">
                                        <div class="img-wrapper">
                                            <img src="{{ $photo->url }}" alt="Картинка">
                                        </div>
                                        <div class="theme">
                                            {{ $photo->theme->title }}
                                        </div>
                                        <div class="action-list text-center mt-2">
                                            <a href="{{ route('admin.photo.show', $photo->id) }}" class="action">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.photo.edit', $photo->id) }}" class="action">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.photo.destroy', $photo->id) }}" method="POST" class="action d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent p-0">
                                                    <i class="fas fa-trash-alt text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="open">
                                            <a href="{{ $photo->url }}" target="_blank">В новой вкладке</a>
                                        </div>
                                        <div class="size">
                                            Размер: {{ $photo->size }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="alert alert-dark" role="alert">
                                Записей нет!
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

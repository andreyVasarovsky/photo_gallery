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
                        <div class="col-6">
                            @if($photos->count() > 0)
                                <table class="table table-hover hover-table-actions close-borders">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Превью</th>
                                        <th scope="col">Ссылка</th>
                                        <th scope="col">Размер</th>
                                        <th scope="col">Тема</th>
                                        <th scope="col">Описание</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($photos AS $photo)
                                        <tr>
                                            <th scope="row">{{ $photo->id }}</th>
                                            <td><img src="{{ $photo->url }}" alt="Картинка" style="max-width: 100px;"></td>
                                            <td><a href="{{ $photo->url }}" target="_blank">Открыть</a></td>
                                            <td>{{ $photo->size }}</td>
                                            <td>{{ $photo->theme->title }}</td>
                                            <td>{{ $photo->desc }}</td>
                                            <td class="actions" style="font-size: 14px;">
                                                <a href="{{ route('admin.photo.show', $photo->id) }}" class="action">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.photo.edit', $photo->id) }}" class="action">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.photo.destroy', $photo->id) }}" method="POST" class="action">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent p-0">
                                                        <i class="fas fa-trash-alt text-danger" role="button"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="alert alert-dark" role="alert">
                                    Записей нет!
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

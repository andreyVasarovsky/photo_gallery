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
                        <div class="col-sm-6 align-items-center">
                            <h1 class="m-0 d-inline">Просмотр фото</h1>
                            <a href="{{ route('admin.photo.edit', $photo->id) }}" class="link-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.photo.destroy', $photo->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="fas fa-trash-alt link-icon text-danger" role="button"></i>
                                </button>
                            </form>
                        </div>
                        @if(session('error'))
                            <div class="col-12 alert alert-danger">{{ session('error') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <table class="table close-borders">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Размер</th>
                                    <th scope="col">Тема</th>
                                    <th scope="col">Описание</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">{{ $photo->id }}</th>
                                    <td>{{ $photo->size }}</td>
                                    <td>{{ $photo->theme->title }}</td>
                                    <td>{{ $photo->desc }}</td>
                                </tr>
                                </tbody>
                            </table>

                            <a href="{{ route('admin.photo.index') }}" type="button" class="btn btn-danger">Вернутся</a>
                        </div>
                        <div class="col-6">
                            <img src="{{ $photo->url }}" alt="Картинка">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

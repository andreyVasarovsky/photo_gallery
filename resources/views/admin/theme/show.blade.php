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
                            <h1 class="m-0 d-inline">Просмотр тему</h1>
                            <a href="{{ route('admin.theme.edit', $theme->id) }}" class="link-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.theme.destroy', $theme->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="fas fa-trash-alt link-icon text-danger" role="button"></i>
                                </button>
                            </form>
                            @if($errors->any())
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{ $errors->first() }}
                                </div>
                            @endif
                        </div>
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
                                    <th scope="col">Название</th>
                                    <th scope="col">Описание</th>
                                    <th scope="col">Кол-во фото</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">{{ $theme->id }}</th>
                                    <td>{{ $theme->title }}</td>
                                    <td>{{ $theme->desc }}</td>
                                    <td>{{ $theme->photos->count() }}</td>
                                </tr>
                                </tbody>
                            </table>

                            <a href="{{ route('admin.theme.index') }}" type="button" class="btn btn-danger">Вернутся</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

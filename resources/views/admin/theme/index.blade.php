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
                            <h1 class="m-0 d-inline align-middle">Темы</h1>
                        </div>
                        <div class="col-12 mb-2">
                            <a href="{{ route('admin.theme.create') }}" type="button"
                               class="btn btn-sm btn-success d-inline">Добавить</a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            @if($themes->count() > 0)
                                <table class="table table-hover hover-table-actions close-borders">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Название</th>
                                        <th scope="col">Описание</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($themes AS $theme)
                                        <tr>
                                            <th scope="row">{{ $theme->id }}</th>
                                            <td>{{ $theme->title }}</td>
                                            <td>{{ $theme->desc }}</td>
                                            <td class="actions" style="font-size: 14px;">
                                                <a href="{{ route('admin.theme.show', $theme->id) }}" class="action">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.theme.edit', $theme->id) }}" class="action">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.theme.destroy', $theme->id) }}" method="POST" class="action">
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

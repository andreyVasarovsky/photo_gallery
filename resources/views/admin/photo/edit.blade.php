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
                        <div class="col-sm-6">
                            <h1 class="m-0">Редактировать фото</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <form action="{{ route('admin.photo.update', $photo->id) }}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="theme_id">Тема</label>
                                    <select name="theme_id" class="form-control" id="theme_id">
                                        @foreach($themes AS $theme)
                                            <option {{ (old('theme_id') == $theme->id) ? ' selected' : ($photo->theme_id == $theme->id ? ' selected' : '') }}
                                                    value="{{ $theme->id }}">
                                                {{ $theme->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('theme_id')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title">Описание</label>
                                    <textarea class="form-control" name="desc" id="desc" rows="3" placeholder="Описание">{{ (empty(old('desc'))) ? $photo->desc : old('desc') }}</textarea>
                                    @error('desc')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Обновить</button>
                                    <a href="{{ route('admin.photo.index') }}" type="button" class="btn btn-danger">К списку</a>
                                </div>
                            </form>
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

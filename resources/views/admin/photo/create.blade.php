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
                            <h1 class="m-0 d-inline align-middle">Добавить фото</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <form action="{{ route('admin.photo.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="theme_id">Тема</label>
                                    <select name="theme_id" class="form-control" id="theme_id">
                                        <option value="" disabled {{ (old('theme_id') == '') ? ' selected' : '' }}>Выберите группу</option>
                                        @foreach($themes AS $theme)
                                            <option {{ (old('theme_id') == $theme->id) ? ' selected' : '' }} value="{{ $theme->id }}">
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
                                    <label for="theme_id">Фото</label>
                                    <input type="file" name="image" class="form-control" style="font-size: 15px;" accept="image/*">
                                    @error('image')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="desc">Описание</label>
                                    <textarea class="form-control" name="desc" id="desc" rows="3" placeholder="Описание">{{ (empty(old('desc')))?'' : old('desc') }}</textarea>
                                    @error('desc')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                    <a href="{{ route('admin.photo.index') }}" type="button" class="btn btn-danger">Вернутся</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

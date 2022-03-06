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
                            <h1 class="m-0">Редактировать клиента</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <form action="{{ route('admin.client.update', $client->id) }}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="form-group d-none">
                                    <input type="hidden" name="id" class="form-control" id="id" value="{{ $client->id }}">
                                </div>

                                <div class="form-group">
                                    <label for="title">ФИО</label>
                                    <input type="text" name="full_name" class="form-control" id="full_name"
                                           placeholder="ФИО" value="{{ (empty(old('full_name'))) ? $client->full_name : old('full_name') }}">
                                    @error('full_name')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title">Телефон</label>
                                    <input type="text" name="phone" class="form-control" id="phone"
                                           placeholder="Телефон" value="{{ (empty(old('phone'))) ? $client->phone : old('phone') }}">
                                    @error('phone')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="region">Регион</label>
                                    <input type="text" name="location" class="form-control" id="location"
                                           placeholder="Регион" value="{{ (empty(old('location'))) ? $client->location : old('location') }}">
                                    @error('location')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="region">Email</label>
                                    <input type="text" name="email" class="form-control" id="email"
                                           placeholder="Email" value="{{ (empty(old('email'))) ? $client->email : old('email') }}">
                                    @error('email')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="theme_ids">Темы</label>
                                    <select multiple class="form-control" name="theme_ids[]" id="theme_ids">
                                        @foreach($themes AS $theme)
                                            <option
                                                {{ (is_array(old('theme_ids')) && in_array($theme->id, old('theme_ids'))) || empty(old('theme_ids')) && in_array($theme->id, $clientThemeIds) ? ' selected' : '' }}
                                                value="{{ $theme->id }}">
                                                {{ $theme->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('theme_ids')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Обновить</button>
                                    <a href="{{ route('admin.client.index') }}" type="button" class="btn btn-danger">К списку</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

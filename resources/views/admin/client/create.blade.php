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
                            <h1 class="m-0 d-inline align-middle">Добавить клиента</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <form action="{{ route('admin.client.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="title">ФИО</label>
                                    <input type="text" name="full_name" class="form-control" id="title"
                                           placeholder="ФИО" value="{{ (empty(old('full_name'))) ? '' : old('full_name') }}">
                                    @error('full_name')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="region">Телефон</label>
                                    <input type="text" name="phone" class="form-control" id="phone"
                                           placeholder="Телефон" value="{{ (empty(old('phone'))) ? '' : old('phone') }}">
                                    @error('phone')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="region">Регион</label>
                                    <input type="text" name="location" class="form-control" id="location"
                                           placeholder="Регион" value="{{ (empty(old('location'))) ? '' : old('location') }}">
                                    @error('location')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="region">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                           placeholder="Email" value="{{ (empty(old('email'))) ? '' : old('email') }}">
                                    @error('email')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                    <a href="{{ route('admin.client.index') }}" type="button" class="btn btn-danger">Вернутся</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

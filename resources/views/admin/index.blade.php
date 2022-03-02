@extends('admin.main')
@extends('admin.nav')
@section('content')
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('dist/img/admin_logo.png')}}" alt="ADMIN" height="60" width="60">
    </div>
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Админ панель</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3> {{ $clients->count() }} </h3>
                                    <p>Клиенты</p>
                                </div>
                                <div class="icon">
                                    <i class="ico fas fa-users"></i>
                                </div>
                                <a href="{{ route('admin.client.index') }}" class="small-box-footer">Смотреть <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3> {{ $photos->count() }} </h3>
                                    <p>Фото</p>
                                </div>
                                <div class="icon">
                                    <i class="ico fas fa-image"></i>
                                </div>
                                <a href="{{ route('admin.photo.index') }}" class="small-box-footer">Смотреть <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3> {{ $themes->count() }} </h3>
                                    <p>Темы</p>
                                </div>
                                <div class="icon">
                                    <i class="ico fas fa-list"></i>
                                </div>
                                <a href="{{ route('admin.theme.index') }}" class="small-box-footer">Смотреть <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

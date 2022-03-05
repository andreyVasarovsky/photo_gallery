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
                            <h1 class="m-0">Редактировать заявку</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <form action="{{ route('admin.visit.update', $visit->id) }}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="form-group d-none">
                                    <input type="hidden" name="id" class="form-control" id="id" value="{{ $visit->id }}">
                                </div>
                                <div class="form-group">
                                    <label for="title">ФИО</label>
                                    <input type="text" name="full_name" class="form-control" id="full_name"
                                           placeholder="ФИО" value="{{ (empty(old('full_name'))) ? $visit->full_name : old('full_name') }}">
                                    @error('full_name')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title">Телефон</label>
                                    <input type="text" name="phone" class="form-control" id="phone"
                                           placeholder="Телефон" value="{{ (empty(old('phone'))) ? $visit->phone : old('phone') }}">
                                    @error('phone')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="region">Регион</label>
                                    <input type="text" name="location" class="form-control" id="location"
                                           placeholder="Регион" value="{{ (empty(old('location'))) ? $visit->location : old('location') }}">
                                    @error('location')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="region">Email</label>
                                    <input type="text" name="email" class="form-control" id="email"
                                           placeholder="Email" value="{{ (empty(old('email'))) ? $visit->email : old('email') }}">
                                    @error('email')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="status">Статус</label>
                                    <select name="status" class="form-control" id="status">
                                        @foreach($visit->getStatuses() AS $statusId => $status)
                                            <option {{ (old('status') == $statusId) ? ' selected' : ($statusId == $visit->status ? ' selected' : '') }}
                                                    value="{{ $statusId }}">
                                                {{ $status }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('status')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="date">Дата договора</label>
                                    <input type="text" name="date" class="form-control" id="visit_date"
                                           value="{{ (empty(old('date'))) ? $visit->date : old('date') }}">
                                    @error('date')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Обновить</button>
                                    <a href="{{ route('admin.visit.index') }}" type="button" class="btn btn-danger">К списку</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

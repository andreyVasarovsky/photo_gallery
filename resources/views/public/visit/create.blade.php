@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Оставить заявку</h1>
            </div>
            <div class="col-6">
                <form action="{{ route('public.visit.store') }}" method="POST">
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
                        <label for="date">Дата</label>
                        <input type="text" name="date" class="form-control" id="visit_date"
                               value="{{ (empty(old('date'))) ? '' : old('date') }}">
                        @error('date')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <div class="g-recaptcha"
                             data-sitekey="{{config('services.recaptcha.key')}}">
                        </div>
                        @error('g-recaptcha-response')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Оставить заявку</button>
                    </div>
                </form>
            </div>
            <div class="col-6"></div>
        </div>
    </div>
@endsection

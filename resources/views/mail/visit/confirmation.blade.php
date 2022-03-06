@component('mail::message')
    <div class="col-12">
        Добрый день, <strong>{{ $data['full_name'] }}</strong>
    </div>
    <div class="col-12">
        Ваш визит успешно зарегестрирован на {{ $data['date'] }}
    </div>
@endcomponent

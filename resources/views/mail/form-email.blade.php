@component('mail::message')
# Email de confirmação - {{$nomeUsuario}}

@component('mail::button', ['url' => $url])
    Acessar
@endcomponent

@endcomponent

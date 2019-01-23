@component('mail::message')
    # Потверждение почты

    Пожалуйста перейдите по ссылке что потвердить вашу почту на сайте Доски  объявления:

    {{route('register.verify',['token' => $user->verify_token])}}

@endcomponent

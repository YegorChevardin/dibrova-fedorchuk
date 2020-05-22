@component('mail::message')
# You have a new subscriber from your web site!

{{ $email }} started to subscribe your news from your web site!

Have a nice day,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# You have a new feedback from {{ $email }}
<br>
Hi, my name is {{ $name }}
<br>
I wrote a letter about "{{ $subject }}" subject for you!
<br>
Message: {{ $message }}
<br>
Thank you for reading and i'm waiting for your request!<br>
{{ config('app.name') }}
@endcomponent

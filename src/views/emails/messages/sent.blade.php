@component('mail::message')
# Introduction

Hello {{ $email }}
The body of your message.

<br>

{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

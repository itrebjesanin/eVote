@component('mail::message')
# Introduction

{{$message}}

@component('mail::button', ['url' => 'http://voting.test'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

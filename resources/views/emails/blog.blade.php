@component('mail::message')
# Introduction

<h1>New Post: {{ $post->title }}</h1>

@component('mail::button', ['url' => ''])

MVVT

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

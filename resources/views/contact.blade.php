@extends('layouts.app')
@section('title', __('nav.contact'))
@section('content')
<h1 class="text-2xl font-semibold mb-6 inline-flex items-center gap-2"><img src="/images/icons/contact.svg" width="22" height="22" alt="">{{ __('nav.contact') }}</h1>
<p class="text-neutral-700">{{ __('contact.intro') }}</p>
<div class="mt-4 space-y-2">
  <p><strong>E-mail:</strong> <a class="text-blue-600 hover:underline" href="mailto:Valeriy.i.tsoy@gmail.com">Valeriy.i.tsoy@gmail.com</a></p>
  <p class="flex items-center gap-3">
    <a class="inline-flex items-center gap-2 hover:opacity-90" href="https://linkedin.com/in/valerii-tsoi-a555859b" target="_blank" rel="noopener"><img src="/images/icons/linkedin.svg" width="18" height="18" alt="">LinkedIn</a>
    <a class="inline-flex items-center gap-2 hover:opacity-90" href="https://github.com/ValeriiTsoi/website" target="_blank" rel="noopener"><img src="/images/icons/github.svg" width="18" height="18" alt="">GitHub</a>
  </p>
</div>
@endsection

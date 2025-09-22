@extends('layouts.app')
@section('title', __('nav.hobby'))
@section('content')
<h1 class="text-2xl font-semibold mb-6 inline-flex items-center gap-2"><img src="/images/icons/hobby.svg" width="22" height="22" alt="">{{ __('nav.hobby') }}</h1>
<div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
  <a href="/{{ app()->getLocale() }}/hobby/travel" class="group rounded-xl border border-neutral-200 p-5 hover:shadow-md transition">
    <div class="flex items-center gap-3"><img src="/images/icons/travel.svg" width="22" height="22" alt=""><h3 class="font-semibold">{{ __('hobby.travel') }}</h3></div>
    <p class="mt-2 text-neutral-600">{{ __('hobby.soon') }}</p>
  </a>
  <a href="/{{ app()->getLocale() }}/hobby/sports" class="group rounded-xl border border-neutral-200 p-5 hover:shadow-md transition">
    <div class="flex items-center gap-3"><img src="/images/icons/sports.svg" width="22" height="22" alt=""><h3 class="font-semibold">{{ __('hobby.sports') }}</h3></div>
    <p class="mt-2 text-neutral-600">{{ __('hobby.soon') }}</p>
  </a>
  <a href="/{{ app()->getLocale() }}/hobby/pets" class="group rounded-xl border border-neutral-200 p-5 hover:shadow-md transition">
    <div class="flex items-center gap-3"><img src="/images/icons/pets.svg" width="22" height="22" alt=""><h3 class="font-semibold">{{ __('hobby.pets') }}</h3></div>
    <p class="mt-2 text-neutral-600">{{ __('hobby.soon') }}</p>
  </a>
  <a href="/{{ app()->getLocale() }}/hobby/smarthome" class="group rounded-xl border border-neutral-200 p-5 hover:shadow-md transition">
    <div class="flex items-center gap-3"><img src="/images/icons/smarthome.svg" width="22" height="22" alt=""><h3 class="font-semibold">{{ __('hobby.smarthome') }}</h3></div>
    <p class="mt-2 text-neutral-600">{{ __('hobby.soon') }}</p>
  </a>
  <a href="/{{ app()->getLocale() }}/hobby/radio" class="group rounded-xl border border-neutral-200 p-5 hover:shadow-md transition">
    <div class="flex items-center gap-3"><img src="/images/icons/radio.svg" width="22" height="22" alt=""><h3 class="font-semibold">{{ __('hobby.radio') }}</h3></div>
    <p class="mt-2 text-neutral-600">{{ __('hobby.soon') }}</p>
  </a>
</div>
@endsection

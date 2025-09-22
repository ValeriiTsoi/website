@extends('layouts.app')
@section('title', __('nav.hobby'))
@section('content')
<h1 class="text-2xl font-semibold mb-6 inline-flex items-center gap-2"><img src="/images/icons/hobby.svg" width="22" height="22" alt="">{{ __('nav.hobby') }}</h1>
<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
  <a href="/{{ app()->getLocale() }}/hobby/travel" class="group rounded-xl border border-neutral-200 hover:shadow-md transition overflow-hidden">
    <img src="/images/hobby/travel.svg" class="w-full h-40 object-cover" alt="">
    <div class="p-5">
      <div class="flex items-center gap-3"><img src="/images/icons/travel.svg" width="22" height="22" alt=""><h3 class="font-semibold">{{ __('hobby.travel') }}</h3></div>
      <p class="mt-2 text-neutral-600">{{ __('hobby.travel_text', ['ex'=>'Cloud-native infra trips, DevOps events, fintech meetups.']) }}</p>
      <p class="text-xs text-neutral-400 mt-2">{{ __('hobby.soon') }}</p>
    </div>
  </a>
  <a href="/{{ app()->getLocale() }}/hobby/sports" class="group rounded-xl border border-neutral-200 hover:shadow-md transition overflow-hidden">
    <img src="/images/hobby/sports.svg" class="w-full h-40 object-cover" alt="">
    <div class="p-5">
      <div class="flex items-center gap-3"><img src="/images/icons/sports.svg" width="22" height="22" alt=""><h3 class="font-semibold">{{ __('hobby.sports') }}</h3></div>
      <p class="mt-2 text-neutral-600">{{ __('hobby.sports_text', ['ex'=>'Running, cycling, and strength training for balance and focus.']) }}</p>
      <p class="text-xs text-neutral-400 mt-2">{{ __('hobby.soon') }}</p>
    </div>
  </a>
  <a href="/{{ app()->getLocale() }}/hobby/pets" class="group rounded-xl border border-neutral-200 hover:shadow-md transition overflow-hidden">
    <img src="/images/hobby/pets.svg" class="w-full h-40 object-cover" alt="">
    <div class="p-5">
      <div class="flex items-center gap-3"><img src="/images/icons/pets.svg" width="22" height="22" alt=""><h3 class="font-semibold">{{ __('hobby.pets') }}</h3></div>
      <p class="mt-2 text-neutral-600">{{ __('hobby.pets_text', ['ex'=>'Smart feeding, activity trackers, and pet-friendly gadgets.']) }}</p>
      <p class="text-xs text-neutral-400 mt-2">{{ __('hobby.soon') }}</p>
    </div>
  </a>
  <a href="/{{ app()->getLocale() }}/hobby/smarthome" class="group rounded-xl border border-neutral-200 hover:shadow-md transition overflow-hidden">
    <img src="/images/hobby/smarthome.svg" class="w-full h-40 object-cover" alt="">
    <div class="p-5">
      <div class="flex items-center gap-3"><img src="/images/icons/smarthome.svg" width="22" height="22" alt=""><h3 class="font-semibold">{{ __('hobby.smarthome') }}</h3></div>
      <p class="mt-2 text-neutral-600">{{ __('hobby.smarthome_text', ['ex'=>'Home Assistant, Zigbee, sensors, dashboards, and automation.']) }}</p>
      <p class="text-xs text-neutral-400 mt-2">{{ __('hobby.soon') }}</p>
    </div>
  </a>
  <a href="/{{ app()->getLocale() }}/hobby/radio" class="group rounded-xl border border-neutral-200 hover:shadow-md transition overflow-hidden">
    <img src="/images/hobby/radio.svg" class="w-full h-40 object-cover" alt="">
    <div class="p-5">
      <div class="flex items-center gap-3"><img src="/images/icons/radio.svg" width="22" height="22" alt=""><h3 class="font-semibold">{{ __('hobby.radio') }}</h3></div>
      <p class="mt-2 text-neutral-600">{{ __('hobby.radio_text', ['ex'=>'SDR, antennas, embedded electronics, and PCB tinkering.']) }}</p>
      <p class="text-xs text-neutral-400 mt-2">{{ __('hobby.soon') }}</p>
    </div>
  </a>
</div>
@endsection

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name') }} — @yield('title','Home')</title>
@vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased text-neutral-800">
@php
  $urlLocale = request()->route('locale') ?? 'en';
  if ($urlLocale === 'uk') { $urlLocale = 'ua'; }
@endphp

<header class="container mx-auto px-4 md:px-6 lg:px-8 py-5">
  <nav class="grid grid-cols-3 items-center">
    <div></div>
    <ul class="justify-center flex items-center gap-6 md:gap-10 text-[15px] md:text-base">
      <li><a href="/{{ $urlLocale }}/about" class="inline-flex items-center gap-3 hover:opacity-90">
        <img src="/images/icons/about.svg" width="20" height="20" alt="">{{ __('nav.about') }}
      </a></li>
      <li><a href="/{{ $urlLocale }}/projects" class="inline-flex items-center gap-3 hover:opacity-90">
        <img src="/images/icons/projects.svg" width="20" height="20" alt="">{{ __('nav.projects') }}
      </a></li>
      <li><a href="/{{ $urlLocale }}/hobby" class="inline-flex items-center gap-3 hover:opacity-90">
        <img src="/images/icons/hobby.svg" width="20" height="20" alt="">{{ __('nav.hobby') }}
      </a></li>
      <li><a href="/{{ $urlLocale }}/contact" class="inline-flex items-center gap-3 hover:opacity-90">
        <img src="/images/icons/contact.svg" width="20" height="20" alt="">{{ __('nav.contact') }}
      </a></li>
    </ul>
    <div class="flex justify-end items-center">
      <div class="flex items-center gap-2 sm:gap-3 bg-neutral-50 border border-neutral-200 rounded-full px-2 py-1">
        @php
          $langs = [
            ['code' => 'en', 'label' => 'EN'],
            ['code' => 'ua', 'label' => 'UA'],
            ['code' => 'es', 'label' => 'ES'],
            ['code' => 'ru', 'label' => 'RU'],
          ];
        @endphp
        @foreach ($langs as $L)
          <a class="px-2 md:px-3 py-1 rounded-full transition
                    {{ $urlLocale===$L['code'] ? 'bg-white border border-neutral-200 font-semibold' : 'hover:bg-white/70' }}"
             href="/{{ $L['code'] }}">
            {{ $L['label'] }}
          </a>
        @endforeach
      </div>
    </div>
  </nav>
</header>

<main class="container mx-auto px-0 md:px-0 lg:px-0">@yield('content')</main>

<footer class="container mx-auto px-4 md:px-6 lg:px-8 py-10 text-sm text-neutral-500">
  © {{ date('Y') }} Valerii Tsoi
</footer>
</body></html>

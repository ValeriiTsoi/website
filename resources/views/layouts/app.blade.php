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

<header class="container mx-auto px-4">
  <nav class="flex items-center justify-between py-4">
    {{--  : / --}}
    <a class="font-bold text-xl tracking-wide hover:opacity-80"
       href="/{{ app()->getLocale() }}"
       aria-label="Go to Home">VT</a>

    {{-- :  ,   ,   --}}
    <ul class="flex items-center gap-6 text-base">
      <li><a class="hover:underline" href="/{{ app()->getLocale() }}/about">{{ __('nav.about') }}</a></li>
      <li><a class="hover:underline" href="/{{ app()->getLocale() }}/projects">{{ __('nav.projects') }}</a></li>
      <li><a class="hover:underline" href="/{{ app()->getLocale() }}/hobby">{{ __('nav.hobby') }}</a></li>
      <li><a class="hover:underline" href="/{{ app()->getLocale() }}/contact">{{ __('nav.contact') }}</a></li>
      <li class="ml-2">
        <a class="hover:underline" href="https://linkedin.com/in/valerii-tsoi-a555859b" target="_blank" rel="noopener">LinkedIn</a>
      </li>
      <li>
        <a class="hover:underline" href="https://github.com/ValeriiTsoi/website" target="_blank" rel="noopener">GitHub</a>
      </li>
    </ul>

    {{--  :  ,   --}}
    <div class="flex items-center gap-3">
      @foreach (['en','ua','es','ru'] as $l)
        <a href="/{{ $l }}"
           class="px-2 py-1 rounded {{ app()->getLocale()===$l ? 'underline font-semibold' : 'hover:underline' }}">
          {{ strtoupper($l) }}
        </a>
      @endforeach
    </div>
  </nav>
</header>

<main class="container mx-auto px-0 md:px-0 lg:px-0">@yield('content')</main>

<footer class="container mx-auto px-4 md:px-6 lg:px-8 py-10 text-sm text-neutral-500">
  © {{ date('Y') }} Valerii Tsoi
</footer>
</body></html>

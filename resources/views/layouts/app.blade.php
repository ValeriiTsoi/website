<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name') }} — @yield('title','Home')</title>
@vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased">
<header class="container">
<nav class="nav">
  <a class="brand" href="/{{ app()->getLocale() }}">VT</a>
  <a href="/{{ app()->getLocale() }}/about">{{ __('nav.about') }}</a>
  <a href="/{{ app()->getLocale() }}/projects">{{ __('nav.projects') }}</a>
  <a href="/{{ app()->getLocale() }}/hobby">{{ __('nav.hobby') }}</a>
  <a href="/{{ app()->getLocale() }}/contact">{{ __('nav.contact') }}</a>
  <span class="spacer"></span>
  <a class="ext" href="https://linkedin.com/in/valerii-tsoi-a555859b" target="_blank" rel="noopener">LinkedIn</a>
  <a class="ext" href="https://github.com/ValeriiTsoi/website" target="_blank" rel="noopener">GitHub</a>
  <div class="langs">
    @foreach (['en','uk','es','ru'] as $l)
      <a class="{{ app()->getLocale()===$l ? 'active' : '' }}" href="/{{ $l }}">{{ strtoupper($l) }}</a>
    @endforeach
  </div>
</nav></header>
<main>@yield('content')</main>
<footer class="container foot">© {{ date('Y') }} Valerii Tsoi</footer>
</body></html>

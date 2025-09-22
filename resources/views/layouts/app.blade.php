<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name') }} — @yield('title','Home')</title>
@vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased text-neutral-800">
<header class="container mx-auto px-4 md:px-6 lg:px-8 py-4">
  <nav class="flex items-center gap-4">
    <a class="text-xl font-semibold" href="/{{ app()->getLocale() }}">VT</a>
    <a href="/{{ app()->getLocale() }}/about" class="inline-flex items-center gap-2 hover:opacity-90"><img src="/images/icons/about.svg" width="18" height="18" alt="">{{ __('nav.about') }}</a>
    <a href="/{{ app()->getLocale() }}/projects" class="inline-flex items-center gap-2 hover:opacity-90"><img src="/images/icons/projects.svg" width="18" height="18" alt="">{{ __('nav.projects') }}</a>
    <a href="/{{ app()->getLocale() }}/hobby" class="inline-flex items-center gap-2 hover:opacity-90"><img src="/images/icons/hobby.svg" width="18" height="18" alt="">{{ __('nav.hobby') }}</a>
    <a href="/{{ app()->getLocale() }}/contact" class="inline-flex items-center gap-2 hover:opacity-90"><img src="/images/icons/contact.svg" width="18" height="18" alt="">{{ __('nav.contact') }}</a>
    <span class="flex-1"></span>
    <div class="hidden sm:flex items-center gap-3">
      <a class="inline-flex items-center gap-2 hover:opacity-90" href="https://linkedin.com/in/valerii-tsoi-a555859b" target="_blank" rel="noopener"><img src="/images/icons/linkedin.svg" width="18" height="18" alt="">LinkedIn</a>
      <a class="inline-flex items-center gap-2 hover:opacity-90" href="https://github.com/ValeriiTsoi/website" target="_blank" rel="noopener"><img src="/images/icons/github.svg" width="18" height="18" alt="">GitHub</a>
    </div>
    <div class="flex items-center gap-1 ml-2">
      <img src="/images/icons/globe.svg" width="18" height="18" alt="" class="opacity-80">
      @php
        $langs = [
          ['code' => 'en', 'label' => 'EN'],
          // Показываем метку UA, но ссылка ведёт на /uk чтобы не ломать Laravel-локаль
          ['code' => 'uk', 'label' => 'UA'],
          ['code' => 'es', 'label' => 'ES'],
          ['code' => 'ru', 'label' => 'RU'],
        ];
      @endphp
      @foreach ($langs as $L)
        <a class="px-1 {{ app()->getLocale()===$L['code'] ? 'font-semibold underline' : 'opacity-80 hover:opacity-100' }}" href="/{{ $L['code'] }}">{{ $L['label'] }}</a>
      @endforeach
    </div>
  </nav>
</header>
<main class="container mx-auto px-4 md:px-6 lg:px-8 py-6">@yield('content')</main>
<footer class="container mx-auto px-4 md:px-6 lg:px-8 py-8 text-sm text-neutral-500">© {{ date('Y') }} Valerii Tsoi</footer>
</body></html>

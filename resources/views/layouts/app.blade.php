<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name','ValeriiTsoi') }}  @yield('title','Home')</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased text-neutral-800">

<header class="w-full">
  <div class="max-w-6xl mx-auto flex items-center justify-between py-4 px-4">
    <!-- /   -->
    <a class="text-xl font-bold tracking-tight text-neutral-900 dark:text-white" href="/{{ app()->getLocale() }}">VT</a>

    <!--  :  ,      -->
    <nav class="hidden md:flex items-center justify-center gap-6 text-sm">
      <a href="/{{ app()->getLocale() }}/about"    class="inline-flex items-center gap-2 hover:opacity-80">
        <svg class="w-4 h-4"><use href="#i-user"/></svg>{{ __('nav.about') }}
      </a>
      <a href="/{{ app()->getLocale() }}/projects" class="inline-flex items-center gap-2 hover:opacity-80">
        <svg class="w-4 h-4"><use href="#i-code"/></svg>{{ __('nav.projects') }}
      </a>
      <a href="/{{ app()->getLocale() }}/hobby"    class="inline-flex items-center gap-2 hover:opacity-80">
        <svg class="w-4 h-4"><use href="#i-heart"/></svg>{{ __('nav.hobby') }}
      </a>
      <a href="/{{ app()->getLocale() }}/contact"  class="inline-flex items-center gap-2 hover:opacity-80">
        <svg class="w-4 h-4"><use href="#i-mail"/></svg>{{ __('nav.contact') }}
      </a>
      <a href="https://linkedin.com/in/valerii-tsoi-a555859b" target="_blank" rel="noopener" class="inline-flex items-center gap-2 hover:opacity-80">
        <svg class="w-4 h-4"><use href="#i-linkedin"/></svg>LinkedIn
      </a>
      <a href="https://github.com/ValeriiTsoi/website" target="_blank" rel="noopener" class="inline-flex items-center gap-2 hover:opacity-80">
        <svg class="w-4 h-4"><use href="#i-github"/></svg>GitHub
      </a>
    </nav>

    <!--  : ,   -->
    <div class="flex items-center gap-4 text-sm">
      @php $cur = app()->getLocale(); @endphp
      @foreach (['en'=>'EN','ua'=>'UA','es'=>'ES','ru'=>'RU'] as $l => $label)
        <a class="{{ $cur===$l ? 'font-semibold underline' : 'opacity-80 hover:opacity-100' }}"
           href="/{{ $l }}">{{ $label }}</a>
      @endforeach
    </div>
  </div>
</header>

<main class="container mx-auto px-0 md:px-0 lg:px-0">
  @yield('content')
</main>

<footer class="container mx-auto px-4 md:px-6 lg:px-8 py-10 text-sm text-neutral-500">
   {{ date('Y') }} Valerii Tsoi
</footer>

<!--     (    ) -->
<svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="i-user" viewBox="0 0 24 24" fill="currentColor">
    <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-5 0-9 2.5-9 5.5A1.5 1.5 0 0 0 4.5 21h15A1.5 1.5 0 0 0 21 19.5C21 16.5 17 14 12 14Z"/>
  </symbol>
  <symbol id="i-code" viewBox="0 0 24 24" fill="currentColor">
    <path d="M8 8 4 12l4 4M16 8l4 4-4 4M14 4 10 20"/>
  </symbol>
  <symbol id="i-heart" viewBox="0 0 24 24" fill="currentColor">
    <path d="M12 21s-7-4.35-9-8.5A5.5 5.5 0 0 1 12 6a5.5 5.5 0 0 1 9 6.5C19 16.65 12 21 12 21Z"/>
  </symbol>
  <symbol id="i-mail" viewBox="0 0 24 24" fill="currentColor">
    <path d="M4 6h16v12H4Zm0 0 8 6 8-6"/>
  </symbol>
  <symbol id="i-linkedin" viewBox="0 0 24 24" fill="currentColor">
    <path d="M4 4h4v4H4Zm0 6h4v10H4Zm6 0h4v2h.06a4.38 4.38 0 0 1 3.94-2.17C21 9.83 22 12 22 15.24V20h-4v-4.11c0-1-.02-2.31-1.41-2.31-1.41 0-1.63 1.1-1.63 2.24V20h-4Z"/>
  </symbol>
  <symbol id="i-github" viewBox="0 0 24 24" fill="currentColor">
    <path d="M12 2a10 10 0 0 0-3.16 19.49c.5.09.68-.22.68-.49v-1.7c-2.78.6-3.36-1.21-3.36-1.21A2.64 2.64 0 0 0 5 15.86c-.91-.62.07-.6.07-.6a2.08 2.08 0 0 1 1.52 1 2.1 2.1 0 0 0 2.88.82 2.09 2.09 0 0 1 .62-1.31c-2.22-.25-4.56-1.11-4.56-4.94A3.87 3.87 0 0 1 7 7.31 3.58 3.58 0 0 1 7.1 4s.84-.27 2.75 1a9.4 9.4 0 0 1 5 0C16.76 3.7 17.6 4 17.6 4a3.58 3.58 0 0 1 .1 3.31 3.87 3.87 0 0 1 1 2.69c0 3.84-2.34 4.68-4.57 4.93a2.34 2.34 0 0 1 .67 1.81v2.69c0 .27.18.58.69.48A10 10 0 0 0 12 2Z"/>
  </symbol>
</svg>

</body>
</html>

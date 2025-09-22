<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}  @yield('title','Home')</title>

    @php
        $manifestPath = public_path('build/manifest.json');
        $cssHref = $jsSrc = null;

        if (is_file($manifestPath)) {
            $manifest = json_decode(file_get_contents($manifestPath), true);

            //       entry-:
            $cssFile = $manifest['resources/css/app.css']['file'] ?? null;
            $jsFile  = $manifest['resources/js/app.js']['file']  ?? null;

            if ($cssFile) $cssHref = "/build/{$cssFile}";
            if ($jsFile)  $jsSrc  = "/build/{$jsFile}";
        }
    @endphp

    @if($cssHref)
        <link rel="preload" as="style" href="{{ $cssHref }}">
        <link rel="stylesheet" href="{{ $cssHref }}">
    @endif

    @if($jsSrc)
        <link rel="modulepreload" as="script" href="{{ $jsSrc }}">
        <script type="module" src="{{ $jsSrc }}"></script>
    @endif
</head>
<body class="antialiased text-neutral-800">
@php
  $urlLocale = request()->route('locale') ?? 'en';
  if ($urlLocale === 'uk') { $urlLocale = 'ua'; }
@endphp

<header class="w-full">
  <div class="max-w-6xl mx-auto flex items-center justify-between py-4 px-4">
    <!--  /    -->
    <a class="text-xl font-bold tracking-tight text-neutral-900 dark:text-white" href="/{{ app()->getLocale() }}">VT</a>

    <!--  :  +   -->
    <nav class="flex flex-wrap items-center justify-center gap-4 md:gap-6 text-sm">
      <a href="/{{ app()->getLocale() }}/about"    class="inline-flex items-center gap-2 hover:opacity-80">@svg('user') {{ __('nav.about') }}</a>
      <a href="/{{ app()->getLocale() }}/projects" class="inline-flex items-center gap-2 hover:opacity-80">@svg('code') {{ __('nav.projects') }}</a>
      <a href="/{{ app()->getLocale() }}/hobby"    class="inline-flex items-center gap-2 hover:opacity-80">@svg('heart') {{ __('nav.hobby') }}</a>
      <a href="/{{ app()->getLocale() }}/contact"  class="inline-flex items-center gap-2 hover:opacity-80">@svg('mail') {{ __('nav.contact') }}</a>
      <a href="https://linkedin.com/in/valerii-tsoi-a555859b" target="_blank" rel="noopener" class="inline-flex items-center gap-2 hover:opacity-80">@svg('linkedin') LinkedIn</a>
      <a href="https://github.com/ValeriiTsoi/website" target="_blank" rel="noopener" class="inline-flex items-center gap-2 hover:opacity-80">@svg('github') GitHub</a>
    </nav>

    <!--  : ,   -->
    <div class="flex items-center gap-3 md:gap-4 text-xs md:text-sm">
      @foreach (['en'=>'EN','ua'=>'UA','es'=>'ES','ru'=>'RU'] as $code=>$label)
        <a class="{{ app()->getLocale()===$code ? 'font-semibold underline' : 'opacity-80 hover:opacity-100' }}"
           href="/{{ $code }}">{{ $label }}</a>
      @endforeach
    </div>
  </div>
</header>

<main class="container mx-auto px-0 md:px-0 lg:px-0">@yield('content')</main>
<footer class="container mx-auto px-4 md:px-6 lg:px-8 py-10 text-sm text-neutral-500">
  © {{ date('Y') }} Valerii Tsoi
</footer>
</body></html>

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

<header class="container mx-auto px-4">
  <nav class="flex items-center justify-between py-4">
    {{-- :   (VT) --}}
    <a href="/{{ app()->getLocale() }}" class="flex items-center gap-2 font-bold text-xl hover:opacity-80" aria-label="Home">
      {{-- - VT ( SVG,    ) --}}
      <svg width="22" height="22" viewBox="0 0 24 24" class="shrink-0" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M3 7h18M3 12h18M3 17h18" />
      </svg>
      VT
    </a>

    {{-- :     --}}
    <ul class="flex items-center gap-8 text-base">
      <li>
        <a class="flex items-center gap-2 hover:underline" href="/{{ app()->getLocale() }}/about">
          {{-- user icon --}}
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="8" r="4"/><path d="M6 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/></svg>
          {{ __('nav.about') }}
        </a>
      </li>
      <li>
        <a class="flex items-center gap-2 hover:underline" href="/{{ app()->getLocale() }}/projects">
          {{-- folder icon --}}
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M3 7h5l2 2h11v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
          {{ __('nav.projects') }}
        </a>
      </li>
      <li>
        <a class="flex items-center gap-2 hover:underline" href="/{{ app()->getLocale() }}/hobby">
          {{-- heart icon --}}
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 1 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8z"/></svg>
          {{ __('nav.hobby') }}
        </a>
      </li>
      <li>
        <a class="flex items-center gap-2 hover:underline" href="/{{ app()->getLocale() }}/contact">
          {{-- mail icon --}}
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M4 6h16v12H4z"/><path d="m22 6-10 7L2 6"/></svg>
          {{ __('nav.contact') }}
        </a>
      </li>
      <li class="ml-2">
        <a class="flex items-center gap-2 hover:underline" href="https://linkedin.com/in/valerii-tsoi-a555859b" target="_blank" rel="noopener">
          {{-- external/link icon --}}
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M10 13a5 5 0 0 0 7.07 0l3.54-3.54a5 5 0 0 0-7.07-7.07L12 3"/><path d="M14 11a5 5 0 0 0-7.07 0L3.39 14.54a5 5 0 1 0 7.07 7.07L12 21"/></svg>
          LinkedIn
        </a>
      </li>
      <li>
        <a class="flex items-center gap-2 hover:underline" href="https://github.com/ValeriiTsoi/website" target="_blank" rel="noopener">
          {{-- github mark () --}}
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-3.16 19.49c.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.19-3.37-1.19a2.65 2.65 0 0 0-1.1-1.46c-.9-.62.07-.61.07-.61a2.1 2.1 0 0 1 1.53 1A2.14 2.14 0 0 0 9 17.4a2.14 2.14 0 0 1 .64-1.35c-2.22-.25-4.56-1.11-4.56-4.92A3.86 3.86 0 0 1 6 8.14 3.6 3.6 0 0 1 6.1 5s.84-.27 2.75 1.02a9.5 9.5 0 0 1 5 0C16.76 4.73 17.6 5 17.6 5a3.6 3.6 0 0 1 .1 3.14 3.86 3.86 0 0 1 1 2.69c0 3.82-2.34 4.66-4.57 4.9a2.4 2.4 0 0 1 .68 1.86v2.76c0 .27.18.58.69.48A10 10 0 0 0 12 2"/></svg>
          GitHub
        </a>
      </li>
    </ul>

    {{-- :       --}}
    <div class="flex items-center gap-4">
      <span class="sr-only">Language</span>
      <svg width="18" height="18" viewBox="0 0 24 24" class="text-neutral-500"><path d="M12 3v18M3 12h18M5 5h14M5 19h14" stroke="currentColor" fill="none"/></svg>
      <div class="flex items-center gap-3">
        @foreach (['en','ua','es','ru'] as $l)
          <a href="/{{ $l }}"
             class="px-2 py-1 rounded {{ app()->getLocale()===$l ? 'underline font-semibold' : 'hover:underline' }}">
            {{ strtoupper($l) }}
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

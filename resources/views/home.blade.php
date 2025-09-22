@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="relative overflow-hidden rounded-2xl shadow-md">
  <picture>
    <source srcset="/images/banners/hero-banner-dark.svg" media="(prefers-color-scheme: dark)">
    <img src="/images/banners/hero-banner-light.svg" alt="Cloud-native FinTech" class="w-full h-auto" loading="lazy">
  </picture>
  <div class="absolute inset-0 flex items-center">
    <div class="px-6 md:px-10 lg:px-16">
      <div class="inline-block bg-black/40 text-white rounded-lg px-5 py-4 backdrop-blur-sm">
        <h1 class="text-3xl md:text-5xl font-semibold drop-shadow">{{ __('slogan.line1') }}</h1>
        <p class="mt-2 text-white/90 text-lg md:text-xl max-w-3xl">{{ __('slogan.line2') }}</p>
        <div class="mt-4 flex flex-wrap gap-3">
          <a href="/{{ app()->getLocale() }}/projects" class="inline-flex items-center gap-2 bg-white/95 hover:bg-white text-neutral-800 rounded-md px-4 py-2 shadow-sm transition">
            <img src="/images/icons/projects.svg" width="18" height="18" alt="">{{ __('home.cta_projects') }}
          </a>
          <a href="/{{ app()->getLocale() }}/contact" class="inline-flex items-center gap-2 bg-black/70 hover:bg-black text-white rounded-md px-4 py-2 shadow-sm transition">
            <img src="/images/icons/contact.svg" width="18" height="18" alt="">{{ __('home.cta_contact') }}
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="mt-10 grid gap-6 md:grid-cols-2">
  <a href="/{{ app()->getLocale() }}/about" class="block rounded-xl border border-neutral-200 p-0 hover:shadow-md transition overflow-hidden">
    <img src="/images/hobby/smarthome.svg" alt="" class="w-full h-40 object-cover">
    <div class="p-5">
      <div class="flex items-center gap-3"><img src="/images/icons/about.svg" width="20" height="20" alt=""><h3 class="font-semibold">{{ __('home.cards.about.title') }}</h3></div>
      <p class="mt-2 text-neutral-600">{{ __('home.cards.about.text') }}</p>
    </div>
  </a>
  <a href="/{{ app()->getLocale() }}/hobby" class="block rounded-xl border border-neutral-200 p-0 hover:shadow-md transition overflow-hidden">
    <img src="/images/hobby/travel.svg" alt="" class="w-full h-40 object-cover">
    <div class="p-5">
      <div class="flex items-center gap-3"><img src="/images/icons/hobby.svg" width="20" height="20" alt=""><h3 class="font-semibold">{{ __('home.cards.hobby.title') }}</h3></div>
      <p class="mt-2 text-neutral-600">{{ __('home.cards.hobby.text') }}</p>
    </div>
  </a>
</div>
@endsection

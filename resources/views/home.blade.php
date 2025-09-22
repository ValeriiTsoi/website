@extends('layouts.app')
@section('title', 'Home')
@section('content')
<section class="container mx-auto px-4 py-16">
  <div class="grid md:grid-cols-2 gap-10 items-center">
    <div>
      <picture>
        <source media="(prefers-color-scheme: dark)" srcset="{{ asset('images/hero/hero-banner-dark.svg') }}">
        <img src="{{ asset('images/hero/hero-banner-light.svg') }}" alt="Hero banner" loading="eager" decoding="async">
      </picture>
    </div>
    <div class="text-right">
      <h1 class="text-3xl md:text-4xl font-bold leading-snug">{{ __('hero.title') }}</h1>
      <p  class="mt-3 text-lg md:text-xl text-neutral-600 dark:text-neutral-300">{{ __('hero.subtitle') }}</p>
      <p  class="mt-6 text-sm md:text-base text-neutral-500 dark:text-neutral-400">{{ __('hero.tagline') }}</p>
    </div>
  </div>
</section>
@endsection

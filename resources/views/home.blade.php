@extends('layouts.app')
@section('title', 'Home')
@section('content')
<section class="relative w-full min-h-[380px] md:min-h-[420px]">
  <!--  (/ ) -->
  <picture class="absolute inset-0 -z-10">
    <source media="(prefers-color-scheme: dark)" srcset="/images/hero/hero-banner-dark.svg">
    <img src="/images/hero/hero-banner-light.svg"
         alt="Hero banner"
         class="w-full h-full object-cover"
         loading="eager" decoding="async">
  </picture>

  <!--    -->
  <div class="max-w-6xl mx-auto h-full px-4 py-10 flex items-end justify-end">
    <div class="text-right max-w-xl">
      <h1 class="text-3xl md:text-4xl font-bold leading-snug">
        {{ __('hero.headline') }}
      </h1>
      <p class="mt-3 text-lg md:text-xl text-neutral-700 dark:text-neutral-200">
        {{ __('hero.tagline') }}
      </p>
      <p class="mt-6 text-sm md:text-base text-neutral-600 dark:text-neutral-300">
        {{ __('hero.subnote') }}
      </p>
    </div>
  </div>
</section>
@endsection

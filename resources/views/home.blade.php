@extends('layouts.app')
@section('title', 'Home')
@section('content')
<section class="relative overflow-hidden rounded-none md:rounded-2xl md:mx-4 lg:mx-8 shadow-md">
  <picture>
    <source srcset="/images/banners/hero-banner-dark.svg" media="(prefers-color-scheme: dark)">
    <img src="/images/banners/hero-banner-light.svg" alt="Cloud-native FinTech" class="w-full h-[56vh] md:h-[64vh] object-cover">
  </picture>
  <div class="absolute inset-0 bg-gradient-to-l from-black/55 via-black/30 to-transparent"></div>
  <div class="absolute inset-0 flex items-end justify-end p-6 md:p-12">
    <div class="max-w-xl ml-auto text-right text-white">
      <h1 class="text-3xl md:text-5xl font-semibold drop-shadow-sm leading-tight">
        {{ __('slogan.line1') }}
      </h1>
      <p class="mt-3 text-white/95 text-lg md:text-xl">
        {{ __('slogan.line2') }}
      </p>
      <p class="mt-6 text-sm md:text-base text-white/85">
        {{ __('slogan.note') }}
      </p>
    </div>
  </div>
</section>
@endsection

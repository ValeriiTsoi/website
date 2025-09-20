@extends('layouts.app')
@section('title', __('home.title'))
@section('content')
<section class="hero">
  <canvas id="bg"></canvas>
  <div class="hero-content">
    <h1>{{ __('home.h1') }}</h1>
    <p class="subtitle">{{ __('home.sub') }}</p>
  </div>
</section>
@endsection

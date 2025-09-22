@extends('layouts.app')
@section('title', __('nav.projects'))
@section('content')
<h1 class="text-2xl font-semibold mb-6 inline-flex items-center gap-2"><img src="/images/icons/projects.svg" width="22" height="22" alt="">{{ __('nav.projects') }}</h1>
@php $md = resource_path('content/cv/projects.md'); @endphp
@if (file_exists($md))
  {!! (new \Parsedown())->text(file_get_contents($md)) !!}
@else
  <p class="text-neutral-600">{{ __('projects.placeholder') }}</p>
@endif
@endsection

@extends('layouts.app')

@section('title', __('projects.title'))

@section('content')
<section class="container mx-auto max-w-5xl px-4 py-12">
  <h1 class="text-3xl font-bold mb-2">{{ __('projects.title') }}</h1>
  <p class="text-slate-600 dark:text-slate-300 mb-8">{{ __('projects.lead') }}</p>

  <div class="grid md:grid-cols-2 gap-6">
    @foreach (__('projects.items') as $p)
      <article class="p-5 rounded-lg border bg-white/60 dark:bg-white/5 flex flex-col">
        <h2 class="text-xl font-semibold mb-1">{{ $p['name'] }}</h2>
        <div class="text-sm text-slate-500 mb-3">{{ $p['org'] }}  {{ $p['year'] }}</div>
        <p class="text-slate-700 dark:text-slate-300 mb-3">{{ $p['desc'] }}</p>
        <p class="text-sm mb-4"><strong>{{ __('projects.role') }}:</strong> {{ $p['role'] }}</p>
        @if (!empty($p['link']))
          <a target="_blank" rel="noopener" href="{{ $p['link'] }}" class="mt-auto inline-block px-3 py-2 rounded border hover:bg-slate-50 dark:hover:bg-white/10 text-sm">
            {{ __('projects.read_more') }} 
          </a>
        @endif
      </article>
    @endforeach
  </div>
</section>
@endsection

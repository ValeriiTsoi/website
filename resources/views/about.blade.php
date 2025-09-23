@extends('layouts.app')

@section('title', __('about.title'))

@section('content')
<section class="container mx-auto max-w-5xl px-4 py-12">
  <div class="grid md:grid-cols-[240px_1fr] gap-8 items-start">
    <img src="{{ asset('images/profile.jpg') }}" alt="Valerii Tsoi" class="w-56 h-56 rounded-xl object-cover shadow"/>
    <div>
      <h1 class="text-3xl font-bold mb-3">{{ __('about.name') }}</h1>
      <p class="text-lg text-slate-600 dark:text-slate-300 mb-4">
        {{ __('about.roles') }}
      </p>
      <p class="text-base leading-7 text-slate-700 dark:text-slate-300">
        {{ __('about.summary') }}
      </p>

      <div class="mt-6 flex flex-wrap gap-3 text-sm">
        <a href="mailto:valeriy.i.tsoy@gmail.com" class="px-3 py-1 rounded border hover:bg-slate-50 dark:hover:bg-white/10"> valeriy.i.tsoy@gmail.com</a>
        <a href="https://linkedin.com/in/valerii-tsoi-a555859b" target="_blank" rel="noopener" class="px-3 py-1 rounded border hover:bg-slate-50 dark:hover:bg-white/10">in LinkedIn</a>
        <span class="px-3 py-1 rounded border">{{ __('about.locations') }}</span>
      </div>
    </div>
  </div>

  <hr class="my-10 border-slate-200 dark:border-white/10"/>

  <h2 class="text-2xl font-semibold mb-4">{{ __('about.key_skills') }}</h2>
  @php($skills = trans('about.skills'))
  @php($skills = is_array($skills) ? $skills : [])
  <div class="flex flex-wrap gap-2">
    @foreach ($skills as $skill)
      <span class="px-3 py-1 rounded-full border text-sm bg-white/60 dark:bg-white/5">{{ $skill }}</span>
    @endforeach
  </div>

  <h2 class="text-2xl font-semibold mt-10 mb-4">{{ __('about.experience_title') }}</h2>
  @php($experience = trans('about.experience'))
  @php($experience = is_array($experience) ? $experience : [])
  <div class="space-y-6">
    @foreach ($experience as $job)
      <article class="p-5 rounded-lg border bg-white/60 dark:bg-white/5">
        <div class="flex flex-wrap items-baseline gap-2">
          <h3 class="text-lg font-semibold">{{ data_get($job,'role') }}</h3>
          <span class="text-sm text-slate-500"> {{ data_get($job,'company') }}</span>
          <span class="text-sm text-slate-500"> {{ data_get($job,'period') }}</span>
        </div>
        @php($bullets = data_get($job,'bullets',[]))
        @php($bullets = is_array($bullets) ? $bullets : [])
        <ul class="mt-2 list-disc pl-5 text-slate-700 dark:text-slate-300">
          @foreach ($bullets as $b)
            <li>{{ $b }}</li>
          @endforeach
        </ul>
      </article>
    @endforeach
  </div>

  <h2 class="text-2xl font-semibold mt-10 mb-4">{{ __('about.education_title') }}</h2>
  @php($education = trans('about.education'))
  @php($education = is_array($education) ? $education : [])
  <ul class="list-disc pl-5 space-y-1 text-slate-700 dark:text-slate-300">
    @foreach ($education as $e)
      <li>{{ $e }}</li>
    @endforeach
  </ul>
</section>
@endsection

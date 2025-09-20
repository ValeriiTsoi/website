@extends('layouts.app')
@section('title', __('nav.hobby'))
@section('content')
<div class="container page">
  <h2>{{ __('nav.hobby') }}</h2>
  <div class="cards">
    <a class="card" href="#travel"><img src="/images/hobby/travel.jpg"><span>{{ __('hobby.travel') }}</span></a>
    <a class="card" href="#sports"><img src="/images/hobby/sports.jpg"><span>{{ __('hobby.sports') }}</span></a>
    <a class="card" href="#pets"><img src="/images/hobby/pets.jpg"><span>{{ __('hobby.pets') }}</span></a>
    <a class="card" href="#smarthome"><img src="/images/hobby/smarthome.jpg"><span>{{ __('hobby.smarthome') }}</span></a>
    <a class="card" href="#radio"><img src="/images/hobby/radio.jpg"><span>{{ __('hobby.radio') }}</span></a>
  </div>
</div>
@endsection

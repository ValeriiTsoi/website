@extends('layouts.app')
@section('title', __('nav.about'))
@section('content')
<div class="container page"><h2>{{ __('nav.about') }}</h2><article class="prose">{!! $cvAbout !!}</article></div>
@endsection

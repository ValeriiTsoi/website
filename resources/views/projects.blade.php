@extends('layouts.app')
@section('title', __('nav.projects'))
@section('content')
<div class="container page"><h2>{{ __('nav.projects') }}</h2><article class="prose">{!! $projects !!}</article></div>
@endsection

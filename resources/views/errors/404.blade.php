@extends('errors::layout')

@section('bg_img', asset('vendor/lara-custom-error-pages/images/404.jpg'))
@section('title', __('Not found'))
@section('code', '404')
@section('message', __('The server did not find the requested address'))

@section('link')
<a href="{{ url('/') }}" class="btn btn-link">{{ __('Back to homepage') }}</a>
@endsection

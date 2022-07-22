@extends('errors::layout')

@section('bg_img', asset('vendor/lara-custom-error-pages/images/429.jpg'))
@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('The client application has surpassed its number of requests they can send in a given period of time'))

@section('link')
<a href="{{ url('/') }}" class="btn btn-link">{{ __('Back to homepage') }}</a>
@endsection

@extends('errors::layout')

@section('bg_img', asset('vendor/lara-custom-error-pages/images/419.jpg'))
@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('Sorry, your session has expired, please refresh and try again'))

@section('link')
<a href="{{ url('/') }}" class="btn btn-link">{{ __('Back to homepage') }}</a>
@endsection

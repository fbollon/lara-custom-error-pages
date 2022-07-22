@extends('errors::layout')

@section('bg_img', asset('vendor/lara-custom-error-pages/images/500.jpg'))
@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('The server encountered an unexpected condition that prevented it from fulfilling the request'))

@section('link')
<a href="{{ url('/') }}" class="btn btn-link">{{ __('Back to homepage') }}</a>
@endsection

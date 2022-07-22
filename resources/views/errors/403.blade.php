@extends('errors::layout')

@section('bg_img', asset('vendor/lara-custom-error-pages/images/401.jpg'))
@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: __('The access is permanently forbidden and tied to the application logic, such as insufficient rights to a resource')))

@section('link')
<a href="{{ url('/') }}" class="btn btn-link">{{ __('Back to homepage') }}</a>
@endsection

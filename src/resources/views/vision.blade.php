@section('title', 'Spy')
@section('page_header', 'PAGE HEADER')
@section('page_description', "DESC")

@extends('web::layouts.grids.12')

@section('content')

{{ $char_name }}

{{ $char_loc->solar_system_id }}

@endsection
@push('javascript')
  @include('web::includes.javascript.id-to-name')
@endpush

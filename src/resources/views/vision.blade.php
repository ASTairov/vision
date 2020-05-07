@section('title', 'Spy')
@section('page_header', 'PAGE HEADER')
@section('page_description', "DESC")

@extends('web::layouts.grids.12')

@section('content')

{{ $char_name }}
<b><span class="id-to-name" data-id="{{ $char_loc->solar_system_id }}"</span></b>

@endsection
@push('javascript')
  @include('web::includes.javascript.id-to-name')
@endpush

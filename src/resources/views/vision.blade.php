@section('title', 'Spy')
@section('page_header', 'PAGE HEADER')
@section('page_description', "DESC")

@extends('web::layouts.grids.12')

@section('content')

@foreach($data as $key => $val)
    [ {!! $key !!} ] => [ <b><span class="id-to-name" data-id="{!! $val !!}"</span></b> ]
@endforeach


@endsection
@push('javascript')
  @include('web::includes.javascript.id-to-name')
@endpush

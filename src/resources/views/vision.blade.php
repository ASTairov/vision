@section('title', 'Spy')
@section('page_header', 'PAGE HEADER')
@section('page_description', "DESC")

@extends('web::layouts.grids.12')

@section('content')

@foreach($data as $key => $val)
    <b>{!! $key !!} => <span class="id-to-name" data-id="{!! implode($val) !!}"</span></b>
        <a href="https://zkillboard.com/system/{!! implode($val) !!}/" target="_blank"> zkb</a>
        <br />
@endforeach


@endsection
@push('javascript')
  @include('web::includes.javascript.id-to-name')
@endpush

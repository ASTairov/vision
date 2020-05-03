@section('title', 'TITLE')
@section('page_header', 'PAGE HEADER')
@section('page_description', "DESC")

@extends('web::layouts.grids.12')

@section('content')
    <div class="tab-content">
        <div class="tab-pane " id="auto_group">
            <div class="row">
                <div class="col-md-12">
                    <h3>h3</h3>
                    <p>p1</p>
                </div>
            </div>
            <div class="row">
                @if (! is_null($visiongroups->solar_system))
                    {{ $visiongroups->solar_system->name }}
                @else
                    Unknown Location
                @endif
            </div>
        </div>
    </div>
@endsection

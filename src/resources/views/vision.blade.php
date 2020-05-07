@section('title', 'Spy')
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
                    <div class="alert alert-info">
                        <h3>
                             {{ $char_name }}
                        </h3>
                        <p>
                            {{ $char_loc }}
                        </p>
                    </div>
            </div>
        </div>
    </div>
@endsection

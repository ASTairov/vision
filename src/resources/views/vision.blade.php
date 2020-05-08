@extends('web::layouts.grids.4-4-4')

@section('title', 'Spy')
@section('page_header', 'PAGE HEADER')
@section('page_description', "DESC")

@section('left')
    <div class="box box-primary box-solid">
        <div class="box-header">
           <h3 class="box-title">Список шпионов</h3>
           @if (auth()->user()->has('fitting.create', false))
           <div class="box-tools pull-right">
               <button type="button" class="btn btn-xs btn-box-tool" id="addFitting" data-toggle="tooltip" data-placement="top" title="Add a new Spy">
                   <span class="fa fa-plus-square"></span>
               </button>
           </div>
           @endif
        </div>
        <div class="box-body">
        <table id='fitlist' class="table table-hover" style="vertical-align: top">
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Location</th>
                <th class="pull-right">Option</th>
             </tr>
             </thead>
             <tbody>
                 @foreach($data as $key => $val)
                 <tr id="fitid" data-id="FITID">
                     <td><img src='https://image.eveonline.com/Character/{!! implode($val) !!}_32.jpg' height='24' /></td>
                     <td>{!! $key !!}</td>
                     <td><span class="id-to-name" data-id="{!! implode($val) !!}"</span></td>
                     <td class="no-hover pull-right">
                         <button type="button" id="viewfit" class="btn btn-xs btn-success" data-id="{!! implode($val) !!}" data-toggle="tooltip" data-placement="top" title="View Fitting">
                             <span class="fa fa-eye text-white"></span>
                         </button>
                         @if (auth()->user()->has('fitting.create', false))
                         <button type="button" id="editfit" class="btn btn-xs btn-warning" data-id="{!! implode($val) !!}" data-toggle="tooltip" data-placement="top" title="Edit Fitting">
                             <span class="fa fa-pencil text-white"></span>
                         </button>
                         <button type="button" id="deletefit" class="btn btn-xs btn-danger" data-id="{!! implode($val) !!}" data-toggle="tooltip" data-placement="top" title="Delete Fitting">
                             <span class="fa fa-trash text-white"></span>
                         </button>
                         @endif
                     </td>
                 </tr>
                 @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection

@push('javascript')
  @include('web::includes.javascript.id-to-name')
@endpush

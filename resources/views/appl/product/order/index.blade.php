@extends('layouts.app')
@include('meta.index')
@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb border bg-light">
    <li class="breadcrumb-item"><a href="{{ url('/home')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/admin')}}">Admin</a></li>
    <li class="breadcrumb-item">{{ ucfirst($app->module) }}</li>
  </ol>
</nav>

@include('flash::message')
<div  class="row ">

  <div class="col-md-12">
 
    <div class="card mb-3 mb-md-0">
      <div class="card-body mb-0">
        <nav class="navbar navbar-light bg-light p-3 justify-content-between border mb-3">
          <a class="navbar-brand"><i class="fa fa-bars"></i> {{ ucfirst($app->module) }}({{$objs->total()}}) 
          @if(request()->get('coupon'))
          <span class="badge badge-warning">{{ request()->get('coupon') }}</span>
          @endif
          </a>

          <form class="form-inline" method="GET" action="{{ route($app->module.'.index') }}">
            <div class="input-group ">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-search"></i></div>
              </div>
              <input class="form-control " id="search" name="item" autocomplete="off" type="search" placeholder="Search" aria-label="Search" 
              value="{{Request::get('item')?Request::get('item'):'' }}">
            </div>
            
          </form>
        </nav>

        <div id="search-items">
         @include('appl.'.$app->app.'.'.$app->module.'.list')
       </div>

     </div>
   </div>
 </div>
 
</div>

@endsection



@extends('layouts.app')
@section('title', 'Result page of Test')
@section('description', 'Result page of Test')
@section('keywords', 'result page of test, first academy')
@section('content')
<div class="">
  <div class="row">
    <div class="col-12">
      <div class="bg-white p-4">
        <div class="row">
          <div class="col-12 col-md-6">
            <h3 class="text-center text-md-left mb-md-4 mt-2  p-4">
              <i class="fa fa-bar-chart"></i> Test Report
              <br>
              <a href="{{ route('product.view',request()->get('product'))}}">
                <button class="btn btn-sm btn-outline-primary mt-3 ">
                  <i class="fa fa-angle-left"></i> back to Product</button>
              </a>
            </h3>
          </div>
          <div class="col-12 col-md-6">
             <div class="text-center  mt-3 mb-3 mt-md-0 mb-md-0 float-md-right border bg-light p-3 rounded ">
              <div class="">Score</div>
              <div class="display-4">{{ $score }} / {{count($result)}} </div>
            </div>
            @if($band)
            <div class="text-center  mt-3 mb-3 mt-md-0 mb-md-0 float-md-right border bg-light p-3 rounded mr-0 mr-md-4">
              <div class="">&nbsp;&nbsp;&nbsp; Band &nbsp;&nbsp;&nbsp;</div>
              <div class="display-4">{{ $band }} </div>
            </div>
            @endif
          </div>
        </div>
        @include('appl.test.attempt.blocks.answers')
      </div>
    </div>
  </div>
</div>
@endsection

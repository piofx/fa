@extends('layouts.app')
@include('meta.show')
@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb border bg-light">
    <li class="breadcrumb-item"><a href="{{ url('/home')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/admin')}}">Admin</a></li>
     <li class="breadcrumb-item"><a href="{{ url('/admin/prospect/dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route($app->module.'.index') }}">{{ ucfirst($app->module) }}</a></li>
    <li class="breadcrumb-item">@if(isset($obj->prospect)){{ $obj->prospect->name }} @endif</li>
  </ol>
</nav>

@include('flash::message')

  <div class="row">
    <div class="col-12 ">
      <div class="card bg-light mb-3">
        <div class="card-body text-secondary">
            
          <p class="h2 mb-0"><i class="fa fa-th "></i> @if(isset($obj->prospect)){{ $obj->prospect->name }} @endif

          @can('update',$obj)
            <span class="btn-group float-right" role="group" aria-label="Basic example">
               @if(\auth::user()->admin==1 ||\auth::user()->admin==2)
              <a href="{{ route($app->module.'.edit',$obj->id) }}" class="btn btn-outline-secondary" data-tooltip="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
              @endif
              @if(\auth::user()->admin==1)
              <a href="#" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal" data-tooltip="tooltip" data-placement="top" title="Delete" ><i class="fa fa-trash"></i></a>
              @endif
            </span>
            @endcan
          </p>
        </div>
      </div>

     
      <div class="card mb-4">
        <div class="card-body">

          <div class="row">
            

          <div class="col-12 col-md-12">    

            
            <div class="row mb-2">
              <div class="col-md-4"><b>Prospect Name</b></div>
              <div class="col-md-8">
                @if(isset($obj->prospect))
                <a href="{{ route('prospect.show',$obj->prospect->id)}}">{{ $obj->prospect->name }}</a></div>
                @endif
            </div>
            <div class="row mb-2">
              <div class="col-md-4"><b>Counsellor Name</b></div>
              <div class="col-md-8">{{ $obj->user->name }}
              </div>
            </div>
           
            <div class="row mb-2">
              <div class="col-md-4"><b>Comment</b></div>
              <div class="col-md-8">{!! $obj->comment !!}
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-md-4"><b>Schedule For</b></div>
              <div class="col-md-8">{{ ($obj->schedule)}}</div>
            </div>

            <div class="row mb-2">
              <div class="col-md-4"><b>Created At</b></div>
              <div class="col-md-8">{{ ($obj->created_at) ? $obj->created_at->diffForHumans() : '' }}</div>
            </div>
             
          </div>
        </div>
        </div>
      </div>



      


    </div>

     

  </div> 


  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        This following action is permanent and it cannot be reverted.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <form method="post" action="{{route($app->module.'.destroy',$obj->id)}}">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="btn btn-danger">Delete Permanently</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
@extends('layouts.app')
@section('title', $test->name.' - First Academy')
@section('description', $test->details)
@section('keywords', $test->name)

@section('content')

<div  class="row ">
  <div class="col-md-12">
   
   <div class="card  mb-0 mb-lg-4" >
        <div class="card-body p-4 p-md-5">
          <div class="row">
            <div class="col @if($obj->image) col-md-8 @endif">
               <h1 class="h1 mb-0"> {{ $obj->name }} 
                @can('update',$obj)
                <a href="{{ route('test.edit',$obj->id) }}" class="h5" data-tooltip="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                @endcan
          </h1>
          <p>
          {!! $obj->details !!} 
          </p>
          @if(\auth::user())
            @if($order = $obj->order(\auth::user()))
            <div class="border p-3 rounded mb-3">
              <i class="fa fa-check-circle text-success"></i> Your service is activated <span class="text-secondary">{{ $order->created_at->diffForHumans()}}</span>
            </div>

            @if(!\auth::user()->attempt($obj->id))
              <a href="{{ route('test.try',$obj->slug) }}">
                <button class="btn btn-lg btn-success">Try Now</button>
              </a>
            @else
              <a href="{{ route('test.analysis',$obj->slug) }}">
                <button class="btn btn-lg btn-outline-primary"><i class="fa fa-bar-chart"></i> Test Report</button>
              </a>
            @endif

            @else
              @if($obj->price !=0)
              <p class="h3 mb-4"><i class="fa fa-rupee"></i> {{ $obj->price}}</p>
              <a href="{{ route('product.checkout',$obj->slug) }}">
              <button class="btn btn-lg btn-success">Buy Now</button>
              </a>

              @elseif($obj->price===null)

              @else
                <p class="h3 mb-4"><span class="badge badge-warning">FREE</span></p>
              <a href="{{ route('test.instructions',$obj->slug) }}?grantaccess=1">
              <button class="btn btn-lg btn-success" type="button">Access Now</button>
              </a>
              @endif
            @endif
          @else
            @if($obj->price !=0)
            <p class="h3 mb-4"><i class="fa fa-rupee"></i> {{ $obj->price}}</p>
            <a href="{{ route('product.checkout',$obj->slug) }}">
            <button class="btn btn-lg btn-success">Buy Now</button>
            </a>
            @else
              <p class="h3 mb-4"><span class="badge badge-warning">FREE</span></p>
            @endif

          @endif
            </div>
            @if($obj->image)
            <div class="col-12  col-md-4">
                

                         <picture >
  <source srcset="{{ asset('/storage/test/'.$test->slug.'_300.webp') }} 320w,
             {{ asset('/storage/test/'.$test->slug.'_600.webp') }}  480w,
             {{ asset('/storage/test/'.$test->slug.'_900.webp') }}  800w,
             {{ asset('/storage/test/'.$test->slug.'_1200.webp') }}  1100w" type="image/webp" sizes="(max-width: 320px) 280px,
            (max-width: 480px) 440px,
            (max-width: 720px) 800px
            1200px" alt="{{  $test->name }}" class="image-thumbnail w-100 d-none d-md-block">
  <source srcset="{{ asset('/storage/test/'.$test->slug.'_300.jpg') }} 320w,
             {{ asset('/storage/test/'.$test->slug.'_600.jpg') }}  480w,
             {{ asset('/storage/test/'.$test->slug.'_900.jpg') }}  800w,
             {{ asset('/storage/test/'.$test->slug.'_1200.jpg') }}  1100w," type="image/jpeg" sizes="(max-width: 320px) 280px,
            (max-width: 480px) 440px,
            (max-width: 720px) 800px
            1200px" alt="{{  $test->name }}" class="image-thumbnail w-100 d-none d-md-block"> 
  <img srcset="{{ asset('/storage/test/'.$test->slug.'_300.jpg') }} 320w,
             {{ asset('/storage/test/'.$test->slug.'_600.jpg') }}  480w,
             {{ asset('/storage/test/'.$test->slug.'_900.jpg') }}  800w,
             {{ asset('/storage/test/'.$test->slug.'_1200.jpg') }}  1100w,"
      sizes="(max-width: 320px) 280px,
            (max-width: 480px) 440px,
            (max-width: 720px) 800px
            1200px"
      src="{{ asset('/storage/test/'.$test->slug.'_600.jpg') }} " class="image-thumbnail w-100 d-none d-md-block" alt="{{  $test->name }}">
</picture>
            </div>
            @endif

          </div>
         

          
        </div>
      </div>

</div>
</div>
@endsection



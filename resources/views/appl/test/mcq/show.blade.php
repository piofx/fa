@extends('layouts.app')
@section('title', 'Q'.$obj->qno.' | First Academy')
@section('description', 'Take a free IELTS | OET test completely free. Full-length OET practice test for free! Free IELTS writing band scores. Test your vocabulary for OET and IELTS.')
@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb border bg-light">
    <li class="breadcrumb-item"><a href="{{ url('/home')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/admin')}}">Admin</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/admin/test')}}">Test</a></li>
    <li class="breadcrumb-item"><a href="{{ route('test.show',$app->test->id)}}">{{$app->test->name}}</a></li>
    <li class="breadcrumb-item"><a href="{{ route($app->module.'.index',[$app->test->id]) }}">{{ ucfirst($app->module) }}</a></li>
    <li class="breadcrumb-item">Q{{ $obj->qno }}</li>
  </ol>
</nav>

@include('flash::message')

  <div class="row">

    <div class="col-12 col-md-9">
      <div class="card bg-light mb-3">
        

        <div class="card-body text-secondary">
          <p class="h2 mb-0"><i class="fa fa-th "></i> Q{{ $obj->qno }} 

          @can('update',$obj)
            <span class="btn-group float-right" role="group" aria-label="Basic example">
              <a href="{{ route($app->module.'.edit',[$app->test->id,$obj->id]) }}" class="btn btn-outline-secondary" data-tooltip="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
              <a href="#" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal" data-tooltip="tooltip" data-placement="top" title="Delete" ><i class="fa fa-trash"></i></a>
            </span>
            @endcan
          </p>
        </div>
      </div>

     
      <div class="card mb-4">
        <div class="card-body">
                <div class="row">
                    <div class="col-3 col-md-3 col-lg-2">
                      <div class="qno">{{$obj->qno}}</div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-10">
                      <div class="question">{!! $obj->question !!} </div>
                    </div>
                </div>
                @if($obj->a)
                <div class="row">
                    <div class="col-3 col-md-3 col-lg-2">
                      <div class="op  @if(strpos($obj->answer,'A')!==false) bg-success border-success @endif">A</div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-10">
                      <div class="option">{!! $obj->a !!}</div>
                    </div>
                </div>
                @endif
                @if($obj->b)
                <div class="row">
                    <div class="col-3 col-md-3 col-lg-2">
                      <div class="op @if(strpos($obj->answer,'B')!==false) bg-success border-success @endif"">B</div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-10">
                      <div class="option">{!! $obj->b !!}</div>
                    </div>
                </div>
                @endif
                @if($obj->c)
                <div class="row">
                    <div class="col-3 col-md-3 col-lg-2">
                      <div class="op @if(strpos($obj->answer,'C')!==false)  border-success bg-success @endif"">C</div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-10">
                      <div class="option">{!! $obj->c !!}</div>
                    </div>
                </div>
                @endif 
                @if($obj->d)
                <div class="row">
                    <div class="col-3 col-md-3 col-lg-2">
                      <div class="op @if(strpos($obj->answer,'D')!==false)  border-success bg-success @endif"">D</div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-10">
                      <div class="option">{!! $obj->d !!}</div>
                    </div>
                </div>
                @endif

                @if($obj->e)
                <div class="row">
                    <div class="col-3 col-md-3 col-lg-2">
                      <div class="op @if(strpos($obj->answer,'E')!==false)  border-success bg-success @endif"">E</div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-10">
                      <div class="option">{!! $obj->e !!}</div>
                    </div>
                </div>
                @endif

                @if($obj->f)
                <div class="row">
                    <div class="col-3 col-md-3 col-lg-2">
                      <div class="op @if(strpos($obj->answer,'F')!==false)  border-success bg-success @endif"">F</div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-10">
                      <div class="option">{!! $obj->f !!}</div>
                    </div>
                </div>
                @endif

                @if($obj->g)
                <div class="row">
                    <div class="col-3 col-md-3 col-lg-2">
                      <div class="op @if(strpos($obj->answer,'G')!==false)  border-success bg-success @endif"">G</div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-10">
                      <div class="option">{!! $obj->g !!}</div>
                    </div>
                </div>
                @endif

                @if($obj->h)
                <div class="row">
                    <div class="col-3 col-md-3 col-lg-2">
                      <div class="op @if(strpos($obj->answer,'H')!==false)  border-success bg-success @endif"">H</div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-10">
                      <div class="option">{!! $obj->h !!}</div>
                    </div>
                </div>
                @endif

                @if($obj->i)
                <div class="row">
                    <div class="col-3 col-md-3 col-lg-2">
                      <div class="op @if(strpos($obj->answer,'I')!==false)  border-success bg-success @endif"">I</div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-10">
                      <div class="option">{!! $obj->i !!}</div>
                    </div>
                </div>
                @endif

          
          

        </div>
      </div>

      <div class="card">
        <div class="card-body">
          
          @if($obj->explanation)
          <div class="row mb-2">
            <div class="col-md-4"><b>Explanation</b></div>
            <div class="col-md-8">{!! $obj->explanation !!}</div>
          </div>
          @endif

          <div class="row mb-2">
            <div class="col-md-4"><b>Layout</b></div>
            <div class="col-md-8">{!! $obj->layout !!}</div>
          </div>

          <div class="row mb-2">
            <div class="col-md-4"><b>Test</b></div>
            <div class="col-md-8">
              <a href="{{ route('test.show',$obj->test->id) }}">
                {{ $obj->test->name }}
              </a>
            </div>
          </div>

          <div class="row mb-2">
            <div class="col-md-4"><b>Section</b></div>
            <div class="col-md-8">
              @if($obj->section_id)
              <a href="{{ route('section.show',[$obj->test->id,$obj->section->id]) }}">
                {{ $obj->section->name }}
              </a>
              @else
              - None -
              @endif
            </div>
          </div>

         <div class="row mb-2">
            <div class="col-md-4"><b>Extract</b></div>
            <div class="col-md-8">
              @if($obj->extract_id)
              <a href="{{ route('extract.show',[$obj->test->id,$obj->extract_id]) }}">
                @if(isset($obj->extract))
                  {{ $obj->extract->name }}
                  @endif
              </a>
              @else
              - None -
              @endif
            </div>
          </div>

          
          
          <div class="row mb-2">
            <div class="col-md-4"><b>Answer</b></div>
            <div class="col-md-8">{{ $obj->answer }}</div>
          </div>

          <div class="row mb-2">
            <div class="col-md-4"><b>Qno</b></div>
            <div class="col-md-8">{{ $obj->qno }}</div>
          </div>
          <div class="row mb-2">
            <div class="col-md-4"><b>Sno</b></div>
            <div class="col-md-8">{{ $obj->sno }}</div>
          </div>

          @if(count($obj->tags))
          <div class="row mb-2">
            <div class="col-md-4"><b>Tags</b></div>
            <div class="col-md-8">
              @foreach($obj->tags as $m=>$tag)
              @if($m==0)
              <a href="{{ route('tag.show',$tag->id) }}">
                {{ $tag->value }}
              </a>
              @else
              ,<a href="{{ route('tag.show',$tag->id) }}">
                {{ $tag->value }}
              </a>
              @endif
              @endforeach
            </div>
          </div>
          @endif
          
          <div class="row mb-2">
            <div class="col-md-4"><b>Created </b></div>
            <div class="col-md-8">{{ ($obj->created_at) ? $obj->created_at->diffForHumans() : '' }}</div>
          </div>
        </div>
      </div>

    </div>

    <div class="col-12 col-md-3">
      @include('appl.test.snippets.menu')
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
        
        <form method="post" action="{{route($app->module.'.destroy',[$app->test->id,$obj->id])}}">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        	<button type="submit" class="btn btn-danger">Delete Permanently</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
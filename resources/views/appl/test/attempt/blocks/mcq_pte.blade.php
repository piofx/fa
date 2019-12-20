


@foreach($section->mcq_order as $k=>$m)




@if(isset($m->extract))
<div class="row">
<div class="col-12 col-md-6">
  <div class="option rounded p-4 border mb-4">
    <h4 class="mb-3"><i class="fa fa-check-square-o"></i> {{ $m->extract->name }} </h4>
    {!!$m->extract->text !!}</div>
    <span class="d-none sentence_holder" data-qno="{{$m->qno}}"></span>
    <input type="hidden" name="{{$m->qno}}" value=""/>
</div> 
<div class="col-12 col-md-6"> 

@if(!$m->layout)
<div class="border p-3 rounded mb-4 text-secondary">Select one answer choice from the given options. </div>
@elseif($m->layout == 'gre1')
  <div class="border p-3 rounded mb-4 text-secondary">Select one answer choice for the blank. Fill in the blank in such a way that it best completes the text. </div>
@elseif($m->layout == 'gre2' || $m->layout == 'gre3')  
<div class="border p-3 rounded mb-4 text-secondary">
 For each blank, select an answer choice from the corresponding column of choices. Fill all blanks in such a way that they best complete the text. 
</div>
@elseif($m->layout == 'gre_maq')  
<div class="border p-3 rounded mb-4 text-secondary">
Select one or more choices from the given options.
</div>
@elseif($m->layout == 'gre_numeric')  
<div class="border p-3 rounded mb-4 text-secondary">
For the following question, enter your answer as an integer or a decimal in the given input box.
</div>
@elseif($m->layout == 'gre_fraction')  
<div class="border p-3 rounded mb-4 text-secondary">
For the following question, enter your answer as as a fraction in the given input box.
</div>
@elseif($m->layout == 'pte_maq')  
<div class="border p-3 rounded mb-4 text-secondary">
Read the text and answer the multiple-choice question by selecting all correct responses. More than one response is correct.
</div>
@elseif($m->layout == 'pte_mcq')  
<div class="border p-3 rounded mb-4 text-secondary">
Read the text and answer the multiple-choice question by selecting the correct response. Only one response is correct.
</div>
@elseif($m->layout == 'no_instruction')  
@endif

@endif


<div class="mb-3">
  <div class="row">
        
      <div class="col-12">
          <div class="question">{!! $m->question !!}</div>
      </div>
  </div>



<table class="table table-bordered mt-2 @if(strlen($m->a)>30) w-100 @else w-50 @endif" >
  @if($m->a)
  <tr>
    <td class="td_option td_{{$m->qno}}_1 option" data-id="{{$m->qno}}" data-option="A" data-group="1">
        <input class='input {{$m->qno}}_A {{$m->qno}}_1' type="radio" name="{{$m->qno}}"  data-id="{{$m->qno}}" value="A"/> {!! $m->a !!}
    </td>
  </tr>
  @endif

  @if($m->b)
   <tr>
    <td class="td_option td_{{$m->qno}}_1 option" data-id="{{$m->qno}}" data-option="B" data-group="1">
        <input class='input {{$m->qno}}_B {{$m->qno}}_1' type="radio" name="{{$m->qno}}"  data-id="{{$m->qno}}" value="B"/> {!! $m->b !!}
    </td>
  </tr>
  @endif

  @if($m->c)
   <tr>
    <td class="td_option td_{{$m->qno}}_1 option" data-id="{{$m->qno}}" data-option="C" data-group="1">
        <input class='input {{$m->qno}}_C {{$m->qno}}_1' type="radio" name="{{$m->qno}}"  data-id="{{$m->qno}}" value="C"/> {!! $m->c !!}
    </td>
  </tr>
  @endif

  @if($m->d)
   <tr>
    <td class="td_option td_{{$m->qno}}_1 option" data-id="{{$m->qno}}" data-option="D" data-group="1">
        <input class='input {{$m->qno}}_D {{$m->qno}}_1' type="radio" name="{{$m->qno}}"  data-id="{{$m->qno}}" value="D"/> {!! $m->d !!}
    </td>
  </tr>
  @endif

  @if($m->e)
   <tr>
    <td class="td_option td_{{$m->qno}}_1 option" data-id="{{$m->qno}}" data-option="E" data-group="1">
        <input class='input {{$m->qno}}_E {{$m->qno}}_1' type="radio" name="{{$m->qno}}"  data-id="{{$m->qno}}" value="E"/> {!! $m->e !!}
    </td>
  </tr>
  @endif

  @if($m->f)
   <tr>
    <td class="td_option td_{{$m->qno}}_1 option" data-id="{{$m->qno}}" data-option="F" data-group="1">
        <input class='input {{$m->qno}}_F {{$m->qno}}_1' type="radio" name="{{$m->qno}}"  data-id="{{$m->qno}}" value="F"/> {!! $m->f !!}
    </td>
  </tr>
  @endif

</table>

@if(isset($m->extract))
</div>
</div> 
@endif
  
</div>  
    
@endforeach
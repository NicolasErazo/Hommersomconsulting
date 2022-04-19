@if(empty($errors)==false)
  @if (asset($errors) && count($errors) >0)
    <div   class="alert alert-danger">
        <h6 class="alert-title text-center">		
            <div class="alert-text" ><i class="icon alert-icon novi-icon int-danger"></i>
                @foreach ($errors->all() as $error)
                    <b >{!! $error !!}</b>
                @endforeach
            </div>
        </h6>
    </div>
  @endif
@endif

@if (session()->has('error'))
      <div   class="alert alert-danger">
        <h6 class="alert-title text-center">		
            <div class="alert-text" ><i class="icon alert-icon novi-icon int-danger"   ></i>
                <b >{!!session()->get('error')!!}</b>
            </div>
        </h6>
    </div>
@endif
@if(empty($no_tiene)==false )
    <div   class="alert alert-danger">
        <h6 class="alert-title text-center">		
            <div class="alert-text" ><i class="icon alert-icon novi-icon int-danger"   ></i>	
                <b >{{$no_tiene}}</b>
            </div>
        </h6>
    </div>
@endif
 @if (empty($error_p)==false) 
    @if ($error_p!=null)
        <div   class="alert alert-danger">
            <h6 class="alert-title text-center">		
                <div class="alert-text" ><i class="icon alert-icon novi-icon int-danger"   ></i>
                    <b >{{$error_p}}</b>
                </div>
            </h6>
        </div>
    @endif
@endif
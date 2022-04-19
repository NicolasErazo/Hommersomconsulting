
@if (session()->has('success'))


<div id="div_success"  class="alert alert-success">
		<h6 class="alert-title text-center">		
			  <div class="alert-text" ><i class="icon alert-icon novi-icon int-check"  ></i>{!!session()->get('success')!!}	</div>
		</h6>
</div>

@endif

@if (session()->has('danger'))

<div id="div_Alert"  class="alert alert-danger">
		<h6 class="alert-title text-center">		
			  <div class="alert-text" ><i class="icon alert-icon novi-icon int-danger"   ></i>	{!!session()->get('danger')!!}</div>
		</h6>
</div>

@endif

@if(empty($tiene)==false )
    <div id="div_success"  class="alert alert-success">
		<h6 class="alert-title text-center">		
			  <div class="alert-text" ><i class="icon alert-icon novi-icon int-check"  ></i>{{$tiene}}</div>
		</h6>
</div>

@endif

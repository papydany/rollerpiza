@if(Session::has('success'))
<div class="row">
   
    <div  class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            >
        {{Session::get('success')}}<i class="fa fa-fw fa-check-circle fa-lg" style="color:green"></i> 
    </div>
</div>
    @endif

    @if(Session::has('warning'))
    <div class="row">
    <div  class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-danger-600 hover:bg-danger-700 focus:outline-none focus:shadow-outline-danger"
            >
      {{Session::get('warning')}}
    </div>
</div>
    @endif
  @if(Session::has('danger'))
    <div class="row">
    <div class=" col-sm-10 col-sm-offset-1 alert alert-danger" role="alert" >
      {{Session::get('danger')}}
    </div>
</div>
    @endif


@if(count($errors) > 0)
<div class="row">
    <div class="col-sm-10 col-sm-offset-1 alert alert-danger" role="alert" >

        <strong>Error <i class="fa fa-times" aria-hidden="true"></i></strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </ul>
    </div>
    </div>

    @endif
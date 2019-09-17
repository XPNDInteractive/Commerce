@extends('admin.base.base')

@section('content')
    
    
    <div class="row filters m-0">
        <div class="row col-12 col-sm-12 col-md-6 col-lg-3 m-0 gradient-panel border-right-darker p-3 align-items-center justify-content-start">
            <h6 class="m-0">Admin/{{$title}}</h6>
        </div>
        <div class="col gradient-panel border-right-darker p-3"></div>
    </div>
     @if (count($errors->all()) !== 0)
        <div class="alert alert-danger  fade show w-100 rounded-0 m-0" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
     
        </div>
    @endif
    <div id="accordion">
        @if(isset($datasets['links']) && $datasets['links']['rows']->count() > 0)
            @foreach($datasets['links']['rows'] as $link)
                <div class="card rounded-0">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#accordian-{{$link->name}}" aria-expanded="true" aria-controls="collapseOne">
                            {{$link->name}}
                            </button>
                        </h5>
                    </div>

                    <div id="accordian-{{$link->name}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            @endforeach
        @else
        <div class="row m-0 justify-content-center align-items-center h-100 w-100 flex-column mt-5">
            <h4 class="text-muted">You need to create menu links</h4>
            <p class="text-muted">To get started creating your menu links please click the button below!</p>
            <a href="/admin/menu/items/create?menu={{$request->input('menu')}}" class="btn btn-primary">Add Menu Link</a>
        </div>
        @endif
    </div>
      
   
    
            

      
        

@endsection
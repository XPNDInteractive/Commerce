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
    @if (count($errors->all()) !== 0)
        <form style="height: calc(100% - 166px);" method="post" action="/admin/filters/create/save">
    @else
        <form style="height: calc(100% - 116px);" method="post" action="/admin/filters/create/save">
    @endif
        @csrf
        <div class="row m-0 h-100 ">
           
            
            <div class="col-sm-12 col-md-8 p-0 h-100 overflow-auto scrollbox text-dark ">
                <div class="row m-0">
                    <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label>* Name</label>
                        <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name"  value="{{old('name')}}"/>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your inventory items with the selected attributes.  Example('mens tee shirt large black')</small>
                    </div>
                     <div class="col-sm-12 col-md-6 bg-white border p-5">
                         <label>Description</label>
                        <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"  name="value">{{old('description')}}</textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('description') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">The description on what the attributes is used for.</small>
                    </div>
                </div>
               
                <div class="row m-0">
                    
                    <div class="col-12 bg-white border p-5">
                        
                            <div class="custom-control custom-checkbox">
                            <input name="active" type="checkbox" class="custom-control-input" id="active" checked>
                            <label class="custom-control-label" for="active">Active</label>
                        </div>
                        <small class="text-muted">Pages can be turned on and off by setting the active flag.  If you want to make this page visible to the public set the page as active.</small>
                    </div> 
                </div>
            </div>
          
           
            <div class="col-sm-12 col-md-4 p-0 h-100  scrollbox bg-light border-right">

                <ul class="nav tabs border-0 bg-white  justify-content-start flex-grow" id="myTab" role="tablist">

                    
                    <li class="nav-item col p-0 ">
                        <a class="nav-link rounded-0 border text-dark text-center active" id="home-tab" data-toggle="tab" href="#permissions" role="tab" aria-controls="home" aria-selected="true">Categories</a>
                    </li>

               
                    
                   
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                
               
                    
                    <div class="tab-pane active" id="categories" role="tabpanel" aria-labelledby="home-tab">
                        
                         <ul class="list-group rounded-0 border-0 select-list select-one-list ">
                           
                              @foreach($datasets['categories']['rows'] as $row)
                                <li class="select-one-list-item border-left select-list-item list-group-item d-flex justify-content-start align-items-center">
                                    <input name="categories[{{$row->id}}]" type="checkbox" class="col-1"/>
                                             
                                    <p class="m-0 ml-3">{{$row->name}}</p>
                                   
                                </li>
                              
                               
                            @endforeach
                        </ul>
                    </div>

                   
                </div>
            </div>
          
        </div>

         
     
           

         
        <div class="row m-0 bg-white border-top p-3">
            <a class="btn btn-danger btn-sm ml-auto" href="/admin/filters">Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm ml-1">Save</button>
        </div>
    </form>
            
    
@endsection
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
        <form style="height: calc(100% - 166px);" method="post" action="/admin/categories/create/save">
    @else
        <form style="height: calc(100% - 116px);" method="post" action="/admin/categories/create/save">
    @endif
        @csrf
        <div class="row m-0 ">
           
            
            <div class="col-sm-12 col-md-8 p-0  scrollbox text-dark ">
                <div class="row m-0">
                    <div class="col-sm-12 col-md-12 bg-white border-bottom p-5">
                        <label>* Name</label>
                        <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name"  value="{{old('name')}}"/>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your inventory items with the selected attributes.  Example('mens tee shirt large black')</small>
                    </div>
                     <div class="col-sm-12 col-md-12 bg-white border-bottom p-5">
                        <label>* Slug</label>
                        <input class="form-control {{ $errors->has('slug') ? ' is-invalid' : '' }}" type="text" name="slug"  value="{{old('slug')}}"/>
                        @if ($errors->has('slug'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('slug') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your inventory items with the selected attributes.  Example('mens tee shirt large black')</small>
                    </div>
                     <div class="col-sm-12 col-md-12 bg-white border-bottom p-5">
                        <label>Description</label>
                        <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"  name="value">{{old('description')}}</textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('description') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">The description on what the attributes is used for.</small>
                    </div>

                     <div class="col-sm-12 col-md-12 bg-white border-bottom p-5">
                        <label>Keywords</label>
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
                    
                    <div class="col-12 bg-white  p-5">
                        
                            <div class="custom-control custom-checkbox">
                            <input name="active" type="checkbox" class="custom-control-input" id="active" checked>
                            <label class="custom-control-label" for="active">Active</label>
                        </div>
                        <small class="text-muted">Pages can be turned on and off by setting the active flag.  If you want to make this page visible to the public set the page as active.</small>
                    </div> 
                </div>
            </div>
          
            <div class="col-sm-12 col-md-4 p-0    scrollbox bg-light border-left">

                 <div class="bg-light mb-4 p-5 border-bottom">
                    <h6 class="text-muted m-0 mb-2 border-bottom pb-3">Parent Categories</h6>
                    <p class="m-0 text-muted mb-2">Select what categories this product will fall under.</p>
                        <ul class="list-group rounded-0 border-0 select-list">
                        
                            @foreach($datasets['categories']['rows'] as $row)
                            <li class="select-list-item border-left border-right select-list-item list-group-item d-flex justify-content-start align-items-center">
                                <input name="categories[{{$row->id}}]" type="checkbox" class="col-1"/>
                                            
                                <p class="m-0 ml-3">{{$row->name}}</p>
                                
                            </li>
                            
                            
                        @endforeach
                    </ul>
                </div>

                <div class="bg-light mb-4 p-5 border-bottom">
                    <h6 class="text-muted m-0 mb-2 border-bottom pb-3">Filters</h6>
                    <p class="m-0 text-muted mb-2">Select what categories this product will fall under.</p>
                        <ul class="list-group rounded-0 border-0 select-list">
                        
                            @foreach($datasets['filters']['rows'] as $row)
                            <li class="select-list-item border-left border-right select-list-item list-group-item d-flex justify-content-start align-items-center">
                                <input name="filters[{{$row->id}}]" type="checkbox" class="col-1"/>
                                            
                                <p class="m-0 ml-3">{{$row->name}}</p>
                                
                            </li>
                            
                            
                        @endforeach
                    </ul>
                </div>

              
                <div class="bg-light mb-4 p-5 border-bottom">
                    <h6 class="text-muted m-0 mb-2 border-bottom pb-3">Roles</h6>
                    <p class="m-0 text-muted mb-2">Select what categories this product will fall under.</p>
                        <ul class="list-group rounded-0 border-0 select-list">
                        
                            @foreach($datasets['roles']['rows'] as $row)
                            <li class="select-list-item border-left border-right select-list-item list-group-item d-flex justify-content-start align-items-center">
                                <input name="roles[{{$row->id}}]" type="checkbox" class="col-1"/>
                                            
                                <p class="m-0 ml-3">{{$row->name}}</p>
                                
                            </li>
                            
                            
                        @endforeach
                    </ul>
                </div>
                
                <!-- Tab panes -->
           
            </div>
          
        </div>

         
     
           

         
        <div class="row m-0 bg-white border-top p-3">
            <a class="btn btn-danger btn-sm ml-auto" href="/admin/categories">Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm ml-1">Save</button>
        </div>
    </form>
            
    
@endsection



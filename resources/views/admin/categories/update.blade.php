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
     @if (session()->has('success'))
        <div class="alert alert-success  fade show w-100 rounded-0 m-0" role="alert">
            {{session()->get('success')}}
     
        </div>
    @endif
    @if (count($errors->all()) !== 0 || session()->has('success'))
        <form style="height: calc(100% - 166px);" method="post" action="/admin/categories/update/save">
    @else
        <form style="height: calc(100% - 116px);" method="post" action="/admin/categories/update/save">
    @endif
        @csrf
        <input type="hidden" name="category" value="{{$datasets['category']['rows']->id}}"/>
        <div class="row m-0 h-100 ">
           
            
            <div class="col-sm-12 col-md-8 p-0 h-100 overflow-auto scrollbox text-dark ">
                <div class="row m-0">
                    <div class="col-sm-12 col-md-12 bg-white border p-5">
                        <label>* Name</label>
                        <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name"  value="{{old('name') == null ? $datasets['category']['rows']->name:old('name')}}"/>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your attribute items with the selected attributes.  Example('mens tee shirt large black')</small>
                    </div>
                     <div class="col-sm-12 col-md-12 bg-white border-bottom p-5">
                        <label>* Slug</label>
                        <input class="form-control {{ $errors->has('slug') ? ' is-invalid' : '' }}" type="text" name="slug"  value="{{old('slug') == null ? $datasets['category']['rows']->slug:old('slug')}}"/>
                        @if ($errors->has('slug'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('slug') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your inventory items with the selected attributes.  Example('mens tee shirt large black')</small>
                    </div>
                     <div class="col-sm-12 col-md-12 bg-white border p-5">
                        <label>Description</label>
                        <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"  name="value">{{old('description') == null ? $datasets['category']['rows']->description:old('description')}}</textarea>
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
                            <input name="active" type="checkbox" class="custom-control-input" id="active" {{$datasets['category']['rows']->active == true ? 'checked':''}}>
                            <label class="custom-control-label" for="active">Active</label>
                        </div>
                        <small class="text-muted">Pages can be turned on and off by setting the active flag.  If you want to make this page visible to the public set the page as active.</small>
                    </div> 
                </div>
            </div>
                 <div class="col-sm-12 col-md-4 p-0 h-100  scrollbox bg-light border-right">

                <ul class="nav tabs border-0 bg-white  justify-content-start flex-grow" id="myTab" role="tablist">

                    
                    <li class="nav-item col p-0 ">
                        <a class="nav-link rounded-0 border text-dark text-center active" id="home-tab" data-toggle="tab" href="#permissions" role="tab" aria-controls="home" aria-selected="true">Parent Categories</a>
                    </li>

                    <li class="nav-item col p-0 ">
                        <a class="nav-link rounded-0 border text-dark text-center" id="home-tab" data-toggle="tab" href="#filters" role="tab" aria-controls="home" aria-selected="true">Filters</a>
                    </li>

                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center" id="home-tab" data-toggle="tab" href="#products" role="tab" aria-controls="home" aria-selected="true">Products</a>
                    </li>
                    
                   
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                
               
                    
                    <div class="tab-pane active" id="permissions" role="tabpanel" aria-labelledby="home-tab">
                        
                         <ul class="list-group rounded-0 border-0 select-list ">
                           
                              @foreach($datasets['categories']['rows'] as $row)
                                @if(!is_null($datasets['category']['rows']->parents()->where('category_category.parent_id', $row->id)->first()))
                                <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center active">
                                    <input name="roles[{{$row->id}}]" type="checkbox" class="col-1" checked/>
                                             
                                    <p class="m-0 ml-3">{{$row->name}}</p>
                                   
                                </li>
                                @else 
                                 <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center">
                                    <input name="categories[{{$row->id}}]" type="checkbox" class="col-1"/>
                                             
                                    <p class="m-0 ml-3">{{$row->name}}</p>
                                   
                                </li>
                                @endif
                              
                               
                            @endforeach
                        </ul>
                    </div>

                     <div class="tab-pane" id="filters" role="tabpanel" aria-labelledby="home-tab">
                        
                         <ul class="list-group rounded-0 border-0 select-list ">
                           
                              @foreach($datasets['filters']['rows'] as $row)
                                @if(!is_null($datasets['category']['rows']->filters()->first()))
                                <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center active">
                                    <input name="roles[{{$row->id}}]" type="checkbox" class="col-1" checked/>
                                             
                                    <p class="m-0 ml-3">{{$row->name}}</p>
                                   
                                </li>

                                @else
                                 <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center">
                                     <input name="filters" value="{{$row->id}}" type="checkbox" class="col-1"/>
                                             
                                    <p class="m-0 ml-3">{{$row->name}}</p>
                                   
                                </li>
                                @endif
                              
                               
                            @endforeach
                        </ul>
                    </div>

                      <div class="tab-pane" id="products" role="tabpanel" aria-labelledby="home-tab">
                        
                         <ul class="list-group rounded-0 border-0 select-list ">
                           
                              @foreach($datasets['products']['rows'] as $row)
                                <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center">
                                    <input name="roles[{{$row->id}}]" type="checkbox" class="col-1"/>
                                             
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
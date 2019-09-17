@extends('admin.base.base')

@section('content')
   
    <div class="row filters m-0">
        <div class="row col-12 col-sm-12 col-md-6 col-lg-3 m-0 border-darker-right p-3 align-items-center justify-content-start">
            <h6 class="m-0">Admin/{{$title}}</h6>
        </div>
        <div class="col p-3"></div>
    </div>
     @if (count($errors->all()) !== 0)
        <div class="alert alert-danger  fade show w-100 rounded-0 m-0" role="alert">
            There seems to be an issue with one or more of the fields below.
        </div>
    @endif
    @if (count($errors->all()) !== 0)
        <form method="post" action="/admin/products/variant/save" enctype="multipart/form-data">
    @else
        <form method="post" action="/admin/products/variant/save" enctype="multipart/form-data">
    @endif
    
        <div class="row m-0 h-100  align-items-stretch">
            @csrf
             <div class="col-sm-12 col-md-8 p-0 overflow-auto  scrollbox text-dark bg-light">
              
                <div class="row m-0">
                    <div class="col-sm-12 col-md-12 bg-white border-right border-bottom p-5 ">
                        <label><span class="text-danger">*</span> Name</label>
                        <input class="form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name"  value="{{old('name')}}"/>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your inventory items with the selected attributes.  Example('mens tee shirt large black')</small>
                    </div>
                     <div class="col-sm-12 col-md-12 bg-white border-left border-right p-5">
                        <label><span class="text-danger">*</span> Slug</label>
                        <input class="form-control  {{ $errors->has('slug') ? ' is-invalid' : '' }}" type="text" name="slug"  value="{{old('slug')}}"/>
                        @if ($errors->has('slug'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('slug') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your inventory items with the selected attributes.  Example('mens tee shirt large black')</small>
                    </div>
                </div>
                  <div class="row m-0">
                    
                     <div class="col-sm-12 col-md-12 bg-white p-5 border">
                        <label>Sub Title</label>
                          <input class="form-control {{ $errors->has('subtitle') ? ' is-invalid' : '' }}" type="text" name="subtitle"  value="{{old('subtitle')}}"/>
                        @if ($errors->has('subtitle'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('subtitle') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">The description on what the attributes is used for.</small>
                    </div>
                </div>
                 <div class="row m-0">
                    
                     <div class="col-sm-12 col-md-12 bg-white border-left border-right border-top p-5">
                        <label>Description</label>
                        <textarea class="form-control  {{ $errors->has('description') ? ' is-invalid' : '' }}"  name="description">{{old('description')}}</textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('description') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">The description on what the attributes is used for.</small>
                    </div>
                </div>
              
                
                
             
                   <div class="row m-0">
                    
                     <div class="col-sm-12 col-md-12 bg-white p-5 border">
                        <label>Size Chart</label>
                         <input class="form-control {{ $errors->has('available_quantity') ? ' is-invalid' : '' }}" type="text" name="sizes"  value="{{old('available_quantity')}}"/>
                          @if ($errors->has('available_quantity'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('available_quantity') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">The description on what the attributes is used for.</small>
                    </div>
                </div>
                <div class="bg-white  p-5 border-bottom border-right">
                    <h6 class="text-muted m-0 mb-2 border-bottom pb-3">Variants</h6>
                    <p class="m-0 text-muted mb-2">Select what categories this product will fall under.</p>
                        <ul class="list-group rounded-0 border-0 select-list">
                        
                            @foreach($datasets['variants']['rows'] as $row)
                            <li class="select-list-item border-left border-right select-list-item list-group-item d-flex justify-content-start align-items-center">
                                <input name="variants[{{$row->id}}]" type="checkbox" class="col-1"/>
                                @if(!is_null($row->media()->first()))
                                <img class="w-100 col-2" src="{{base64_decode($row->media()->first()->path)}}"/>
                                @endif
                               @foreach($row->attributeValues()->get() as $av)
                                <p class="m-0 ml-4">{{$av->attributes()->first()->name . ':' . $av->value}}</p>
                               @endforeach
                                <p class="m-0 ml-4">sku: {{$row->sku}}</p>
                               
                               
                                
                            </li>
                            
                            
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 p-0  scrollbox bg-light right-sidebar">
                 
                
                <div class="bg-light mb-4 p-5 border-bottom">
                    <div class="row m-0 mb-2 border-bottom pb-3 align-items-center">
                        <div class="col p-0">
                            <h6 class="text-muted m-0 ">Product Categories</h6>
                            <p class="m-0 text-muted mb-2">Select what categories this product will fall under.</p>
                        </div>
                       <div class="col-12 p-0">
                         <a href="#" class="btn btn-primary btn-sm ml-auto">New Category</a>
                        <button class="btn btn-primary btn-sm ml-1" type="button" data-toggle="collapse" data-target="#categories" aria-expanded="false" aria-controls="collapseExample">
                            Select Category
                        </button>
                       </div>
                    
                    </div>
                    
                    <div class="collapse mt-3 bg-light border" id="categories">
                        <ul class="list-group rounded-0 border-0 select-list">
                        
                            @foreach($datasets['categories']['rows'] as $row)
                            <li class="select-list-item border-left border-right select-list-item list-group-item d-flex justify-content-start align-items-center">
                                <input name="categories[{{$row->id}}]" type="checkbox" class="col-1"/>
                                            
                                <p class="m-0 ml-3">{{$row->name}}</p>
                                
                            </li>
                            
                            
                            @endforeach
                        </ul>
                    </div>
                </div>
                 
                <div class="bg-light mb-4 p-5 border-bottom">
                    <div class="row m-0 mb-2 border-bottom pb-3 align-items-center">
                        <div class="col p-0">
                            <h6 class="text-muted m-0 ">Product Tags</h6>
                            <p class="m-0 text-muted mb-2">Select what categories this product will fall under.</p>
                        </div>
                        <div class="col-12 p-0">
                            <a href="#" class="btn btn-primary btn-sm ml-auto">New Tag</a>
                            <button class="btn btn-primary btn-sm ml-1" type="button" data-toggle="collapse" data-target="#filters" aria-expanded="false" aria-controls="collapseExample">
                                Select Tag
                            </button>
                        </div>
                    
                    </div>
                     <div class="collapse mt-3 bg-light border" id="filters">
                        <ul class="list-group rounded-0 border-0">
                            
                            @foreach($datasets['attributes']['rows'] as $row)
                            <li class="list-group-item  border-left border-right d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#{{$row->name}}">
                                
                                <p class="m-0">{{$row->name}}</p>
                                <i class="fas fa-angle-down ml-auto text-muted"></i>
                                <i class="fas fa-angle-up ml-auto text-muted d-none"></i>


                                    
                            </li>
                            <ul class="select-list list-group rounded-0 collapse border-0 col-12 p-0 bg-light " id="{{$row->name}}">
                                @foreach($row->values()->get() as $value)
                                        <li class=" select-list-item  border-left border-right list-group-item d-flex justify-content-start align-items-center">
                                        <input name="filtertags[{{$value->id}}]" type="checkbox" class="col-1"/>
                                                
                                        <p class="m-0 ml-3">{{$value->value}}</p>
                                        
                                        
                                    </li>
                                @endforeach
                            </ul>
                                
                                
                            @endforeach
                        </ul>
                    </div>
                </div> 
                 <div class="bg-light mb-4 p-5 border-bottom">
                    <div class="row m-0 mb-2 border-bottom pb-3 align-items-center">
                        <div class="col p-0">
                            <h6 class="text-muted m-0 ">Product Reviews</h6>
                            <p class="m-0 text-muted mb-2">Select what reviews you want to attach to this product.</p>
                        </div>
                        <div class="col-12 p-0">
                            <a href="#" class="btn btn-primary btn-sm ml-auto">New Tag</a>
                            <button class="btn btn-primary btn-sm ml-1" type="button" data-toggle="collapse" data-target="#reviews" aria-expanded="false" aria-controls="collapseExample">
                                Select Review
                            </button>
                        </div>
                    
                    </div>
                     <div class="collapse mt-3 bg-light border" id="reviews">
                        <ul class="list-group rounded-0 border-0">
                            
                            @foreach($datasets['reviews']['rows'] as $row)
                            <li class="list-group-item  border-left border-right d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#{{$row->name}}">
                                
                                <p class="m-0">{{$row->title}}</p>
                                <i class="fas fa-angle-down ml-auto text-muted"></i>
                                <i class="fas fa-angle-up ml-auto text-muted d-none"></i>


                                    
                            </li>
                            
                                
                                
                            @endforeach
                        </ul>
                    </div>
                </div>
                  <div class="bg-light mb-4 p-5 border-bottom">
                    <div class="row m-0 mb-2 border-bottom pb-3 align-items-center">
                        <div class="col p-0">
                            <h6 class="text-muted m-0 ">Product Size Charts</h6>
                            <p class="m-0 text-muted mb-2">Select what categories this product will fall under.</p>
                        </div>
                       <div class="col-12 p-0">
                         <a href="#" class="btn btn-primary btn-sm ml-auto">New Size Chart</a>
                        <button class="btn btn-primary btn-sm ml-1" type="button" data-toggle="collapse" data-target="#sizes" aria-expanded="false" aria-controls="collapseExample">
                            Select Size Chart
                        </button>
                       </div>
                    
                    </div>
                    
                    <div class="collapse mt-3 bg-light border" id="sizes">
                        <ul class="list-group rounded-0 border-0 select-list">
                        
                            @foreach($datasets['sizes']['rows'] as $row)
                            <li class="select-list-item border-left border-right select-list-item list-group-item d-flex justify-content-start align-items-center">
                                <input name="sizecharts[{{$row->id}}]" type="checkbox" class="col-1"/>
                                            
                                <p class="m-0 ml-3">{{$row->name}}</p>
                                
                            </li>
                            
                            
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @if($request->has('variant'))
                <input type="hidden" name="variant" value = "true"/>
            @endif
          
        </div>
         
        <div class="row m-0 bg-white border-top p-3">
            <a href="/admin/products" class="btn btn-danger btn-sm ml-auto">Cancel</a>
            @if($request->has('variant'))
            <button type="submit" class="btn btn-primary btn-sm ml-1">Next</button>
            @else
             <button type="submit" class="btn btn-primary btn-sm ml-1">Save</button>
            @endif
        </div>
    </form>

    

@endsection
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
        <form method="post" action="/admin/products/create/save" enctype="multipart/form-data">
    @else
        <form method="post" action="/admin/products/create/save" enctype="multipart/form-data">
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
                        <textarea class="form-control  {{ $errors->has('subtitle') ? ' is-invalid' : '' }}"  name="subtitle">{{old('subtitle')}}</textarea>
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
                    <div class="col-sm-12 col-md-12 bg-white border p-5">
                        <label><span class="text-danger">*</span> Price</label>
                        <input class="form-control  {{ $errors->has('price') ? ' is-invalid' : '' }}" type="text" name="price"  value="{{old('price')}}"/>
                        @if ($errors->has('price'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('price') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your inventory items with the selected attributes.  Example('mens tee shirt large black')</small>
                    </div>
                </div>
                
                <div class="row m-0">
                    

                    <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label><span class="text-danger">*</span> SKU</label>
                        <input class="form-control {{ $errors->has('sku') ? ' is-invalid' : '' }}" type="text" name="sku"  value="{{old('sku')}}"/>
                           @if ($errors->has('sku'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('sku') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Create your inventory item sku.</small>
                    </div> 
                      <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label><span class="text-danger">*</span> UPC</label>
                        <input class="form-control {{ $errors->has('upc') ? ' is-invalid' : '' }}" type="text" name="upc" value="{{old('upc')}}"/>
                           @if ($errors->has('upc'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('upc') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">The inventory item sale upc.</small>
                    </div>   
                 </div>
              
                 <div class="row m-0">
                    <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label><span class="text-danger">*</span> Quantity</label>
                        <input class="form-control {{ $errors->has('quantity') ? ' is-invalid' : '' }}" type="text" name="quantity"  value="{{old('quantity')}}"/>
                        @if ($errors->has('quantity'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('quantity') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Your total quanity of this inventory item.</small>
                    </div> 

                    
                    <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label><span class="text-danger">*</span> Available Quantity</label>
                        <input class="form-control {{ $errors->has('available_quantity') ? ' is-invalid' : '' }}" type="text" name="available_quantity"  value="{{old('available_quantity')}}"/>
                          @if ($errors->has('available_quantity'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('available_quantity') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">The available quantity listed to sale.</small>
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
               
            </div>
            <div class="col-sm-12 col-md-4 p-0  scrollbox bg-light right-sidebar">
                  <div class="bg-light mb-4 p-5 border-bottom">
                   <div class="row m-0 mb-2 border-bottom pb-3 align-items-center">
                        <div class="col p-0">
                            <h6 class="text-muted m-0 ">Default Product Media</h6>
                            <p class="m-0 text-muted mb-2">Select what categories this product will fall under.</p>
                        </div>
                       <div class="col-12 p-0">
                         <a href="#" class="btn btn-primary btn-sm ml-auto">New Media</a>
                        <button class="btn btn-primary btn-sm ml-1" type="button" data-toggle="collapse" data-target="#featured" aria-expanded="false" aria-controls="collapseExample">
                            Select Media
                        </button>
                       </div>
                    
                    </div>
                    <div class="row m-0">
                      
                            @if ($errors->has('product-image'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('product-image') }}</p>
                            </span>
                        @endif
                        <div class="collapse mt-3 bg-white p-3 border" id="featured">
                            
                            <label class="text-muted mb-3 d-block text-center  mx-auto">click to select the media you want to use.</label>
                            <div class="row m-0">
                                @foreach($datasets['media']['rows'] as $row)
                                    <div class="col-3 p-0  bg-white">
                                        <div class=" p-2 image-select-one-item">
                                            
                                            <img class="w-100" data-id="{{$row->id}}" src="{{base64_decode($row->path)}}"/>
                                        </div>       
                                    </div>
                                @endforeach
                                
                            </div>
                            <div class="row m-0 p-3">
                                <button class="btn btn-primary ml-auto" type="button" data-toggle="collapse" data-target="#featured" aria-expanded="false" aria-controls="collapseExample">
                                    Done
                                </button>
                            </div>
                        </div>
                    </div>
                
                        <div class="row m-0 images mt-2">

                            
                        </div>
                </div>
                 <div class="bg-light mb-4 p-5 border-bottom">
                     <div class="row m-0 mb-2 border-bottom pb-3 align-items-center">
                        <div class="col p-0">
                            <h6 class="text-muted m-0 ">Additional Product Media</h6>
                            <p class="m-0 text-muted mb-2">Select what categories this product will fall under.</p>
                        </div>
                       <div class="col-12 p-0">
                         <a href="#" class="btn btn-primary btn-sm ml-auto">New Media</a>
                        <button class="btn btn-primary btn-sm ml-1" type="button" data-toggle="collapse" data-target="#additional" aria-expanded="false" aria-controls="collapseExample">
                            Select Media
                        </button>
                       </div>
                    
                    </div>
                    <div class="row m-0">
                       
                        <div class="collapse bg-light border" id="additional">
                                <div class="row m-0  p-3">
                                @foreach($datasets['media']['rows'] as $row)
                                    <div class="col-3 p-0 p-2 ">
                                        <div class=" bg-white p-2 image-select-item">
                                            <input type="hidden" name="media[]" class="selected-img-checkbox" value=""/>
                                            <img class="w-100" data-id="{{$row->id}}" src="{{base64_decode($row->path)}}"/>
                                        </div>       
                                    </div>
                                @endforeach
                                
                            </div>
                            <div class="row m-0 p-3">
                                <button class="btn btn-primary ml-auto" type="button" data-toggle="collapse" data-target="#additional" aria-expanded="false" aria-controls="collapseExample">
                                    Done
                                </button>
                            </div>
                        </div>
                    </div>
            
                    <div class="row m-0 images mt-3">

                        
                    </div>
                </div>
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
                                
                                <p class="m-0">{{$row->name}}</p>
                                <i class="fas fa-angle-down ml-auto text-muted"></i>
                                <i class="fas fa-angle-up ml-auto text-muted d-none"></i>


                                    
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
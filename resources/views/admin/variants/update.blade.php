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
        <form method="post" action="/admin/variants/update/save" enctype="multipart/form-data">
    @else
        <form method="post" action="/admin/variants/update/save" enctype="multipart/form-data">
    @endif
    
        <div class="row m-0 h-100  align-items-stretch">
            @csrf
            <input type="hidden" name="variant" value="{{$datasets['variant']['rows']->id}}"/>
             <div class="col-sm-12 col-md-8 p-0 overflow-auto  scrollbox text-dark bg-light">
              
                <div class="row m-0">
                    @foreach($datasets['attributes']['rows'] as $attribute)
                    <div class="col bg-white border-right p-5">
                        <label><span class="text-danger">*</span> {{$attribute->name}}</label>
                        <select name="{{$attribute->name}}" class="custom-select rounded-0 {{ $errors->has($attribute->name) ? ' is-invalid' : '' }}">
                            <option value="">N/A</option>
                            @foreach($attribute->values()->get() as $val)
                                @if(!is_null(old($attribute->name)) && old($attribute->name) == $val->id)
                                    <option value="{{$val->id}}" selected>{{$val->value}}</option>
                                @elseif(!is_null($datasets['variant']['rows']->attributeValues()->where('attribute_values.id', $val->id)->first()))
                                    <option value="{{$val->id}}" selected>{{$val->value}}</option>
                                @else
                                    <option value="{{$val->id}}">{{$val->value}}</option>
                                @endif
                            @endforeach
                          
                        </select>
                         @if ($errors->has($attribute->name))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first($attribute->name) }}</p>
                            </span>
                        @endif
                    </div>
                    @endforeach
                    
                </div>
                <div class="row m-0">
                    <div class="col-sm-12 col-md-12 bg-white border p-5">
                        <label><span class="text-danger">*</span> Price</label>
                        <input class="form-control  {{ $errors->has('price') ? ' is-invalid' : '' }}" type="text" name="price"  value="{{is_null(old('price')) ? $datasets['variant']['rows']->price :old('price') }}"/>
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
                        <input class="form-control {{ $errors->has('sku') ? ' is-invalid' : '' }}" type="text" name="sku"  value="{{is_null(old('sku')) ? $datasets['variant']['rows']->sku :old('sku') }}"/>
                           @if ($errors->has('sku'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('sku') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Create your inventory item sku.</small>
                    </div> 
                      <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label><span class="text-danger">*</span> UPC</label>
                        <input class="form-control {{ $errors->has('upc') ? ' is-invalid' : '' }}" type="text" name="upc" value="{{is_null(old('upc')) ? $datasets['variant']['rows']->upc :old('upc') }}"/>
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
                        <input class="form-control {{ $errors->has('quantity') ? ' is-invalid' : '' }}" type="text" name="quantity"  value="{{is_null(old('quantity')) ? $datasets['variant']['rows']->quantity :old('quantity') }}"/>
                        @if ($errors->has('quantity'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('quantity') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Your total quanity of this inventory item.</small>
                    </div> 

                    
                    <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label><span class="text-danger">*</span> Available Quantity</label>
                        <input class="form-control {{ $errors->has('available_quantity') ? ' is-invalid' : '' }}" type="text" name="available_quantity"  value="{{is_null(old('available_quantity')) ? $datasets['variant']['rows']->available_quantity :old('available_quantity') }}"/>
                          @if ($errors->has('available_quantity'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('available_quantity') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">The available quantity listed to sale.</small>
                    </div>   
                </div>
                <div class="row m-0">
                    <div class="col-12 bg-white border p-5">
                        
                            <div class="custom-control custom-checkbox">
                            <input name="default" type="checkbox" class="custom-control-input" id="default" {{$datasets['variant']['rows']->default ? 'checked':''}}>
                            <label class="custom-control-label" for="default">Default Variant</label>
                        </div>
                        <small class="text-muted">Pages can be turned on and off by setting the active flag.  If you want to make this page visible to the public set the page as active.</small>
                    </div> 
                </div>
            </div>
            <div class="col-sm-12 col-md-4 p-0  scrollbox bg-light right-sidebar">
                <div class="bg-light mb-4 p-5 border-bottom">
                    <h6 class="text-muted m-0 mb-2 border-bottom pb-3">Products</h6>
                    <p class="m-0 text-muted mb-2">Select what categories this product will fall under.</p>
                    <ul class="list-group rounded-0 border-0 select-list">
                          @foreach($datasets['products']['rows'] as $row)
                               
                                <li class="select-list-item border-left border-right select-list-item list-group-item d-flex justify-content-start align-items-center {{!is_null($datasets['variant']['rows']->products()->where('products.id', $row->id)->first()) ? ' active':''}}">
                                    <input name="products[{{$row->id}}]" type="checkbox" class="col-1" {{!is_null($datasets['variant']['rows']->products()->where('products.id', $row->id)->first()) ? ' checked':''}}/>
                                                
                                    <p class="m-0 ml-3">{{$row->name}}</p>
                                    
                                </li>
                                
                            @endforeach
                    </ul>
                </div>
                 <div class="bg-light mb-4 p-5 border-bottom">
                    <h6 class="text-muted m-0 mb-2 border-bottom pb-3">Product Media</h6>
                    <p class="m-0 text-muted mb-2">The main/default product media.</p>
                      <div class="row m-0">
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#featured" aria-expanded="false" aria-controls="collapseExample">
                                Select Media
                            </button>
                             @if ($errors->has('product-image'))
                                <span class="invalid-feedback d-block" role="alert">
                                    <p class="text-danger">{{ $errors->first('product-image') }}</p>
                                </span>
                            @endif
                            <div class="collapse mt-3 bg-light border" id="featured">
                                    <div class="row m-0  p-3">
                                    @foreach($datasets['media']['rows'] as $row)
                                        @if($datasets['variant']['rows']->media_id == $row->path)
                                            <div class="col-3 p-0 p-2 ">
                                                <div class=" bg-white p-2 image-select-one-item selected">
                                                    
                                                    <img class="w-100" data-id="{{$row->id}}" src="{{base64_decode($row->path)}}"/>
                                                </div>       
                                            </div>
                                        @else
                                             <div class="col-3 p-0 p-2 ">
                                                <div class=" bg-white p-2 image-select-one-item">
                                                    
                                                    <img class="w-100" data-id="{{$row->id}}" src="{{base64_decode($row->path)}}"/>
                                                </div>       
                                            </div>
                                        @endif
                                    @endforeach
                                    
                                </div>
                                <div class="row m-0 p-3">
                                    <button class="btn btn-primary ml-auto" type="button" data-toggle="collapse" data-target="#featured" aria-expanded="false" aria-controls="collapseExample">
                                        Done
                                    </button>
                                </div>
                            </div>
                        </div>
                
                        <div class="row m-0 images mt-5">
                            <input class="featured-image-input" type="hidden" name="product-media" value="{{App\Media::where('path', $datasets['variant']['rows']->media_id)->first()->id}}">
                            <img class="col-sm-12 col-md-12 bg-white border p-2 w-100 h-100 featured-img" src="{{base64_decode($datasets['variant']['rows']->media_id)}}">
                        </div>
                </div>
                
                <div class="bg-light mb-4 p-5 border-bottom">
                    <h6 class="text-muted m-0 mb-2 border-bottom pb-3">Additional Media</h6>
                    <p class="m-0 text-muted mb-2">Select what categories this product will fall under.</p>
                      <div class="row m-0">
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Select Media
                            </button>
                            <div class="collapse mt-3 bg-light border" id="collapseExample">
                                    <div class="row m-0  p-3">
                                    @foreach($datasets['media']['rows'] as $row)
                                        @if(!is_null($datasets['variant']['rows']->media()->where('media.id', $row->id)->first()))
                                            <div class="col-3 p-0 p-2 ">
                                                <div class=" bg-white p-2 image-select-item selected">
                                                    <input type="hidden" name="media[]" class="selected-img-checkbox" value="{{$row->id}}"/>
                                                    <img class="w-100" data-id="{{$row->id}}" src="{{base64_decode($row->path)}}"/>
                                                </div>       
                                            </div>
                                        @else
                                             <div class="col-3 p-0 p-2 ">
                                                <div class=" bg-white p-2 image-select-item">
                                                    <input type="hidden" name="media[]" class="selected-img-checkbox" value=""/>
                                                    <img class="w-100" data-id="{{$row->id}}" src="{{base64_decode($row->path)}}"/>
                                                </div>       
                                            </div>
                                        @endif
                                    @endforeach
                                    
                                </div>
                                <div class="row m-0 p-3">
                                    <button class="btn btn-primary ml-auto" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        Done
                                    </button>
                                </div>
                            </div>
                        </div>
                
                        <div class="row m-0 images mt-5">

                            @foreach($datasets['variant']['rows']->media()->get() as $media)
                                <img class="col-sm-12 col-md-3 bg-white border p-2 w-100 h-100" src="{{base64_decode($media->path)}}">
                            @endforeach
                        </div>
                </div>
                
                
            </div> 

            
           
            
          
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
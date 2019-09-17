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
            There seems to be an issue with one or more of the fields below.
        </div>
    @endif
    @if (count($errors->all()) !== 0)
        <form style="height: calc(100% - 166px);" method="post" action="/admin/inventory/update/save">
    @else
        <form style="height: calc(100% - 116px);" method="post" action="/admin/inventory/update/save">
    @endif
    
        <div class="row m-0 h-100  align-items-stretch">
            @csrf
            <input type="hidden" name="inventory" value="{{$datasets['inventory']['rows']->id}}"/>
             <div class="col-sm-12 col-md-8 p-0 overflow-auto h-100 scrollbox text-dark bg-light ">
                <div class="row m-0">
                    <div class="col-sm-12 col-md-12 bg-white border p-5">
                        <label><span class="text-danger">*</span> Name</label>
                        <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name"  value="{{is_null(old('name')) ? $datasets['inventory']['rows']->name:old('name')}}"/>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your inventory items with the selected attributes.  Example('mens tee shirt large black')</small>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label><span class="text-danger">*</span> UPC</label>
                        <input class="form-control {{ $errors->has('upc') ? ' is-invalid' : '' }}" type="text" name="upc"  value="{{is_null(old('upc')) ? $datasets['inventory']['rows']->upc:old('upc')}}"/>
                           @if ($errors->has('upc'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('upc') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Create your inventory item sku.</small>
                    </div> 

                     <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label><span class="text-danger">*</span> SKU</label>
                        <input class="form-control {{ $errors->has('sku') ? ' is-invalid' : '' }}" type="text" name="sku"  value="{{is_null(old('sku')) ? $datasets['inventory']['rows']->sku:old('sku')}}"/>
                           @if ($errors->has('sku'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('sku') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Create your inventory item sku.</small>
                    </div> 
                 </div>
                <div class="row m-0">
                   
                    <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label><span class="text-danger">*</span> MSRP</label>
                        <input class="form-control {{ $errors->has('msrp') ? ' is-invalid' : '' }}" type="text" name="msrp" value="{{is_null(old('msrp')) ? $datasets['inventory']['rows']->msrp:old('msrp')}}"/>
                           @if ($errors->has('msrp'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('msrp') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">The manufacture's suggested retail price.</small>
                    </div> 

                    
                    <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label><span class="text-danger">*</span> Price</label>
                        <input class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" type="text" name="price" value="{{is_null(old('price')) ? $datasets['inventory']['rows']->price:old('price')}}"/>
                           @if ($errors->has('price'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('price') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">The inventory item sale price.</small>
                    </div>   
                </div>
                 <div class="row m-0">
                    <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label><span class="text-danger">*</span> Quantity</label>
                        <input class="form-control {{ $errors->has('quantity') ? ' is-invalid' : '' }}" type="text" name="quantity"  value="{{is_null(old('quantity')) ? $datasets['inventory']['rows']->quantity:old('quantity')}}"/>
                           @if ($errors->has('quantity'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('quantity') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Your total quanity of this inventory item.</small>
                    </div> 

                    
                    <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label>Available Quantity</label>
                        <input class="form-control" type="text" name="availQuantity"  value="{{is_null(old('availQuantity')) ? $datasets['inventory']['rows']->available_quantity:old('availQuantity')}}"/>
                        <small class="text-muted">The available quantity listed to sale.</small>
                    </div>   
                </div>
            </div>
              <div class="col-sm-12 col-md-4 p-0 h-100 scrollbox bg-light border-left">

                <ul class="nav tabs border-0 bg-white justify-content-start" id="myTab" role="tablist">
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0   text-center active" id="home-tab" data-toggle="tab" href="#attributes" role="tab" aria-controls="home" aria-selected="true">Attributes</a>
                    </li>
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0  text-center " id="home-tab" data-toggle="tab" href="#media" role="tab" aria-controls="home" aria-selected="true">Media</a>
                    </li>
                   
                  
                   
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active h-100" id="attributes" role="tabpanel" aria-labelledby="home-tab">
                        <ul class="list-group rounded-0 border-0">
                           
                             @foreach($datasets['attributes']['rows'] as $row)
                             
                                <li class="list-group-item d-flex justify-content-between align-items-center show" data-toggle="collapse" data-target="#{{$row->name}}">
                                   
                                    <p class="m-0">{{$row->name}}</p>
                                    <i class="fas fa-angle-down ml-auto text-muted"></i>
                                    <i class="fas fa-angle-up ml-auto text-muted d-none"></i>


                                     
                                </li>
                                
                              
                        <ul class="select-one-list list-group rounded-0 collapse border-0 col-12 p-0 bg-light {{$datasets['inventory']['rows']->attributeValues()->count() > 0 ? 'show':''}}" id="{{$row->name}}">
                                   
                                    @foreach($row->values()->get() as $value)
                                        @if(!is_null($datasets['inventory']['rows']->attributeValues()->where('attribute_values.id', $value->id)->first()))
                                        <li class=" select-one-list-item list-group-item d-flex justify-content-start align-items-center active">
                                            <input name="attributes[{{$value->id}}]" type="checkbox" class="col-1" checked/>
                                                    
                                            <p class="m-0 ml-3">{{$value->value}}</p>
                                        </li>
                                        @else
                                            <li class=" select-one-list-item list-group-item d-flex justify-content-start align-items-center">
                                                <input name="attributes[{{$value->id}}]" type="checkbox" class="col-1"/>
                                                        
                                                <p class="m-0 ml-3">{{$value->value}}</p>
                                            </li>
                                         @endif
                                    @endforeach
                                </ul>
                            
                           
                            @endforeach
                            
                        </ul>
                         
                    </div>
                    <div class="tab-pane h-100" id="media" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row m-0 border-top p-3">
                           
                              @foreach($datasets['media']['rows'] as $row)
                                <div class="col-6 p-0 p-2 ">
                                    @if(!is_null($datasets['inventory']['rows']->media()->where('media.id', $row->id)->first()))
                                        <div class=" bg-white p-2 image-select-item selected">
                                            <input type="hidden" name="media[{{$row->id}}]" class="selected-img-checkbox" value="{{$row->id}}"/>
                                            <img class="w-100" src="{{base64_decode($row->path)}}"/>
                                        </div> 
                                    @else
                                        <div class=" bg-white p-2 image-select-item">
                                            <input type="hidden" name="media[{{$row->id}}]" class="selected-img-checkbox"/>
                                            <img class="w-100" src="{{base64_decode($row->path)}}"/>
                                        </div> 
                                    @endif 

                                </div>
                                   
                                
                              
                               
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
           
           
          
        </div>
         
        <div class="row m-0 bg-white border-top p-3">
            <button class="btn btn-danger btn-sm ml-auto">Cancel</button>
            <button class="btn btn-primary btn-sm ml-1">Save</button>
        </div>
    </form>
    
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/balloon/ckeditor.js"></script>
<script>

   BalloonEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    
</script>
@endsection
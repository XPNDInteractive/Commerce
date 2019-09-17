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
        <form style="height: calc(100% - 166px);" method="post" action="/admin/reviews/create/save">
    @else
        <form style="height: calc(100% - 116px);" method="post" action="/admin/reviews/create/save">
    @endif
        @csrf
        <div class="row m-0 ">
           
            
            <div class="col-sm-12 col-md-8 p-0  scrollbox text-dark ">
                <div class="row m-0">
                    <div class="col-sm-12 col-md-12 bg-white border-bottom p-5">
                        <label>* User</label>
                        
                        <select class="custom-select rounded-0 {{ $errors->has('user') ? ' is-invalid' : '' }}" name="user" >
                            <option selected value="">Select a user</option>
                            @foreach($datasets['users']['rows'] as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('user'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('user') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your inventory items with the selected attributes.  Example('mens tee shirt large black')</small>
                    </div>
                    <div class="col-sm-12 col-md-12 bg-white border-bottom p-5">
                        <label>Title</label>
                        <input class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" name="title"  value="{{old('title')}}"/>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('title') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your inventory items with the selected attributes.  Example('mens tee shirt large black')</small>
                    </div>
                   
                     <div class="col-sm-12 col-md-12 bg-white border-bottom p-5">
                        <label>Message</label>
                        <textarea class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}"  name="message">{{old('message')}}</textarea>
                        @if ($errors->has('message'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('message') }}</p>
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
          
            <div class="col-sm-12 col-md-4 p-0 scrollbox bg-light border-left">
                 <div class="bg-light mb-4 p-5 border-bottom">
                    <h6 class="text-muted m-0 mb-2 border-bottom pb-3">Rating</h6>
                    <p class="m-0 text-muted mb-2">Rate this product.</p>
                    <div class="rating" data-rate-value={{old('rating')}}></div>
                    <input class="rating-input" type = "hidden" name="rating" value="{{old('rating')}}"/>
                     @if ($errors->has('rating'))
                        <span class="invalid-feedback d-block" role="alert">
                            <p class="text-danger">{{ $errors->first('rating') }}</p>
                        </span>
                    @endif
                        
                </div>
               

                <div class="bg-light mb-4 p-5 border-bottom">
                    <h6 class="text-muted m-0 mb-2 border-bottom pb-3">Products</h6>
                    <p class="m-0 text-muted mb-2">Select what reviews this product will fall under.</p>
                        <ul class="list-group rounded-0 border-0 select-list">
                        
                            @foreach($datasets['products']['rows'] as $row)
                            <li class="select-list-item border-left border-right select-list-item list-group-item d-flex justify-content-start align-items-center">
                                <input name="products[{{$row->id}}]" type="checkbox" class="col-1"/>
                                            
                                <p class="m-0 ml-3">{{$row->name}}</p>
                                
                            </li>
                            
                            
                        @endforeach
                    </ul>
                </div>

              
                <!-- Tab panes -->
           
            </div>
          
        </div>

         
     
           

         
        <div class="row m-0 bg-white border-top p-3">
            <a class="btn btn-danger btn-sm ml-auto" href="/admin/reviews">Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm ml-1">Save</button>
        </div>
    </form>
            
  
@endsection



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
        <form style="height: calc(100% - 166px);" method="post" action="/admin/filter/tag/save">
    @else
        <form style="height: calc(100% - 116px);" method="post" action="/admin/filter/tag/save">
    @endif
        @csrf
        <input type="hidden" name="filter" value="{{$request->input('filter')}}"/>
        <div class="row m-0 h-100 ">
           
            
            <div class="col-sm-12 col-md-12 p-0 h-100 overflow-auto scrollbox text-dark ">
                <div class="row m-0">
                    <div class="col-sm-12 col-md-12 bg-white border p-5">
                        <label>* Name</label>
                        <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name"  value="{{old('name')}}"/>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your inventory items with the selected filters.  Example('mens tee shirt large black')</small>
                    </div>
                    
                     
                </div>
                <div class="row m-0">
                    <div class="col-sm-12 col-md-12 bg-white border p-5">
                        <label>Description</label>
                        <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"  name="value">{{old('description')}}</textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('description') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your inventory items with the selected filters.  Example('mens tee shirt large black')</small>
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
           

         
     
           

         
        <div class="row m-0 bg-white border-top p-3 w-100">
            <a class="btn btn-danger btn-sm ml-auto" href="/admin/filters/update?filter={{$request->input('filter')}}">Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm ml-1">Save</button>
        </div>
    </form>
    
 


@endsection
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
        <form style="height: calc(100% - 166px);" method="post" action="/admin/sizes/create/save">
    @else
        <form style="height: calc(100% - 116px);" method="post" action="/admin/sizes/create/save">
    @endif
        @csrf
        <div class="row m-0" style="min-height: 100%;">
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
                </div>

                <div class="row m-0 p-5 border-bottom align-items-center bg-white">
                    <div class="col-6">
                        <label class="m-0 w-100">* Size Chart</label>
                        <small class="text-muted w-100">Its best to name your inventory items with the selected attributes.  Example('mens tee shirt large black')</small>
                        
                    </div>
                     <div class="col-6">
                        <div class="row m-0">
                            <button type="button" class="btn btn-primary btn-sm ml-auto add-column-sizechart">Add Columns</button>
                            <button type="button" class="btn btn-primary btn-sm ml-1 add-row-sizechart">Add Row</button>
                            
                        </div>
                     </div>
                    <div class="row m-0 mt-5 align-items-center h-100">
                        <div class="{{ $errors->has('col.*') ? ' border border-danger' : '' }}">
                        <table style="table-layout:fixed;" class="table table-bordered size-table m-0 " >

                            <thead>
                                <tr class="">
                                    <th class="text-left" style="width: 55px;">
                                        <label class="m-0 row-number">#</label>
                                    </th>

                                      <th class="text-left column-clone d-none">
                                        <div class="row m-0 align-items-center">
                                            <input style="font-weight: 500;" placeholder="column name" class=" border-0 form-control form-control-sm" type="text" name=""/>
                                         
                                            
                                        </div>
                                    </th>
                                    @if(!is_null(old('col')))
                                        @foreach(old('col') as $col)
                                            <th class="text-left">
                                                <div class="row m-0 align-items-center">
                                                    <input style="font-weight: 500;"value="{{$col}}" placeholder="column name" class=" border-0 form-control form-control-sm" type="text" name="col[]"/>
                                                </div>
                                            </th>
                                        @endforeach
                                    @else
                                        <th class="text-left">
                                            <div class="row m-0 align-items-center">
                                                <input style="font-weight: 500;"value="" placeholder="column name" class=" border-0 form-control form-control-sm" type="text" name="col[]"/>
                                            </div>
                                        </th>
                                    @endif

                                    
                                    
                                   
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="d-none row-clone">
                                    <td class="text-left">
                                        <label class="m-0 row-number"></label>
                                    </td>
                                    
                                    @if(!is_null(old('col')))
                                        @foreach(old('col') as $col)
                                            <td class="text-left column-clone bg-light">
                                                <div class="row m-0 align-items-center">
                                                    <input class="bg-light border-0 form-control form-control-sm row-input" type="text" name=""/>
                                                
                                                    
                                                </div>
                                            </td>
                                        @endforeach
                                    @else
                                          <td class="text-left column-clone bg-light">
                                                <div class="row m-0 align-items-center">
                                                    <input class="bg-light border-0 form-control form-control-sm row-input" type="text" name=""/>
                                                
                                                    
                                                </div>
                                            </td>
                                    @endif
                                   
                                </tr>

                                 @if(!is_null(old('row')))
                                    @foreach(old('row') as $key => $row)
                                         <tr class="">
                                            <td class="text-left ">
                                                <label class="m-0 row-number">{{$key + 1}}</label>
                                            </td>

                                            

                                                @foreach($row as $ckey => $col)
                                                    <td class="text-left column-clone bg-light">
                                                        <div class="row m-0 align-items-center">
                                                            <input class="bg-light border-0 form-control form-control-sm row-input" value="{{$col}}" type="text" name="row[{{$key}}][{{$ckey}}]"/>
                                                        
                                                            
                                                        </div>
                                                    </td>
                                                @endforeach
  
                                            
                                          
                                        
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        </div>
                         @if ($errors->has('col'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('col') }}</p>
                            </span>
                        @endif
                            @if ($errors->has('col.*'))
                            <span class="invalid-feedback d-block" role="alert">
                                
                                <p class="text-danger">{{$errors->first('col.*')}}</p>
                            </span>
                        @endif
                          @if ($errors->has('row'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('row') }}</p>
                            </span>
                        @endif
                    </div>
                </div>
               
               
                <div class="row m-0">
                    <div class="col-12 bg-white  p-5">
                        <div class="custom-control custom-checkbox">
                            <input name="active" type="checkbox" class="custom-control-input" id="active" {{old('active') == 'on' ? ' checked':''}}>
                            <label class="custom-control-label" for="active">Active</label>
                        </div>
                        <small class="text-muted">Pages can be turned on and off by setting the active flag.  If you want to make this page visible to the public set the page as active.</small>
                    </div> 
                </div>
            </div>
          
            <div class="col-sm-12 col-md-4 p-0    scrollbox bg-light border-left">

                 <div class="bg-light mb-4 p-5 border-bottom">
                    <h6 class="text-muted m-0 mb-2 border-bottom pb-3">Products</h6>
                    <p class="m-0 text-muted mb-2">Select what sizes this product will fall under.</p>
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
            <a class="btn btn-danger btn-sm ml-auto" href="/admin/sizes">Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm ml-1">Save</button>
        </div>
    </form>
            
    
@endsection



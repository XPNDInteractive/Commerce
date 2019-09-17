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
        <form style="height: calc(100% - 166px);" method="post" action="/admin/menu/create/save">
    @else
        <form style="height: calc(100% - 116px);" method="post" action="/admin/menu/create/save">
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
                        <input class="form-control" type="text" name="description"  value="{{old('description')}}"/>
                        <small class="text-muted">The description on what the menu is used for.</small>
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

                <ul class="nav tabs border-0 bg-white justify-content-start" id="myTab" role="tablist">

                    
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center active" id="home-tab" data-toggle="tab" href="#permissions" role="tab" aria-controls="home" aria-selected="true">Permissions</a>
                    </li>

                   
                    
                   
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                
               
                    
                    <div class="tab-pane active" id="permissions" role="tabpanel" aria-labelledby="home-tab">
                        
                         <ul class="list-group rounded-0 border-0 select-list ">
                           
                              @foreach($datasets['roles']['rows'] as $row)
                                <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center">
                                    <input name="roles[{{$row->id}}]" type="checkbox" class="col-1"/>
                                             
                                    <p class="m-0 ml-3">{{$row->name}}</p>
                                   
                                </li>
                              
                               
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane" id="links" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row m-0">
                            <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addMenuItem">
                                New
                            </button>
                        </div>
                         <ul class="list-group rounded-0 border-0 select-list ">
                           
                              @foreach($datasets['links']['rows'] as $row)
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
            <a class="btn btn-danger btn-sm ml-auto" href="/admin/menu">Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm ml-1">Save</button>
        </div>
    </form>
            
     <div class="modal fade rounded-0" id="addMenuItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-header rounded-0 bg-darker">
        <h5 class="modal-title text-white rounded-0" id="exampleModalLabel">Menu Link</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body overflow-auto" style="height: 400px;">

             @if (count($errors->all()) !== 0)
        <div class="alert alert-danger  fade show w-100 rounded-0 m-0" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
     
        </div>
    @endif
     <form method="post" action="/admin/menu/create/save">
        @csrf
        <div class="row m-0 h-100 ">
           
            
            <div class="col-sm-12 col-md-8 p-0 h-100 overflow-auto scrollbox text-dark ">
                <div class="row m-0">
                    <div class="col-sm-12 col-md-12 bg-white border p-5">
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


                <div class="row m-0">
                    <div class="col-sm-12 col-md-12 bg-white border p-5">
                        <label>Description</label>
                        <textarea class="form-control"  name="description">{{old('description')}}</textarea>
                        <small class="text-muted">The description on what the menu is used for.</small>
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

                <ul class="nav tabs border-0 bg-white justify-content-start" id="myTab" role="tablist">
                     <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center active" id="home-tab" data-toggle="tab" href="#item-path" role="tab" aria-controls="home" aria-selected="true">Path</a>
                    </li>
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center" id="home-tab" data-toggle="tab" href="#item-permissions" role="tab" aria-controls="home" aria-selected="true">Permissions</a>
                    </li>
                     <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center" id="home-tab" data-toggle="tab" href="#item-links" role="tab" aria-controls="home" aria-selected="true">Parent</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                
                    <div class="tab-pane active" id="item-path" role="tabpanel" aria-labelledby="profile-tab">
                          <ul class="nav tabs border-0 bg-white justify-content-start" id="myTab" role="tablist">
                            <li class="nav-item col p-0">
                                <a class="nav-link rounded-0 border text-dark text-center active" id="home-tab" data-toggle="tab" href="#internal" role="tab" aria-controls="home" aria-selected="true">Internal Path</a>
                            </li>
                            <li class="nav-item col p-0">
                                <a class="nav-link rounded-0 border text-dark text-center" id="home-tab" data-toggle="tab" href="#external" role="tab" aria-controls="home" aria-selected="true">External Path</a>
                            </li>
                           
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="internal" role="tabpanel" aria-labelledby="home-tab">
                                  <ul class="list-group rounded-0 border-0 select-list ">
                           
                              @foreach($datasets['pages']['rows'] as $row)
                                <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center">
                                    <input name="roles[{{$row->id}}]" type="checkbox" class="col-1"/>
                                             
                                    <p class="m-0 ml-3">{{$row->title}}</p>
                                   
                                </li>
                              
                               
                            @endforeach
                        </ul>
                            </div>
                            <div class="tab-pane" id="externals" role="tabpanel" aria-labelledby="profile-tab">...</div>
                       
                        </div>
                       
                    </div>
                    
                    <div class="tab-pane" id="item-permissions" role="tabpanel" aria-labelledby="home-tab">
                        
                         <ul class="list-group rounded-0 border-0 select-list ">
                           
                              @foreach($datasets['roles']['rows'] as $row)
                                <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center">
                                    <input name="roles[{{$row->id}}]" type="checkbox" class="col-1"/>
                                             
                                    <p class="m-0 ml-3">{{$row->name}}</p>
                                   
                                </li>
                              
                               
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane" id="item-links" role="tabpanel" aria-labelledby="profile-tab">
                        
                         <ul class="list-group rounded-0 border-0 select-list ">
                           
                              @foreach($datasets['links']['rows'] as $row)
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
            <a class="btn btn-danger btn-sm ml-auto" href="/admin/pages">Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm ml-1">Save</button>
        </div>
    </form>

      </div>
    </div>
  </div>
</div>
 

@endsection
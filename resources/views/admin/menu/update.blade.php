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
        <form style="height: calc(100% - 166px);" method="post" action="/admin/menu/update/save">
    @else
        <form style="height: calc(100% - 116px);" method="post" action="/admin/menu/update/save">
    @endif
        @csrf
        <input type="hidden" name="menu" value="{{$datasets['menu']['rows']->id}}"/>
        <div class="row m-0 h-100 ">
           
            
            <div class="col-sm-12 col-md-8 p-0 h-100 overflow-auto scrollbox text-dark ">
                <div class="row m-0">
                    <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label>* Name</label>
                        <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name"  value="{{$datasets['menu']['rows']->name}}"/>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your inventory items with the selected attributes.  Example('mens tee shirt large black')</small>
                    </div>
                     <div class="col-sm-12 col-md-6 bg-white border p-5">
                        <label>Description</label>
                        <input class="form-control" type="text" name="description"  value="{{$datasets['menu']['rows']->decription}}"/>
                        <small class="text-muted">The description on what the menu is used for.</small>
                    </div>
                </div>
               
                <div class="row m-0">
                    
                    <div class="col-12 bg-white border p-5">
                        
                            <div class="custom-control custom-checkbox">
                            <input name="active" type="checkbox" class="custom-control-input" id="active" {{$datasets['menu']['rows']->active == true ? 'checked':''}}>
                            <label class="custom-control-label" for="active">Active</label>
                        </div>
                        <small class="text-muted">Pages can be turned on and off by setting the active flag.  If you want to make this page visible to the public set the page as active.</small>
                    </div> 
                </div>
            </div>
            <div class="col-sm-12 col-md-4 p-0 h-100  scrollbox bg-light border-right">

                <ul class="nav tabs border-0 bg-white justify-content-start" id="myTab" role="tablist">

                    
                     <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center active" id="home-tab" data-toggle="tab" href="#links" role="tab" aria-controls="home" aria-selected="true">Links</a>
                    </li>
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center " id="home-tab" data-toggle="tab" href="#permissions" role="tab" aria-controls="home" aria-selected="true">Permissions</a>
                    </li>

                    
                   
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                
               
                    
                    <div class="tab-pane " id="permissions" role="tabpanel" aria-labelledby="home-tab">
                        
                         <ul class="list-group rounded-0 border-0 select-list ">
                           
                                @foreach($datasets['roles']['rows'] as $row)
                                    @if(!is_null($datasets['menu']['rows']->roles()->where('roles.id', $row->id)->first()))
                                        <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center active">
                                            <input name="roles[{{$row->id}}]" type="checkbox" class="col-1" checked/>
                                                    
                                            <p class="m-0 ml-3">{{$row->name}}</p>
                                        
                                        </li>
                                    @else
                                        <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center">
                                            <input name="roles[{{$row->id}}]" type="checkbox" class="col-1"/>
                                                    
                                            <p class="m-0 ml-3">{{$row->name}}</p>
                                        
                                        </li>
                                    @endif
                                @endforeach
                              
                               
                      
                        </ul>
                    </div>
                    <div class="tab-pane active" id="links" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row m-0 p-3">
                            
                            <a href="/admin/menu/item/create?menu={{$datasets['menu']['rows']->id}}" class="btn btn-primary btn-sm ml-auto">New</a>
                        </div>
                         <ul class="list-group rounded-0 border-0 select-list">
                           
                              @foreach($datasets['links']['rows'] as $row)
                                <li class="bg-light  p-0  list-group-item d-flex justify-content-start align-items-center">
                                    <a class="col p-3 text-muted" href="/admin/menu/item/update?menu={{$datasets['menu']['rows']->id}}&link={{$row->id}}">{{$row->name}}</a>

                                    <button type="button" class="btn ml-auto mr-3 text-danger" data-toggle="modal" data-target="#{{$row->name}}">
                                        <i class="fas fa-times"></i>
                                    </button>

                                   
                                    
                                </li>
                              
                                 <div class="modal fade" id="{{$row->name}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog rounded-0" role="document">
                                        <div class="modal-content rounded-0">
                                        <div class="modal-header bg-danger rounded-0">
                                            <h5 class="modal-title text-white" id="exampleModalLongTitle">Delete Menu Link {{$row->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-muted">
                                            By clicking delete you will remove this item forever. If you are sure you want to continue please click delete to delete the record or cancel to cancel the current operation.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <a class="btn btn-danger" href="/admin/menu/item/delete?menu={{$datasets['menu']['rows']->id}}&link={{$row->id}}">Delete</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
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
            
  
 

@endsection
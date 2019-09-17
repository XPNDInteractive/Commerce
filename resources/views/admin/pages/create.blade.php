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
        <form style="height: calc(100% - 166px);" method="post" action="/admin/pages/create/save">
    @else
        <form style="height: calc(100% - 116px);" method="post" action="/admin/pages/create/save">
    @endif
        @csrf
        <div class="row m-0 h-100 ">
           
            
            <div class="col-sm-12 col-md-8 p-0 h-100 scrollbox text-dark " style="oveflow-y:auto; oveflow-x:hidden;">
                <div class="{{ $errors->has('content') ? ' border-danger' : '' }} h-100" style="border: #fff 1px solid;">
                    <style>
.ck-editor__editable {
    min-height: 574px;
    border:none;
    outline:none;
}

div[contenteditable] {
    outline: none;
}
</style>
                    <textarea name="content" id="editor">
                       
                    </textarea>
                </div>
            </div>

              <div class="col-sm-12 col-md-4 p-0 h-100  scrollbox bg-light border-right">

                <ul class="nav tabs border-0 bg-white justify-content-start" id="myTab" role="tablist">
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark  text-center active" id="home-tab" data-toggle="tab" href="#info" role="tab" aria-controls="home" aria-selected="true">Information</a>
                    </li>
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center " id="home-tab" data-toggle="tab" href="#meta" role="tab" aria-controls="home" aria-selected="true">Meta</a>
                    </li>
                 
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center" id="home-tab" data-toggle="tab" href="#permissions" role="tab" aria-controls="home" aria-selected="true">Permissions</a>
                    </li>
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center" id="profile-tab" data-toggle="tab" href="#blocks" role="tab" aria-controls="profile" aria-selected="false">Blocks</a>
                    </li>
                  
                   
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active h-100" id="info" role="tabpanel" aria-labelledby="home-tab">
                        <div class="w-100 p-0">
                            <div class="row m-0">
                                <div class="col-12 bg-white border p-5">
                                    <label>Title</label>
                                    <input class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" name="title"  value="{{old('title')}}"/>
                                     @if ($errors->has('title'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <p class="text-danger">{{ $errors->first('title') }}</p>
                                        </span>
                                    @endif
                                    <small class="text-muted">The page title is the name of the page you are creating</small>
                                </div>
                                <div class="col-12 bg-white border p-5">
                                    <label>Url</label>
                                    <input class="form-control {{ $errors->has('slug') ? ' is-invalid' : '' }}" type="text" name="slug"  value="{{old('slug')}}"/>
                              
                                    @if ($errors->has('slug'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <p class="text-danger">{{ $errors->first('slug') }}</p>
                                        </span>
                                    @endif
                                    <small class="text-muted">The page slug is the url used when accessing your page</small>
                                </div> 
                                <div class="col-12 bg-white border p-5">
                                    <label>Template</label>
                                    <select name="template" class="custom-select rounded-0 {{ $errors->has('template') ? ' is-invalid' : '' }}">
                                       @foreach($templates as $row)
                                        @if($row == "page")
                                            <option selected value="{{$row}}">{{$row}}</option>
                                        @else
                                            <option value="{{$row}}">{{$row}}</option>
                                        @endif
                                       @endforeach
                                    </select>
                              
                                    @if ($errors->has('template'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <p class="text-danger">{{ $errors->first('template') }}</p>
                                        </span>
                                    @endif
                                    <small class="text-muted">The template used for displaying the page content.</small>
                                </div> 
                                
                                 <div class="col-12 bg-white border p-5">
                                
                                    <div class="custom-control custom-checkbox">
                                        <input name="frontpage" type="checkbox" class="custom-control-input" id="frontpage">
                                        <label class="custom-control-label" for="frontpage">Home Page</label>
                                    </div>
                                    <small class="text-muted">Make this page the home page(front page) of your website.  You can make a homepage an admin panel page but the guest permission will be removed by default.</small>
                                </div>
                                 <div class="col-12 bg-white border p-5">
                                   
                                    <div class="custom-control custom-checkbox">
                                        <input name="admin" type="checkbox" class="custom-control-input" id="admin">
                                        <label class="custom-control-label" for="admin">Admin Page</label>
                                    </div>
                                    <small class="text-muted">Make this page an admin panel page.  Be sure to set your page permissions along with read and write access per user permission.</small>
                                </div> 

                                  <div class="col-12 bg-white border p-5">
                                    
                                     <div class="custom-control custom-checkbox">
                                        <input name="active" type="checkbox" class="custom-control-input" id="active" checked>
                                        <label class="custom-control-label" for="active">Active</label>
                                    </div>
                                    <small class="text-muted">Pages can be turned on and off by setting the active flag.  If you want to make this page visible to the public set the page as active.</small>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane h-100" id="meta" role="tabpanel" aria-labelledby="home-tab">
                        <div class="w-100 p-0  bg-light h-100">
                            
                            <div class="row m-0">
                                <div class="col-12 bg-white border p-5">
                                    <label>Description</label>
                                    <textarea class="form-control" name="keywords"></textarea>
                                    <small class="text-muted">This is your page keywords used by search engines to relate keywords with your page</small>
                                </div>
                                <div class="col-12 bg-white border p-5">
                                    <label>Keywords</label>
                                    <textarea class="form-control" name="keywords"></textarea>
                                    <small class="text-muted">This is your page keywords used by search engines to relate keywords with your page</small>
                                </div> 
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="permissions" role="tabpanel" aria-labelledby="home-tab">
                        
                         <ul class="list-group rounded-0 border-0 select-list ">
                           
                              @foreach($datasets['roles']['rows'] as $row)
                                <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center" data-toggle="collapse" data-target="#{{$row->name}}">
                                    <input name="roles[{{$row->id}}]" type="checkbox" class="col-1"/>
                                             
                                    <p class="m-0 ml-3">{{$row->name}}</p>
                                   
                                </li>
                              
                               
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane" id="blocks" role="tabpanel" aria-labelledby="profile-tab">
                         <ul class="list-group rounded-0 border-0 select-list ">
                           
                              @foreach($datasets['blocks']['rows'] as $row)
                                <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center" data-toggle="collapse" data-target="#{{$row->name}}">
                                    <input name="blocks[{{$row->id}}]" type="checkbox" class="col-1"/>
                                             
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
            
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>

<script>

    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
</script>
@endsection
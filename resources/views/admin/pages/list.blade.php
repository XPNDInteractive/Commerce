@extends('admin.base.base')

@section('content')
    

     <div class="row filters m-0">
        <div class="row col-12 col-sm-12 col-md-6 col-lg-3 m-0 gradient-panel border-right-darker p-3 align-items-center justify-content-start">
            <h6 class="m-0">Admin/{{$title}}</h6>
        </div>
        <div class="row col-sm-12 col-md-5 m-0 gradient-panel border-right-darker  p-3 align-items-center justify-content-center">
            <form method="get" class="w-100 h-100 " action="{{$request->fullUrlWithQuery(['search' => $request->input('search') ])}}">
                
                <i class="fas fa-search" style="position:absolute; margin: 12px 0 0 10px; color: #666;"></i>
                <input class="form-control form-control-dark pl-5" type="text" name="search" placeholder="search" value="{{$request->input('search')}}"/>
                
            </form>
        </div>
        
        <div class="row m-0 col gradient-panel  p-3 align-items-center justify-content-center">
            <a class="btn btn-success ml-auto btn-sm" href="/admin/pages/create"><i class="fas fa-plus"></i> New</a>
            <a class="btn btn-info ml-1 btn-sm" href="/admin/products/create"><i class="fas fa-download"></i> Export</a>
            <a class="btn btn-warning ml-1 btn-sm text-white" href="/admin/products/create"><i class="fas fa-upload"></i> Import</a>
            <a class="btn btn-danger btn-sm ml-1 delete-btn d-none" href=""><i class="fas fa-trash-alt"></i> Delete</a>
        </div>
    </div>
      <div class="data-table p-5">
   
       
        <table>
            <thead>
                <tr>
                    <th style="width: 50px;"><input class="checkAll" type="checkbox"/></th>
                    <th>
                        Title
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'title')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'title', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'title' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'title', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='title' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'title', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                     <th>
                       Url
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'Slug')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'Slug' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='Slug' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                   
                   
                    <th> Status
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'active')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'active' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='active' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                    <th>    Front Page
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'is_front_page')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'is_front_page', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'is_front_page' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'is_front_page', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='is_front_page' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'is_front_page', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                     <th>    Admin Page
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'is_admin')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'is_admin', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'is_admin' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'is_admin', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='is_admin' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'is_admin', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                      <th>
                       Description
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'Slug')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'Slug' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='Slug' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                     <th>
                       Keywords
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'Slug')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'Slug' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='Slug' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                      <th>
                       Template
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'Slug')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'Slug' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='Slug' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                      <th>
                         Permissions
                    </th>
                     <th>
                         Author
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'user_id')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'user_id', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'user_id' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'user_id', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='user_id' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'user_id', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                   
                    <th>   Created Date
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'created_at')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'created_at', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'created_at' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'created_at', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='created_at' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'created_at', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>

                     <th>   Updated Date
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'updated_at')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'updated_at', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'updated_at' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'updated_at', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='updated_at' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'updated_at', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                    <th>Actions</th>
                    

                </tr>
            </thead>
            <tbody style="">
                  @foreach($datasets['pages']['rows'] as $row)
                    <tr >
                        <td ><input type="checkbox" name="selected[]={{$row->id}}"/></td>
                        <td >{{$row->title}}</td>
                        <td><a href="{{url('/') . '/' . $row->slug}}">{{url('/') . '/' . $row->slug}}</a></td>
                       
                        <td >{!!$row->active == 1 ? '<span class="badge badge-pill badge-success d-block">Active</span>':'<span class="badge badge-pill badge-danger d-block">Active</span>'!!}</td>
                        <td>{!!$row->is_front_page == 1 ? '<span class="badge badge-pill badge-success d-block">Yes</span>':'<span class="badge badge-pill badge-danger d-block">No</span>'!!}</td>
                        <td >{!!$row->is_admin == 1 ?  '<span class="badge badge-pill badge-success d-block">Yes</span>':'<span class="badge badge-pill badge-danger d-block">No</span>'!!}</td>
                        <td >{{$row->description}}</td>
                        <td >{{$row->Keywords}}</td>
                        <td >{{$row->template}}</td>
                        <td>
                            @foreach($row->roles()->get() as $perm)
                                <span class="badge rounded-0 badge-primary">{{$perm->name}}</span>
                            @endforeach
                        </td>
                        <td >{{$row->user_id}}</td>
                        <td >{{$row->created_at}}</td>
                        <td >{{$row->updated_at}}</td>
                        <td >
                            <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            <button class="btn btn-success btn-sm"><i class="fas fa-save"></i></button>
                        </td>
                    </tr>
                  @endforeach
            <tbody>
        </table>
       
        </div>
              
                   
               
      <div class="modal fade w-100" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl w-100" role="document">
            <div class="modal-content">
                <div class="modal-header bg-darker">
                   <h6 class="m-0">Admin/{{$title}}</h6>
    
              
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body h-100 p-0">
                      
    <form style="height: 100%">
        <div class="row m-0 h-100 ">
            
            <div class="col-sm-12 col-md-8 p-0 h-100 overflow-auto scrollbox text-dark">
                    <div id="editor">
                        <p>This is some sample content.</p>
                    </div>
            </div>

              <div class="col-sm-12 col-md-4 p-0 h-100 overflow-auto scrollbox bg-light border-right">

                <ul class="nav tabs border-0 bg-white justify-content-start" id="myTab" role="tablist">
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark  text-center active" id="home-tab" data-toggle="tab" href="#info" role="tab" aria-controls="home" aria-selected="true">Information</a>
                    </li>
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center " id="home-tab" data-toggle="tab" href="#meta" role="tab" aria-controls="home" aria-selected="true">Meta</a>
                    </li>
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center " id="home-tab" data-toggle="tab" href="#templates" role="tab" aria-controls="home" aria-selected="true">Template</a>
                    </li>
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center" id="home-tab" data-toggle="tab" href="#permissions" role="tab" aria-controls="home" aria-selected="true">Permissions</a>
                    </li>
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center" id="profile-tab" data-toggle="tab" href="#blocks" role="tab" aria-controls="profile" aria-selected="false">Blocks</a>
                    </li>
                  
                   
                </ul>

                <!-- Tab panes -->
                <div class="tab-content ">
                    <div class="tab-pane active h-100" id="info" role="tabpanel" aria-labelledby="home-tab">
                        <div class="w-100 p-0">
                            <div class="row m-0">
                                <div class="col-12 bg-white border p-5">
                                    <label>Title</label>
                                    <input class="form-control" type="text" name="title"  value="{{old('title')}}"/>
                                    <small class="text-muted">The page title is the name of the page you are creating</small>
                                </div>
                                <div class="col-12 bg-white border p-5">
                                    <label>Url</label>
                                    <input class="form-control" type="text" name="slug"  value="{{old('slug')}}"/>
                                    <small class="text-muted">The page slug is the url used when accessing your page</small>
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
                     <div class="tab-pane" id="templates" role="tabpanel" aria-labelledby="home-tab">
                       
                         <ul class="list-group rounded-0 border-0 select-list ">
                           
                              @foreach($datasets['roles']['rows'] as $row)
                                <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center" data-toggle="collapse" data-target="#{{$row->name}}">
                                    <input type="checkbox" class="col-1"/>
                                             
                                    <p class="m-0 ml-3">{{$row->name}}</p>
                                   
                                </li>
                              
                               
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane" id="permissions" role="tabpanel" aria-labelledby="home-tab">
                         <div class="row m-0 w-100">
                            <a href="/admin/roles" class="btn btn-primary btn-sm col">Permissions</a>
                            <a href="/admin/roles/create" class="btn btn-success btn-sm col">Add</a>
                            <a href="/admin/roles/create" class="btn btn-info btn-sm col">Edit</a>
                            <a href="/admin/roles/create" class="btn btn-danger btn-sm col">Delete</a>
                        </div>
                         <ul class="list-group rounded-0 border-0 select-list ">
                           
                              @foreach($datasets['roles']['rows'] as $row)
                                <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center" data-toggle="collapse" data-target="#{{$row->name}}">
                                    <input type="checkbox" class="col-1"/>
                                             
                                    <p class="m-0 ml-3">{{$row->name}}</p>
                                   
                                </li>
                              
                               
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane" id="blocks" role="tabpanel" aria-labelledby="profile-tab">
                         <ul class="list-group rounded-0 border-0 select-list ">
                           
                              @foreach($datasets['blocks']['rows'] as $row)
                                <li class="border-left select-list-item list-group-item d-flex justify-content-start align-items-center" data-toggle="collapse" data-target="#{{$row->name}}">
                                    <input type="checkbox" class="col-1"/>
                                             
                                    <p class="m-0 ml-3">{{$row->name}}</p>
                                   
                                </li>
                              
                               
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
           
          
        </div>
         
       
    </form>
            
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/balloon/ckeditor.js"></script>
<script src="https://example.com/ckfinder/ckfinder.js"></script>
<script>

   BalloonEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    
</script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>   
      
        

@endsection
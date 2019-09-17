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
            <a class="btn btn-success ml-auto btn-sm" href="/admin/media/create"><i class="fas fa-plus"></i> New</a>
            <a class="btn btn-danger btn-sm ml-1 delete-btn d-none" href=""><i class="fas fa-trash-alt"></i> Delete</a>
        </div>
    </div>
    @if(is_null($request->has("display")) || $request->input("display") !== "gallery")
        @if (session()->has('success'))
            <div class="alert alert-success  fade show w-100 rounded-0 m-0" role="alert">
                {{session()->get('success')}}
        
            </div>
            <div class="data-table" style="height: calc(100% - 122px);">
            @else
            <div class="data-table">
        @endif
      
   
       
        <table>
            <thead>
                <tr>
                    <th style="width: 50px;"><input class="checkAll" type="checkbox"/></th>
                    <th> 
                      Image
                      
                    </th>
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
                        Alt
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'alt')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'alt', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'alt' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'alt', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='alt' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'alt', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                    
                   
                    
                     <th>
                       Size
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'size')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'size', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'size' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'size', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='size' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'size', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                   
                   <th>
                       Type
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'type')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'type', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'type' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'type', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='type' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'type', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
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
                  @foreach($datasets['media']['rows'] as $row)
                    <tr >
                        <td ><input type="checkbox" name="selected[]={{$row->id}}"/></td>
                        <td ><img width= "100px" src="{{base64_decode($row->path)}}" alt="" ></td>
                        
                        
                        <td>
                          {{$row->title}}
                        </td>
                        <td>{{$row->alt}}</td>
                       
                        <td>{{$row->size}}</td>
                        <td>{{$row->type}}</td>
                       
                       
                       
                      
                        <td >{{$row->created_at}}</td>
                        <td >{{$row->updated_at}}</td>
                        <td >
                             <a href="/admin/media/update?media={{$row->id}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#{{str_replace(' ','_', $row->title)}}"><i class="fas fa-trash-alt"></i></button>
                            
                            
                        </td>
                    </tr>
                     <div class="modal fade" id="{{str_replace(' ','_', $row->title)}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog rounded-0" role="document">
                            <div class="modal-content rounded-0">
                            <div class="modal-header bg-danger rounded-0">
                                <h5 class="modal-title text-white" id="exampleModalLongTitle">Delete media {{$row->name}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-muted">
                                By clicking delete you will remove this item forever. If you are sure you want to continue please click delete to delete the record or cancel to cancel the current operation.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-danger" href="/admin/media/delete?media={{$row->id}}">Delete</a>
                            </div>
                            </div>
                        </div>
                    </div>
                  @endforeach
            <tbody>
        </table>
       
        </div>
    @else

        <div class="row m-0" style="height: calc(100% - 122px); overflow:auto">
            @foreach($datasets['media']['rows'] as $row)
               <div class="col-3 p-2">
                    <div class="row m-0 align-items-center  border">
                        <div class="p-2">
                            <img class="w-100" src="{{base64_decode($row->path)}}" alt="">
                            <p class="small text-muted m-0 mt-3">{{$row->title}}</p>
                          
                        </div>
                        <div class="col-12 p-0 mt-3 border-top bg-light">
                            <div class="row m-0">
                                <a href="/admin/media/update?media={{$row->id}}" class="btn  btn-sm text-muted"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-sm ml-auto text-muted"  data-toggle="modal" data-target="#{{str_replace(' ','_', $row->title)}}"><i class="fas fa-trash-alt"></i></button>
                                
                            </div>
                        </div>
                    </div>
                    
               </div>
                <div class="modal fade" id="{{str_replace(' ','_', $row->title)}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog rounded-0" role="document">
                            <div class="modal-content rounded-0">
                            <div class="modal-header bg-danger rounded-0">
                                <h5 class="modal-title text-white" id="exampleModalLongTitle">Delete media {{$row->name}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-muted">
                                By clicking delete you will remove this item forever. If you are sure you want to continue please click delete to delete the record or cancel to cancel the current operation.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-danger" href="/admin/media/delete?media={{$row->id}}">Delete</a>
                            </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

    @endif        
               
      
      
        

@endsection
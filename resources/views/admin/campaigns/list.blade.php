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
            <a class="btn btn-success ml-auto btn-sm" href="/admin/products/create"><i class="fas fa-plus"></i> New</a>
            <a class="btn btn-info ml-1 btn-sm" href="/admin/products/create"><i class="fas fa-download"></i> Export</a>
            <a class="btn btn-warning ml-1 btn-sm text-white" href="/admin/products/create"><i class="fas fa-upload"></i> Import</a>
            <a class="btn btn-danger btn-sm ml-1 delete-btn d-none" href=""><i class="fas fa-trash-alt"></i> Delete</a>
        </div>
    </div>
      <div class="data-table">
   
       
        <table>
            <thead>
                <tr>
                    <th style="width: 50px;"><input class="checkAll" type="checkbox"/></th>
                    <th>
                        Name
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'title')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'title', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'title' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'title', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='title' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'title', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                    
                   
                   
                    <th> Description
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'active')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'active' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='active' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                     <th> Start Date/Time
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'active')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'active' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='active' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                     <th> End Date/Time
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'active')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'active' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='active' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                  
                      <th>
                       Status
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'Slug')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'Slug' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='Slug' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
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
                  @foreach($datasets['campaigns']['rows'] as $row)
                    <tr >
                        <td ><input type="checkbox" name="selected[]={{$row->id}}"/></td>
                        <td >{{$row->name}}</td>
                        <td >{{$row->description}}</td>
                        <td >{{$row->start_date}}</td>
                        <td >{{$row->end_date}}</td>
                        
                        <td >{!!$row->active == 1 ? '<span class="badge rounded-0 badge-success d-block">Active</span>':'<span class="badge rounded-0 badge-danger d-block">Inactive</span>'!!}</td>
                       
                       
                      
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
              
                   
               
      
      
        

@endsection
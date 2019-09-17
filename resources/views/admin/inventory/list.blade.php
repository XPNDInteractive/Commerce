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
            <a class="btn btn-success ml-auto btn-sm" href="/admin/inventory/create"><i class="fas fa-plus"></i> New</button>
            <a class="btn btn-info ml-1 btn-sm" href="/admin/inventory/create"><i class="fas fa-download"></i> Export</a>
            <a class="btn btn-warning ml-1 btn-sm text-white" href="/admin/inventory/create"><i class="fas fa-upload"></i> Import</a>
            <a class="btn btn-danger btn-sm ml-1 delete-btn d-none" href=""><i class="fas fa-trash-alt"></i> Delete</a>
        </div>
    </div>
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
                        Name
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'name')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'name', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'name' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'name', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='name' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'name', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                    <th>
                       UPC
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'upc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'upc', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'upc' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'upc', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='upc' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'upc', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                     <th>
                       SKU
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'sku')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'sku', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'sku' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'sku', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='sku' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'sku', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                     <th>
                       MSRP
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'msrp')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'msrp', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'msrp' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'msrp', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='msrp' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'msrp', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                     <th>
                       Price
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'price')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'price', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'price' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'price', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='price' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'price', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>

                     <th>
                       QTY
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'quantity')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'quantity', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'quantity' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'quantity', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='quantity' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'quantity', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                   
                    <th>
                       Avail QTY
                        @if(is_null($request->input('sort')) || $request->input('sort') !== 'available_quantity')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'available_quantity', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'available_quantity' && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'available_quantity', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') =='available_quantity' && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => 'available_quantity', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                    
                    <th>Media</th>
                    @foreach($datasets['inventory']['columns'] as $row)
                          <th>{{$row}}
                            
                          </th>
                    @endforeach
                    
                   
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
                  @foreach($datasets['inventory']['rows'] as $row)
                   
                    <tr >
                        <td ><input type="checkbox" name="selected[]={{$row->id}}"/></td>
                        <td >{{$row->name}}</td>
                        <td >{{$row->upc}}</td>
                        <td >{{$row->sku}}</td>
                        <td >${{$row->msrp}}</td>
                         
                        <td >${{$row->price}}</td>
                        <td >{{$row->quantity}}</td>
                        <td >{{$row->available_quantity}}</td>
                       
                         <td>
                            @foreach($row->media()->get() as $perm)
                                <img style="height: 30px; width: 30px;" src="{{base64_decode($perm->path)}}" alt="...">
                            @endforeach
                        </td>
                        @foreach($datasets['inventory']['columns'] as $col)
                            @php 
                                $matched = false
                            @endphp
                            @foreach($row->attributeValues()->get() as $perm)
                                @if($perm->attributes()->first()->name == $col)
                                    @php $matched = true @endphp
                                    <td>{{$perm->value}}</td>
                                @endif
                            @endforeach
                            @if(!$matched)
                                <td></td>
                            @endif
                        @endforeach
                        <td >{{$row->user_id}}</td>
                        <td >{{$row->created_at}}</td>
                        <td >{{$row->updated_at}}</td>
                        <td >
                            <a href="/admin/inventory/update?inventory={{$row->id}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#{{str_replace(' ','_', $row->name)}}"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                     <div class="modal fade" id="{{str_replace(' ','_', $row->name)}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                                <a class="btn btn-danger" href="/admin/inventory/delete?inventory={{$row->id}}">Delete</a>
                            </div>
                            </div>
                        </div>
                    </div>
                  @endforeach
            <tbody>
        </table>
       
        </div>
              
                   
               
      
      

@endsection
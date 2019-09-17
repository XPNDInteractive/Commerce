@extends('admin.base.base')

@section('content')

    <div class="row m-0 w-100">
        <div class="col-sm-12 col-md-6 col-lg-3 p-0 bg-primary">
            <div class="card rounded-0 align-items-stretch h-100" >
                <div class="card-body row m-0 align-items-center">
                    <div class="row m-0 align-items-center w-100">
                       
                        <h6 class="card-subtitle m-0">Visitors</h6>
                        <h6 class="card-subtitle m-0 ml-auto">22,000</h6>
                    </div>
                    <canvas id="visitorsChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 p-0">
            <div class="card rounded-0 h-100" >
                <div class="card-body row m-0 align-items-center">
                    <div class="row m-0 align-items-center w-100">
                      
                        <h6 class="card-subtitle m-0 ">Sales</h6>
                        <h6 class="card-subtitle m-0 ml-auto ">312,000</h6>
                    </div>
                   
                        <canvas id="salesChart"></canvas>
                     
                </div>
            </div>
        </div>
       <div class="col-sm-12 col-md-6 col-lg-3 p-0">
            <div class="card rounded-0 h-100" >
                <div class="card-body row m-0 align-items-center">
                    <div class="row m-0 align-items-center w-100">
                     
                        <h6 class="card-subtitle m-0 ">Average Sale</h6>
                        <h6 class="card-subtitle m-0 ml-auto ">$82.99</h6>
                    </div>
                    <canvas id="atvChart"></canvas>
                </div>
            </div>
        </div>
         <div class="col-sm-12 col-md-6 col-lg-3 p-0">
            <div class="card rounded-0 h-100" >
                <div class="card-body ">
                    <div class="row m-0 align-items-center">
                      
                        <h6 class="card-subtitle m-0">System</h6>
                        <h6 class="card-subtitle m-0 ml-auto "></h6>
                    </div>

                     <div class="row m-0 align-items-center mt-4">
                        <label style="font-size: 0.8rem; color: #fff;" class="card-subtitle m-0">OS: {{PHP_OS}}</label>
                    </div>
                   

                    <div class="row m-0 align-items-center">
                        
                        <label style="font-size: 0.8rem; color: #fff;" class="card-subtitle m-0">HOST: {{$_SERVER['SERVER_ADDR'] == "::1" ? "localhost:". $_SERVER['SERVER_PORT']:$_SERVER['SERVER_ADDR'].":".$_SERVER['SERVER_PORT']}}</label>
                    </div>

                   

                    <div class="row m-0 align-items-center">
                      
                        <label style="font-size: 0.8rem; color: #fff;" class="card-subtitle m-0 ">PROTOCOL: {{$_SERVER["SERVER_PROTOCOL"]}}</label>
                    </div>

                     <div class="row m-0 align-items-center">
                      
                        <label style="font-size: 0.8rem; color: #fff;" class="card-subtitle m-0 ">SERVER: {{$_SERVER["SERVER_SOFTWARE"]}}</label>
                    </div>

                     <div class="row m-0 align-items-center">
                      
                        <label style="font-size: 0.8rem; color: #fff;" class="card-subtitle m-0 ">DATABASE: {{$_SERVER["DB_CONNECTION"]}}</label>
                    </div>

                   


                
                   
                </div>
            </div>
        </div>
    </div>
    <div class="row m-0">
        <div class="col-sm-12 col-md-6 p-0 bg-white">
            <div class="h-100 border p-5">
                <div class="row m-0 mb-4 align-items-center">
                    <h6 class="text-muted"><i class="fas fa-money-bill-wave text-primary"></i> Daily Orders</h6>
                    
                    
                </div>
                <canvas id="salesChart2"></canvas>
            </div>
           
        </div>
        <div class="col-sm-12 col-md-6 p-0 bg-white">
          <div class=" border p-5 h-100">
                <div class="row m-0 mb-4 align-items-center">
                    <h6 class="text-muted"><i class="fas fa-money-bill-wave text-primary"></i> Recent Orders</h6>
                    
                    <a href="/admin/products" class="btn btn-primary btn-sm ml-auto">Orders</a>
                </div>
                
                <div class="data-table">
                    <table class="table">
                        <thead>
                            <tr>
                               
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
                                SKU
                                    @if(is_null($request->input('sort')) || $request->input('sort') !== 'Slug')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'Slug' && $request->input('order') == 'desc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') =='Slug' && $request->input('order') == 'asc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                                    @endif
                                </th>
                                <th>
                                Price
                                    @if(is_null($request->input('sort')) || $request->input('sort') !== 'Slug')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'Slug' && $request->input('order') == 'desc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') =='Slug' && $request->input('order') == 'asc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                                    @endif
                                </th>
                            
                            
                                <th>Categories
                                    @if(is_null($request->input('sort')) || $request->input('sort') !== 'active')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'active' && $request->input('order') == 'desc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') =='active' && $request->input('order') == 'asc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody style="">
                            @foreach($datasets['products']['rows'] as $row)
                                <tr >
                                    
                                    <td >{{$row->name}}</td>
                                    <td >{{$row->sku}}</td>
                                    <td >${{$row->price}}</td>
                                    <td>
                                        @foreach($row->categories()->get() as $perm)
                                            <span class="badge rounded-0 badge-primary">{{$perm->name}}</span>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        <tbody>
                    </table>
                </div>
            </div>
               
           
        </div>
    </div>
     <div class="row m-0">
         <div class="col-sm-12 col-md-6 p-0 bg-white">
            <div class="h-100 border p-5">
                <div class="row m-0 mb-4 align-items-center">
                    <h6 class="text-muted"><i class="fas fa-money-bill-wave text-primary"></i> Daily Sales</h6>
                    
                    
                </div>
                <canvas id="salesChart3"></canvas>
            </div>
           
        </div>
        <div class="col-sm-12 col-md-6 p-0 bg-white">
            <div class=" border p-5">
                <div class="row m-0 mb-4 align-items-center">
                    <h6 class="text-muted"><i class="fas fa-money-bill-wave text-primary"></i> Best Selling Products</h6>
                   
                    <a href="/admin/products" class="btn btn-primary btn-sm ml-auto">Products</a>
                </div>
                
                <div class="data-table">
                    <table class="table">
                        <thead>
                            <tr>
                               
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
                                SKU
                                    @if(is_null($request->input('sort')) || $request->input('sort') !== 'Slug')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'Slug' && $request->input('order') == 'desc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') =='Slug' && $request->input('order') == 'asc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                                    @endif
                                </th>
                                <th>
                                Price
                                    @if(is_null($request->input('sort')) || $request->input('sort') !== 'Slug')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'Slug' && $request->input('order') == 'desc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') =='Slug' && $request->input('order') == 'asc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                                    @endif
                                </th>
                            
                            
                                <th>Categories
                                    @if(is_null($request->input('sort')) || $request->input('sort') !== 'active')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'active' && $request->input('order') == 'desc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') =='active' && $request->input('order') == 'asc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody style="">
                            @foreach($datasets['products']['rows'] as $row)
                                <tr >
                                 
                                    <td >{{$row->name}}</td>
                                    <td >{{$row->sku}}</td>
                                    <td >${{$row->price}}</td>
                                    <td>
                                        @foreach($row->categories()->get() as $perm)
                                            <span class="badge rounded-0 badge-primary">{{$perm->name}}</span>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        <tbody>
                    </table>
                </div>
            </div>
           
        </div>
      
    </div>
    <div class="row m-0">
        
    </div>
     <div class="row m-0">
        <div class="col-sm-12 col-md-12 p-0 bg-white">
            <div class=" border p-5">
                <div class="row m-0 mb-4 align-items-center">
                    <h6 class="text-muted"><i class="fas fa-money-bill-wave text-primary"></i> Best Selling Products</h6>
                    <a href="/admin/products" class="btn btn-primary btn-sm ml-auto">Add</a>
                    <a href="/admin/products" class="btn btn-primary btn-sm ml-1">Go to</a>
                </div>
                
                <div class="data-table">
                    <table class="table">
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
                                SKU
                                    @if(is_null($request->input('sort')) || $request->input('sort') !== 'Slug')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'Slug' && $request->input('order') == 'desc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') =='Slug' && $request->input('order') == 'asc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                                    @endif
                                </th>
                                <th>
                                Price
                                    @if(is_null($request->input('sort')) || $request->input('sort') !== 'Slug')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'Slug' && $request->input('order') == 'desc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') =='Slug' && $request->input('order') == 'asc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'Slug', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                                    @endif
                                </th>
                            
                            
                                <th>Categories
                                    @if(is_null($request->input('sort')) || $request->input('sort') !== 'active')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') == 'active' && $request->input('order') == 'desc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                                    @elseif(!is_null($request->input('sort')) && $request->input('sort') =='active' && $request->input('order') == 'asc')
                                        <a href="{{$request->fullUrlWithQuery(['sort' => 'active', 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody style="">
                            @foreach($datasets['products']['rows'] as $row)
                                <tr >
                                    <td ><input type="checkbox" name="selected[]={{$row->id}}"/></td>
                                    <td >{{$row->name}}</td>
                                    <td >{{$row->sku}}</td>
                                    <td >${{$row->price}}</td>
                                    <td>
                                        @foreach($row->categories()->get() as $perm)
                                            <span class="badge rounded-0 badge-primary">{{$perm->name}}</span>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        <tbody>
                    </table>
                </div>
            </div>
           
        </div>
      
    </div>
    <div class="timeline">
  <div class="container left">
    <div class="content">
      <h2>2017</h2>
      <p>Lorem ipsum..</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2016</h2>
      <p>Lorem ipsum..</p>
    </div>
  </div>
</div>

@endsection
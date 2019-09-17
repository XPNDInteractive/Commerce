<div class="table-responsive">
    <table class="table table-striped">
    
        <thead>
          
            <th>
                Name 
                @if(is_null($request->input('sort')) || $request->input('sort') !== $column['name'])
                    <a href="{{$request->fullUrlWithQuery(['sort' => $column['name'], 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                @elseif(!is_null($request->input('sort')) && $request->input('sort') == $column['name'] && $request->input('order') == 'desc')
                    <a href="{{$request->fullUrlWithQuery(['sort' => $column['name'], 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                @elseif(!is_null($request->input('sort')) && $request->input('sort') == $column['name'] && $request->input('order') == 'asc')
                    <a href="{{$request->fullUrlWithQuery(['sort' => $column['name'], 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                @endif
            </th>

             <th>
                Category 
                @if(is_null($request->input('sort')) || $request->input('sort') !== $column['name'])
                    <a href="{{$request->fullUrlWithQuery(['sort' => $column['name'], 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                @elseif(!is_null($request->input('sort')) && $request->input('sort') == $column['name'] && $request->input('order') == 'desc')
                    <a href="{{$request->fullUrlWithQuery(['sort' => $column['name'], 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                @elseif(!is_null($request->input('sort')) && $request->input('sort') == $column['name'] && $request->input('order') == 'asc')
                    <a href="{{$request->fullUrlWithQuery(['sort' => $column['name'], 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                @endif
            </th>
        
        </thead>
        <tbody>
            @foreach($datasets['list']['rows'] as $item)
                <tr>
                    @foreach($datasets['list']['columns'] as $column)
                        @php  
                            $name = $column['name'];
                           
                        @endphp

                        @if($name !== 'id')
                            @if($column['type'] == 'boolean')
                                <td>{{$item->$name == 1 ? "Yes":""}}</td>
                            @elseif($name)
                            @else
                                <td>{{$item->$name}}</td>
                              
                            @endif
                        
                        @endif
                    @endforeach
                </tr>
            @endforeach
        
        </tbody>
    </table>
</div>
 <div class="table-responsive">
    <table class="table table-striped">
    
        <thead>
          
            @if(isset($datasets['list']['columns']))
                @foreach($datasets['list']['columns'] as $column)
                    @if($column['name'] !== 'id')
                    <th>
                        {{ucwords(str_replace('_', ' ', $column['name']))}} 
                        @if(is_null($request->input('sort')) || $request->input('sort') !== $column['name'])
                            <a href="{{$request->fullUrlWithQuery(['sort' => $column['name'], 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == $column['name'] && $request->input('order') == 'desc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => $column['name'], 'order'=>'asc'])}}" class="btn btn-sm"><i class="fas fa-sort-up"></i></a>
                        @elseif(!is_null($request->input('sort')) && $request->input('sort') == $column['name'] && $request->input('order') == 'asc')
                            <a href="{{$request->fullUrlWithQuery(['sort' => $column['name'], 'order'=>'desc'])}}" class="btn btn-sm"><i class="fas fa-sort-down"></i></a>
                        @endif
                    </th>
                    @endif
                @endforeach
            @endif
        
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
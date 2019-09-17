        <div class="row m-0">
        
        <div class="col-12">
             <ul class="list-group rounded-0">
             @foreach($datasets['list']['rows'] as $item)
                
               
                    <a class="list-group-item rounded-0 d-flex" href="#">
                        <div class="col p-0">
                            {{$item->name}} 
                       </div>
                         <div class="col p-0">
                            {{$item->parent_id}} 
                       </div>
                       <div class="col p-0">
                            {{$item->user_id}} 
                       </div>
                      <div class="col p-0">
                            {{$item->active == 1  ? "Active":"Inactive"}} 
                       </div>
                    </a>
        

            @endforeach
            </ul>
        </div>
       
          
       </div>
       

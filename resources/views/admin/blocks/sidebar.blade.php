<div class="sidebar scrollbox-dark d-none">
    <ul class="nav flex-column">
        @if(!is_null($menu::where('name', 'admin menu')->first()))

        @foreach ($menu::where('name', 'admin menu')->first()->menuItems()->whereNull('menu_items.parent_id')->get() as $menuItem)
            <li class="nav-item  d-flex flex-wrap" >
               
                <a class="nav-link col" href="{{url($menuItem->path)}}"> {{$menuItem->name}}</a>
               
               

                @if(!is_null($menuItem->children()->first()))
                 <button class="btn collapsed" data-toggle="collapse" data-target="#{{$menuItem->name}}"><i class="fas fa-angle-down d-none"></i><i class="fas fa-angle-up "></i></button>
                 <ul class="nav flex-column popout collapse sidebar-collapse show w-100" id="{{$menuItem->name}}">
                    @foreach($menuItem->children()->get() as $kid)
                    <li class="nav-item">
                        <a class="nav-link" href="{{url($kid->path) ."/?show-navbar=false"}}"> {{$kid->name}}</a>
                    </li>
                    @endforeach
                 </ul>
                 @endif
            </li>
        @endforeach
        
        @endif
    </ul>
</div>
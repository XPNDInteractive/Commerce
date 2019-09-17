@include('admin.base.header')

@if(isset($blocks['admin navbar']) && $blocks['admin navbar']['active'] == true)
    @include("admin.blocks.".$blocks['admin navbar']['view'])

    <div class="row m-0 page p-0">
        @if(isset($blocks['admin sidebar']) && $blocks['admin sidebar']['active'] == true)
            @include("admin.blocks.".$blocks['admin sidebar']['view'])
        @endif
        <div class="col content p-0">
            @yield('content')
        </div>
    </div>

@else
    <div class="row m-0 page page-fill p-0">
        @if(isset($blocks['admin sidebar']) && $blocks['admin sidebar']['active'] == true)
            @include($blocks['admin sidebar']['view'])
        @endif
        <div class="col content p-0">
            
            @yield('content')
        </div>
    </div>
@endif

@include('admin.base.footer')


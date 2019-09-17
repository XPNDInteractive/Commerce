@extends('admin.base.base')

@section('content')
    
    <div class="">
        
        <div class="row filters m-0">
            <div class="row col-12 col-sm-12 col-md-6 col-lg-3 m-0 bg-white border p-5 align-items-center justify-content-center">
                <h6 class="m-0">Admin/{{$title}}</h6>
            </div>
            <div class="row col-12 col-sm-12 col-md-6 col-lg-4 m-0 bg-white border p-5 align-items-center justify-content-center">
                <form method="get" class="form-inline" action="{{$url}}">
                    <input class="form-control" type="text" name="search" placeholder="search" value="{{$request->input('search')}}"/>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                </form>
            </div>
           
            <div class="row m-0 col bg-white border p-5 align-items-center justify-content-center">
                 @if(isset($blocks['admin toolbar']) && $blocks['admin toolbar']['active'] == true)
                    @include("admin.blocks." . $blocks['admin toolbar']['view'])
                 @endif

                @if(isset($blocks['categories toolbar']) && $blocks['categories toolbar']['active'] == true)
                    @include("admin.blocks." . $blocks['categories toolbar']['view'])
                 @endif

                 @if(isset($blocks['pages toolbar']) && $blocks['pages toolbar']['active'] == true)
                    @include("admin.blocks." . $blocks['pages toolbar']['view'])
                 @endif

                @if(isset($blocks['products toolbar']) && $blocks['products toolbar']['active'] == true)
                    @include("admin.blocks." . $blocks['products toolbar']['view'])
                 @endif
            </div>
        </div>
        <div class="bg-white p-5 border">
        @if(isset($blocks['page list']) && $blocks['page list']['active'] == true)
            @include("admin.blocks." . $blocks['page list']['view'])
        @endif

        @if(isset($blocks['product list']) && $blocks['product list']['active'] == true)
            @include("admin.blocks." . $blocks['product list']['view'])
        @endif

         @if(isset($blocks['categories list']) && $blocks['categories list']['active'] == true)
            @include("admin.blocks." . $blocks['categories list']['view'])
        @endif

        @if(isset($blocks['attributes list']) && $blocks['attributes list']['active'] == true)
            @include("admin.blocks." . $blocks['attributes list']['view'])
        @endif

        
        @if(isset($blocks['filters list']) && $blocks['filters list']['active'] == true)
            @include("admin.blocks." . $blocks['filters list']['view'])
        @endif

        @if(isset($blocks['blocks list']) && $blocks['blocks list']['active'] == true)
            @include("admin.blocks." . $blocks['blocks list']['view'])
        @endif

        @if(isset($blocks['menu list']) && $blocks['menu list']['active'] == true)
            @include("admin.blocks." . $blocks['menu list']['view'])
        @endif

        @if(isset($blocks['users list']) && $blocks['users list']['active'] == true)
            @include("admin.blocks." . $blocks['users list']['view'])
        @endif

        
        @if(isset($blocks['roles list']) && $blocks['roles list']['active'] == true)
            @include("admin.blocks." . $blocks['roles list']['view'])
        @endif

        @if(isset($blocks['sales list']) && $blocks['sales list']['active'] == true)
            @include("admin.blocks." . $blocks['sales list']['view'])
        @endif

        
        @if(isset($blocks['orders list']) && $blocks['orders list']['active'] == true)
            @include("admin.blocks." . $blocks['orders list']['view'])
        @endif

        @if(isset($blocks['order status list']) && $blocks['order status list']['active'] == true)
            @include("admin.blocks." . $blocks['order status list']['view'])
        @endif

         @if(isset($blocks['payment status list']) && $blocks['payment status list']['active'] == true)
            @include("admin.blocks." . $blocks['payment status list']['view'])
        @endif
        </div>
   </div>

@endsection
@extends('admin.base.base')

@section('content')
    
 
        <div class="row m-0">
            <div class="row col-12 col-sm-12 col-md-6 col-lg-3 m-0 bg-white border p-5 align-items-center justify-content-center">
                <h6 class="m-0">Admin/{{$title}}</h6>
            </div>
            <div class="col bg-white border p-5">
                <a class="btn btn-primary" href="{{url()->previous()}}">Back</a>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-12 bg-white border p-5">
                <form method = "post" action="{{$blocks['create']['action']}}">
                    <div class="row m-0">
                        <div class="col-sm-12 col-md-6 border-right pr-5">
                            <h6>Page Details</h6>
                            @if(isset($blocks['create']) && $blocks['create']['active'] == true)
                                @include('admin.blocks.'.$blocks['create']['view'])
                            @endif
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h6>Page Blocks</h6>
                            @if(isset($blocks['blocks list']) && $blocks['blocks list']['active'] == true)
                                @include("admin.blocks." . $blocks['blocks list']['view'])
                            @endif
                            <h6 class="mt-5">Page Permissions</h6>
                             @if(isset($blocks['roles list']) && $blocks['roles list']['active'] == true)
                                @include("admin.blocks." . $blocks['roles list']['view'])
                            @endif
                        </div>
                    </div>
                    <div class="row m-0">
                        <button type='submit' class="btn btn-primary ml-auto">Save</button>
                    </div>
                </form>
            </div>
        </div>
        
   

@endsection
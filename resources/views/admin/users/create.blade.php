@extends('admin.base.base')

@section('content')

    <div class="row filters m-0">
        <div class="row col-12 col-sm-12 col-md-6 col-lg-3 m-0 bg-white border p-3 align-items-center justify-content-center">
            <h6 class="m-0">Admin/{{$title}}</h6>
        </div>
        <div class="col bg-white border p-3"></div>
    </div>
    <div class="row m-0">
        <div class="col-sm-12 col-md-8 p-5 border bg-white">
            <form>
                <div class="form-group">
                    <label>Page Title</label>
                    <input class="form-control" type="text" name="title" placeholder="page title" value="{{old('title')}}"/>
                </div>
                <div class="form-group mt-4">
                    <label>Page Slug</label>
                    <input class="form-control" type="text" name="slug" placeholder="page slug" value="{{old('slug')}}"/>
                </div>
                 <div class="form-group mt-4">
                    <label>Page Meta Description</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label>Page Meta Keywords</label>
                    <textarea class="form-control" name="keywords"></textarea>
                </div>
                
                
            </form>
        </div>
        <div class="col-sm-12 col-md-4 bg-white border p-5">
            <h6>Page Permissions</h6>
            <table>
               
                <tbody>
                    <tr>
                        <td style="width: 50px;" ><input type="checkbox"/></td>
                        <td>Name</td>
                    </tr>
                    <tr>
                        <td style="width: 50px;" ><input type="checkbox"/></td>
                        <td>Name</td>
                    </tr>
                    <tr>
                        <td style="width: 50px;" ><input type="checkbox"/></td>
                        <td>Name</td>
                    </tr>
                    <tr>
                        <td style="width: 50px;" ><input type="checkbox"/></td>
                        <td>Name</td>
                    </tr>
                  
                </tbody>
            </table>
        </div>
    </div>
@endsection
@extends('admin.base.base')

@section('content')

    <div class="row filters m-0">
        <div class="row col-12 col-sm-12 col-md-6 col-lg-3 m-0 gradient-panel border-right-darker p-3 align-items-center justify-content-start">
            <h6 class="m-0">Admin/{{$title}}</h6>
        </div>
        <div class="col gradient-panel border-right-darker p-3"></div>
    </div>
     @if (count($errors->all()) !== 0)
        <div class="alert alert-danger  fade show w-100 rounded-0 m-0" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
     
        </div>
    @endif
    @if (count($errors->all()) !== 0)
        <form style="height: calc(100% - 166px);" method="post" action="/admin/media/update/save" enctype="multipart/form-data">
    @else
        <form style="height: calc(100% - 116px);" method="post" action="/admin/media/update/save" enctype="multipart/form-data">
    @endif
        @csrf
        <div class="row m-0 h-100 ">
           
            <input type="hidden" name="media" value="{{$request->input('media')}}"/>
            <div class="col-sm-12 col-md-8 p-0 h-100 overflow-auto scrollbox text-dark ">
                <div class="row m-0">
                    <div class="col-sm-12 col-md-12 bg-white border p-5">
                        <label>* Title</label>
                        <input class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" name="title"  value="{{is_null(old('title')) ? $datasets['media']['rows']->title:old('title')}}"/>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback d-block" role="alert">
                                <p class="text-danger">{{ $errors->first('title') }}</p>
                            </span>
                        @endif
                        <small class="text-muted">Its best to name your inventory items with the selected attributes.  Example('mens tee shirt large black')</small>
                    </div>
                     <div class="col-sm-12 col-md-12 bg-white border p-5">
                        <label>Alt</label>
                        <input class="form-control" type="text" name="alt"  value="{{is_null(old('alt')) ? $datasets['media']['rows']->alt:old('alt')}}"/>
                        <small class="text-muted">The description on what the media is used for.</small>
                    </div>
                </div>
               
              
            </div>
            <div class="col-sm-12 col-md-4 p-0 h-100  scrollbox bg-light border-right">

                <ul class="nav tabs border-0 bg-white justify-content-start" id="myTab" role="tablist">

                    
                    <li class="nav-item col p-0">
                        <a class="nav-link rounded-0 border text-dark text-center active" id="home-tab" data-toggle="tab" href="#permissions" role="tab" aria-controls="home" aria-selected="true">Media</a>
                    </li>

                   
                    
                   
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                
               
                    
                    <div class="tab-pane active p-3" id="permissions" role="tabpanel" aria-labelledby="home-tab">
                        <div style=" border: #eee 3px dashed; padding: 3rem; " class="placeholder row m-0 justify-content-center flex-column align-items-center">
                           
                            <img class="img w-100" src="{{base64_decode($datasets['media']['rows']->path)}}"/>
                            
                            <script>
                            function readURL(input) {
                                
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();

                                        reader.onload = function(e) {
                                            $('img.img').attr('src', e.target.result);
                                            $('.placeholder i').hide();
                                        }

                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }
                            </script>
                        </div>
                    </div>
                   
                </div>
            </div>
           
          
        </div>

         
     
           

         
        <div class="row m-0 bg-white border-top p-3">
            <a class="btn btn-danger btn-sm ml-auto" href="/admin/media">Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm ml-1">Save</button>
        </div>
    </form>
    

@endsection
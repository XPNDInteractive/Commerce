@extends('site.base')

@section('content')
    <section>
         <div class="bottom">
            <div class="container-fluid">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-none d-md-flex row m-0 justify-content-center align-items-center">
                            <h6 class="m-0">Purchase any polo shirt and get the next one 50% off.</h6>
                            <small>Use coupon code: <span>POLO50</span> and save! <a href="">Learn More</a></small>
                        </div>
                        <div class="d-flex d-md-none row m-0 justify-content-center align-items-center">
                            <h6 class="m-0">POLO SALE 50% OFF WITH COUPON CODE: <span style="color: #0082cc">POLO50</span> </h6>
                           
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row m-0 justify-content-center align-items-center">
                            <h6 class="m-0">GET FREE SHIPPING ON ORDER OVER <span style="color: #0082cc">$49</span></h6>
                        </div>
                    </div>
                    
                </div>
                
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </a>
                </div>
            </div>
        </div>
       
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               
                <div class="carousel-item active">
                    <img src="{{url('/') . '/storage/media/p1.jpg'}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{url('/') . '/storage/media/P2B.jpg'}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item ">
                    <video class="w-100 h-100" src="{{url('/') . '/storage/media/P3_video.mp4'}}" loop autoplay muted></video>
                </div>
               
            </div>
        </div>
        <div class="featured container">
            <div class="row m-0 p-3 mt-4">
                
                <h6 class="m-0 w-100">FEATURED</h6>
                <p  class="m-0 w-100 small">Some of our best items picked for your shopping convience</p>
            </div>
        
            <div class='row m-0'> 
                @foreach($datasets['featured_products']['rows']->products()->limit(4)->get() as $product)
                    <div class="col-6 col-md-3 p-0">
                        <div class="product">
                            @if(!is_null($product->media()->first()))
                            <img src="{{base64_decode($product->media()->first()->path)}}"/>
                            @endif
                            <div class="row thumbs">
                                @foreach($product->media()->get() as $media)
                                    <div class="col p-0">
                                        @if(!is_null($media))
                                        <img src="{{base64_decode($media->path)}}"/>
                                        @endif
                                    </div>

                                @endforeach
                            </div>
                           
                            <h6 class="m-0">{{$product->name}}</h6>
                            <p>{{$product->description}}</p>
                            <p>${{$product->price}}</p>
                        </div>
                    </div>        
                @endforeach
            </div>
        </div>
   
    <div class="row m-0" style="height: 700px; overflow:hidden;">
        <div class="col-sm-12 col-md-6 p-0">
            <video style="position:relative; top: -220px;"  class="w-100 h-100" src="{{url('/') . '/storage/media/women.mov'}}" loop autoplay muted></video>
        </div>
        <div class="col-sm-12 col-md-6 p-0">
            <video style="position:relative; top: -220px;"  class="w-100 h-100" src="{{url('/') . '/storage/media/men.mov'}}" loop autoplay muted></video>
        </div>
    </div>
    
   
     <div class="featured container">
            <div class="row m-0 p-3 mt-4">
                
                <h6 class="m-0 w-100">Popular</h6>
                <p  class="m-0 w-100 small">Some of our best items picked for your shopping convience</p>
            </div>
        
            <div class='row m-0'> 
                @foreach($datasets['featured_products']['rows']->products()->limit(4)->get() as $product)
                    <div class="col-6 col-md-3 p-0">
                        <div class="product">
                            @if(!is_null($product->media()->first()))
                            <img src="{{base64_decode($product->media()->first()->path)}}"/>
                            @endif
                            <div class="row thumbs">
                                @foreach($product->media()->get() as $media)
                                    <div class="col p-0">
                                        @if(!is_null($media))
                                        <img src="{{base64_decode($media->path)}}"/>
                                        @endif
                                    </div>

                                @endforeach
                            </div>
                         
                            <h6 class="m-0">{{$product->name}}</h6>
                            <p>{{$product->description}}</p>
                            <p>${{$product->price}}</p>
                        </div>
                    </div>        
                @endforeach
            </div>
        </div>
    </div>
    
     <div class="featured container">
            <div class="row m-0 p-3 mt-4">
                
                <h6 class="m-0 w-100">On Sale Now</h6>
                <p  class="m-0 w-100 small">Some of our best items picked for your shopping convience</p>
            </div>
        
            <div class='row m-0'> 
                @foreach($datasets['featured_products']['rows']->products()->limit(4)->get() as $product)
                    <div class="col-6 col-md-3 p-0">
                        <div class="product">
                           @if(!is_null($product->media()->first()))
                            <img src="{{base64_decode($product->media()->first()->path)}}"/>
                            @endif
                            <div class="row thumbs">
                                @foreach($product->media()->get() as $media)
                                    <div class="col p-0">

                                         @if(!is_null($media))
                                        <img src="{{base64_decode($media->path)}}"/>
                                        @endif
                                    </div>

                                @endforeach
                            </div>
                           
                            <h6 class="m-0">{{$product->name}}</h6>
                            <p>{{$product->description}}</p>
                            <p>${{$product->price}}</p>
                        </div>
                    </div>        
                @endforeach
            </div>
        </div>
    </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://cdn.shopify.com/s/files/1/0097/4282/files/12.31_heating_sale_hp_banner_desktop_1600x.progressive.png.jpg?v=154628447" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.shopify.com/s/files/1/0097/4282/files/1.3_70_sale_desktop_1600x.progressive.png.jpg?v=1546471771" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://content.nike.com/content/dam/one-nike/en_us/season-2018-ho/Home/1226_NA/AirMax_HP_p1_d.jpg.transform/full-screen/AirMax_HP_p1_d.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    
    
     <div class="categories">
          

            <div class="row m-0 mt-5 p-0 w-100 justify-content-center text-left">
                <div class="col-sm-12 col-md-9 p-0">
                    <div class="row justify-content-center p-0 m-0 text-center text-md-left">
                     @if(!is_null($menu::where('name', 'categories menu')->first()))
                        @foreach($menu::where('name', 'categories menu')->first()->menuItems()->whereNull('menu_item_id')->get() as $categories)
                        <div class="col-6 col-sm-2 py-5">
                          <h6 class="w-100">{{$categories->name}}</h6>
                            <ul class="nav flex-column">

                                @foreach($categories->children()->get() as $child)
                                  
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{$child->path}}">{{$child->name}}</a>
                                    </li>
                                @endforeach
                               
                            
                               
                                
                            </ul>
                        </div>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection







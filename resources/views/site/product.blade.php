@extends('site.base')

@section('content')
    <section>
         <div class="bottom">
            <div class="container-fluid">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row m-0 justify-content-center align-items-center">
                                <h6 class="m-0">Purchase any polo shirt and get the next one 50% off.</h6>
                                <small>Use coupon code: <span>POLO50</span> and save! <a href="">Learn More</a></small>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row m-0 justify-content-center align-items-center">
                                <h6 class="m-0">Purchase any polo shirt and get the next one 50% off.</h6>
                            </div>
                        </div>
                        
                    </div>
                    
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        @php $vcount = 0; @endphp
      
      
        <div class="row m-0 mt-3">
          
          
             @foreach ($datasets['options']['rows'] as $color => $option)
            
            
            <div class="col-sm-12 col-md-7 variant {{'variant-color-'. str_replace(' ', '-', $color)}} {{isset($option['default']) && $option['default'] == true ? '':'d-none'}}">
            
                <div class="row m-0">
                    <div class="col-12 col-md-2" style="padding-top: 5%;">
                        <div class="row m-0">
                            <div class="col-12 p-0" >
                                <img class="w-100  p-0 product-thumbnail-images" data-color = "{{str_replace(' ', '-', $color)}}" src="{{$option['image']}}"/>
                            </div>
                            @foreach($option['images'] as $media)
                                <div class="col-12 p-0" >
                                    <img class="w-100 p-2 product-thumbnail-images" data-color = "{{str_replace(' ', '-', $color)}}" src="{{base64_decode($media->path)}}"/>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-none d-md-block col-10">
                        <div class="col-12 p-0" >
                            <img class="w-100 p-2 product-image" data-color="{{str_replace(' ', '-', $color)}}" src="{{$option['image']}}"/>
                        </div>
                    </div>
                   
                </div>
            </div>
            @endforeach
            <div class="col-sm-12 col-md-4 product-side mt-md-5 pt-md-5">
              
                <div class="row m-0 mt-5  px-3 justify-content-center justify-content-md-start ">
                    <p style="color: #222; font-size: 0.8rem; font-weight: 600; margin:0;" class="m-0 p-0 col-12 text-center text-md-left">Available Colors</p>
                    @foreach ($datasets['options']['rows'] as $color => $option)
                        <img class="w-100 h-100 col-2 p-0 p-1 variant-color-selector" data-color = "{{str_replace(' ', '-', $color)}}" src="{{$option['image']}}"/>
                    @endforeach
                </div>
              
                 @if($datasets['product']['rows']->variants()->count() > 0)
            
                    @foreach ($datasets['options']['rows'] as $color => $option)
                        
                        <div class="row m-0 mt-4 px-3 pb-4 justify-content-center justify-content-md-start align-items-center variant {{'variant-color-'.str_replace(' ', '-', $color)}} {{isset($option['default']) && $option['default'] == 1 
                         ? '':'d-none'}}">
                        
                            <p style="color: #222; font-size: 0.8rem; font-weight: 600; margin:0;" class="m-0 p-0 col-12 mb-1 text-center text-md-left">Available Sizes</p>
                                @foreach ($option['sizes'] as $size => $price)
                                    <div style="box-shadow:none;border: #333 1px solid; color: #333; font-size: 0.8rem; text-transform:uppercase; padding:0.5rem 1rem;" data-price="{{$price}}" class="btn btn-sm ml-1 variant-size-selector">{{$size}}</div>
                                @endforeach
                        
                          
                            <button style="border: #333 1px solid; color: #333; font-size: 0.8rem; text-transform:uppercase;padding:0.5rem 1rem;" class="btn btn-sm ml-1" data-toggle="collapse" data-target="#sizechart">SIZE CHART</button>
                            <div class="collapse mt-2 text-muted w-100 p-1" id="sizechart">
                                @if(!is_null($datasets['product']['rows']->sizes()->first()))
                                <table class="table table-bordered table-sm text-center">
                                    <thead>
                                        <tr>
                                            @foreach($datasets['product']['rows']->sizes()->first()->columns()->get() as $column)
                                                <th>{{$column->name}}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @for($i = 0; $i < $datasets['product']['rows']->sizes()->first()->rows()->distinct('size_row_id')->count('size_row_id'); $i++)
                                            <tr>
                                                 @foreach($datasets['product']['rows']->sizes()->first()->columns()->orderBy('id')->get() as $k => $col)
                                                    <td>
                                                        {{$datasets['product']['rows']->sizes()->first()->rows()->where('size_row_id', $i)->where('size_column_id', $col->id)->first()->value}}
                                                    </td>
                                                @endforeach
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif
                 <div class="row m-0 w-100 px-3 mt-0 mb-4">
                     <p style="color: #222; font-size: 0.8rem; font-weight: 600; margin:0;" class="m-0 p-0 col-12 text-center text-md-left">Available Quantity</p>
                  
                    <div class="row m-0 align-items-center">
                        <i class="fas fa-caret-left" style="cursor:pointer;font-size: 1.5rem;"></i>
                          <input class="form-control col-2 mx-3" type="text" name="quantity" value="0" max=""/>
                        <i class="fas fa-caret-right" style="cursor:pointer;font-size: 1.5rem;"></i>
                    </div>
                </div>
                <div class="row px-3 m-0 " style="">
                    <div class="col-12 p-0 m-0">
                        <div class="row m-0 align-items-center">
                             <p style="color: #222; font-size: 0.8rem; font-weight: 600; margin:0;" class="text-center text-md-left">{{$datasets['product']['rows']->subtitle}}</p>

                        </div>
                    </div>
                    <div class="col p-0">
                        <h2 style="text-transform:uppercase;font-weight: 700; color: #000;" class="m-0 text-center text-md-left">{{$datasets['product']['rows']->name}}</h2>
                    </div>
                </div>
                
                <div class="row m-0">
                            <p class="text-center text-md-left m-0 pl-3 variable-price">${{$datasets['price']['rows']}}</p>
                            <p class="text-center text-md-left m-0  selected-price pl-3 d-none">${{$datasets['price']['rows']}}</p>
                    <div class="col-5 ml-md-auto p-0 ">
                        <div class="row m-0 align-items-center">
                            <div class="rating-average" data-rate-value={{$datasets['product']['rows']->reviews()->avg('rating')}}>
                        </div>
                        <p style = "margin:0; top: -4px;position:relative;">({{$datasets['product']['rows']->reviews()->count()}})</p>
                    </div>
                </div>
               
                <div class="row m-0  w-100 px-3 mt-4 align-items-center justify-content-center justify-content-md-start">
                    <button class="btn btn-primary btn-lg text-white col-12 col-md-9">ADD TO CART</button>
                    <button class="btn btn-primary btn-lg ml-1 text-white d-none d-md-inline-block"><i class="fas fa-heart"></i></button>
                    
                </div>
                 <div class="row m-0 mt-5 px-3 pb-4">
                    
                    <p style="color: #000; font-size: .9rem;font-weight: 500; line-height: 1.8rem;">{{$datasets['product']['rows']->description}}</p>
                </div>
              
                
            </div>
        </div>
       
      
        
        <div class="row product-bottom  bg-black justify-content-center">
           <ul class="nav w-100 d-flex justify-content-between" id="pills-tab" role="tablist">
                <li class="nav-item col">
                    <a class="nav-link active text-white text-center" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Related Items</a>
                </li>
                <li class="nav-item col">
                    <a class="nav-link text-white text-center" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Shipping & Returns</a>
                </li>
                <li class="nav-item col">
                    <a class="nav-link text-white text-center" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews & Ratings</a>
                </li>
            </ul>
            <div class="tab-content mt-5 w-100  p-5" id="pills-tabContent">
                <div class="tab-pane fade show active bg-black text-center related-products" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row m-0 h-100 justify-content-center align-items-center mb-5">
                        <h5 class="text-white w-100 text-center">Check out some of our other products</h5>
                        <p style="font-size: 0.8rem;" class="text-white">popular related items.</p>
                    </div>
                    <div class="row m-0 w-100">
                        @foreach($datasets['categories']['rows']->where('id', $datasets['product']['rows']->categories()->first()->id)->first()->products()->get() as $product)

                        
                                 <a class="col-sm-12 col-md-3 p-1" href="/{{$product->slug}}">
                                    <div class="product">
                                        @if(!is_null($product->media()->first()))
                                        <img src="{{base64_decode($product->media()->first()->path)}}"/>
                                        @elseif(!is_null($product->variants()->where('default', true)->first()))
                                         <img src="{{base64_decode($product->variants()->where('default', true)->first()->media_id)}}"/>
                                        @endif
                                        <div class="row m-0 mt-2 justify-content-center thumbs w-100">
                                        @if($product->variants()->where('default', false)->count() > 0)
                                            @foreach($product->variants()->where('default', false)->get() as $v)
                                                <div class="col-3 p-0">
                                                    <img src="{{base64_decode($v->media_id)}}"/>
                                                </div>
                                            @endforeach
                                        @endif
                                        </div>
                                       
                                        <h6 class="m-0 mt-2 text-center">{{$product->name}}</h6>
                                        <p class="text-center">{{$product->keywords}}</p>
                                        <p class="text-center">${{$product->price}}</p>
                                    </div>
                                </a>
                                 
                                        
                            
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row m-0 justify-content-center">
                        <div class="col-6">
                            <h6 class="text-white">Free standard shipping and 30-day free returns, only with NikePlus. Learn more. Return policy exclusions apply.</h6>
                            <ul class="text-white">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit
                                    <ul>
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor sem</li>
                                    <li>Ac tristique libero volutpat at</li>
                                    </ul>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                                <li>Aenean sit amet erat nunc</li>
                                <li>Eget porttitor lorem</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                     @if($datasets['product']['rows']->reviews()->count() == 0)
                        <div class="row m-0 h-100 justify-content-center align-items-center mb-5">
                            <h5 class="text-white w-100 text-center">Be the first to write a review for this product</h5>
                            <a class="text-white border-bottom">Write a Review</a>
                        </div>
                    @else
                        <div class="row m-0 h-100 justify-content-center align-items-center mb-5">
                            <h5 class="text-white w-100 text-center">Let your voice be heard by writing a review</h5>
                            <a class="text-white border-bottom">Write a Review</a>
                        </div>
                    @endif
                    @if($datasets['product']['rows']->reviews()->count() > 0)
                        <div class="container">
                            <div class="row m-0">
                                @foreach ($datasets['product']['rows']->reviews()->get() as $review)
                                    <div class="review p-5 bg-white border col-12 col-md-4">
                                        <p><i class="fas fa-user-circle mr-1" style="font-size: 2rem;position:relative; top: 5px;"></i> {{$review->user_id}}</p>
                                        <div class="rating-inactive" data-rate-value={{$review->rating}} style="font-size: 1rem;"></div>
                                        <p style="font-size: 0.8rem; font-weight: 500;margin:1rem 0 0 0;">{{$review->title}}</p>
                                        <p class="m-0" style="font-size: 0.8rem;">{{$review->message}}</p>
                                       
                                        <p class="mt-2" style="font-size: 0.8rem;">{{$review->created_at}}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        <div>
        
    </section>
@endsection

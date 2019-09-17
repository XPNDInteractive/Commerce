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
     
        <div class="row m-0">
            <div class="col-sm-12 col-md-2 side p-3 pt-5">
                <div class="row m-0 sub-categories">
                    <h5 class="text-upper">{{$datasets['category']['rows']->name}}</h5>
                    <hr />
                   
                   <ul class="nav flex-column w-100">
                        @foreach($datasets['category']['rows']->children()->get() as $child)
                            <li class="nav-item">
                                <a class="nav-link active" href="{{$child->slug}}">{{$child->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="row m-0 sub-categories mt-5">
                    <h5 class="text-upper m-0">FILTERS</h5>
                     <form class="w-100" method = "post" action="/{{$datasets['category']['rows']->slug}}">
                    @foreach($datasets['category']['rows']->filters()->get() as $filter)
                        
                        <h6 class="w-100 m-0 mt-3 mb-3">{{strtoupper($filter->name)}}</h6>
                        @if($filter->name !== 'Colors' && $filter->name !== 'Sizes')
                            <ul class="nav flex-column w-100">
                                @foreach($filter->tags()->get() as $tag)
                                <li class="nav-item">
                                    <div class="custom-control custom-checkbox filter">
                                        <input name="{{$tag->name}}" type="checkbox" class="custom-control-input" id=" {{$tag->name}}" {{app('request')->input(str_replace(' ', '_', $tag->name)) == 'on'? 'checked':null}}>
                                        <label class="custom-control-label" for=" {{$tag->name}}"> {{$tag->name}}</label>
                                    </div>
                                    
                                </li>
                                @endforeach
                            
                            </ul>
                        @elseif($filter->name == 'Colors' )
                            <div class="row w-100 ml-0 colors">
                                 @foreach($filter->tags()->get() as $tag)
                                     <div class="custom-control custom-checkbox filter">
                                        <input name="{{$tag->name}}" type="checkbox" class="custom-control-input" id=" {{strtolower($tag->name)}}" {{app('request')->input(str_replace(' ', '_', $tag->name)) == 'on'? 'checked':null}}>
                                        <label class="bg-{{strtolower($tag->name)}} custom-control-label custom-control-label-color  " for=" {{strtolower($tag->name)}}"></label>
                                    </div>
                                 @endforeach
                               
                            </div>
                        @elseif($filter->name == 'Sizes' )
                            
                            <div class="row w-100 ml-0 sizes">
                                 @foreach($filter->tags()->get() as $tag)
                                    <div class="size filter mr-1 mb-1">{{$tag->name}}</div>
                                    <input class="sizes" type ="hidden" name="sizes" value=""/>
                                 @endforeach
                               
                            </div>
                        @endif
                        
                       <hr class="w-100 mt-3"/>
                    @endforeach
                    @csrf
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-md-10 p-5">
                
                   
                <div class="row m-0">
                    @if(!is_null($datasets['category']['rows']->products()->first()))
                        @foreach($datasets['category']['rows']->products()->get() as $product)

                        
                                 <a class="col-sm-12 col-md-3 p-0" href="/{{$product->slug}}">
                                    <div class="product">
                                        @if(!is_null($product->media()->first()))
                                        <img src="{{base64_decode($product->media()->first()->path)}}"/>
                                        @elseif(!is_null($product->variants()->where('default', true)->first()))
                                         <img src="{{base64_decode($product->variants()->where('default', true)->first()->media_id)}}"/>
                                        @endif
                                        <div class="row m-0 mt-2 justify-content-center thumbs">
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
                    @endif
                </div>
            </div>
        </div>
        
    </section>
@endsection

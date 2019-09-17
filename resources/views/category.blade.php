@extends('layouts.app')

@section('content')
    <section>
         <div class="bottom">
            <div class="container-fluid">

            </div>
        </div>

        <div class="row m-0">
            <div class="col-sm-12 col-md-2">

            </div>
            <div class="col-sm-12 col-md-10 p-5">
                <div class="row m-0 category-description">
                    <h5 class="text-upper">{{$category->name}}({{count($category->products()->get())}})</h5>
                    <p>Gear up for sport and style with the latest men's clothing. Nike technologies and fabrics like Tech Fleece and Dri-FIT combine performance and comfort so you can stay focused on the game.</p>
                </div>
                <div class="row m-0">

                    @foreach($category->products()->get() as $product)
                    <div class="col-sm-12 col-md-3 p-0">
                        <div class="product">
                            <img src="{{base64_decode($product->media()->first()->path)}}"/>
                            <div class="row thumbs">
                                @foreach($product->media()->get() as $media)
                                    <div class="col p-0">

                                        <img src="{{base64_decode($media->path)}}"/>
                                    </div>

                                @endforeach
                            </div>
                            <small>3 colors</small>
                            <h6>{{$product->name}}</h6>
                            <small>{{$product->description}}</small>
                            <p>${{$product->price}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

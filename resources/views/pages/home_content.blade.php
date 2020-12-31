@extends('layout')
@section('content')

<!--recommended_items-->
        <div class="recommended_items">
                        <h2 class="title text-center">recommended items</h2>
                        
                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">

                                <div class="item active">  

                                     @if(!empty($all_product))
                                    @foreach($all_product as $key=> $product)

                                    <!-- if({{$key%3}} ==0) -->
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{$product->product_image}}" width="250" height="150" alt="" />
                                                    <h2>{{$product->product_price}}</h2>
                                                    <p>{{$product->product_name}}</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- else
                                        <div class="item">  
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{$product->product_image}}" alt="" />
                                                    <h2>{{$product->product_price}}</h2>
                                                    <p>{{$product->product_name}}</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    endif
                                    -->
                                    @endforeach
                                    @endif
                                    
                                </div>
                                <div class="item">  
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{URL::to('frontend/images/home/recommend1.jpg')}}" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>          
                        </div>
                    </div>

                    <!--/recommended_items-->
<!-- Features Items -->

           <h2 class="title text-center">Features Items</h2>                                        
                @if(!empty($all_product))
                    @foreach($all_product as $product)
                        <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{URL::to($product->product_image)}}" width="200" height="200" alt="" />
                                                <h2>{{$product->product_price}}</h2>
                                                <p>{{$product->product_name}}</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <h2>{{$product->product_price}}</h2>
                                                    <p>{{$product->product_name}}</p>
                                                    <a href="{{URL::to('/view_product/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                            <li><a href="{{URL::to('/view_product/'.$product->product_id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>
                                        </ul>
                                    </div>
                                 </div>
                                  </div>

                                  <!-- Featured Items -->
                     @endforeach
                @endif

                    @endsection
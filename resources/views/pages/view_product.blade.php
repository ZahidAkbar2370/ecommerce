@extends('layout')
@section('content')
    

           <h2 class="title text-center">Features Items</h2>                                        
                @if(!empty($view_products))
                    @foreach($view_products as $products)
                        <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{URL::to($products->product_image)}}" width="350" height="300" alt="" />
                                                 
                                               <!--  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
                                            </div>
                                            
                                    </div>
                                 </div>
                                  </div>
                                   <form action="{{URL::to('/add-to-cart')}}" method="post">
                                    @csrf()
                                   <div class="col-sm-4">
                                    <h1></h1>
                                       <h4><span><b>Price:</b></span>{{$products->product_price}}</h4>
                                        <input type="hidden" name="product_price" value="{{$products->product_price}}">
                                        <p><span><b>Name:</b></span>{{$products->product_name}}</p>
                                        <input type="hidden" name="product_name" value="{{$products->product_name}}">
                                        <p><span><b>Category:</b></span>{{$products->category_id}}</p>
                                        <p><span><b>Manufacture:</b></span>{{$products->manufacture_id}}</p> 
                                        <p><span><b>Size:</b></span>{{$products->product_size}}</p>
                                        <p><span><b>Color:</b></span>{{$products->product_color}}</p>
                                   </div>
                                   <div class="col-sm-4">
                                   
                                        <input type="hidden" name="product_id" value="{{$products->product_id}}">
                                        <label style="font-size:20px;margin-top:70px">Quantity</label>
                                        <input type="number" name="product_quantity" value="1">
                                        <button type="submit" class="btn btn-default add-to-cart" style="margin-left:90px;color: black;margin-top:10px"><i class="fa fa-shopping-cart" ></i>Add to cart</button>
                                    
                                   </div>
                                   </form>
                     @endforeach
                @endif

                    @endsection
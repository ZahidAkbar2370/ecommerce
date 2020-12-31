@extends('layout')
@section('content')
<form action="{{URL::to('/out-cart')}}" method="post">
<section id="cart_items">
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td>Delete</td>
						</tr>
					</thead>
					<tbody>
						@if(!empty($all_carts))
						@foreach($all_carts as $carts)
						<tr>
							<td>
								<H4>{{$carts->add_to_cart_item}}</H4>
								<p>Web ID:{{$carts->add_cart_web_id}}</p>
								<input type="hidden" name="web_id" value="{{$carts->add_cart_web_id}}">
							</td>
							<td>{{$carts->add_to_cart_price}}</td>
							<td><input class="cart_quantity_input" type="text" name="quantity" value="{{$carts->add_to_cart_quantity}}" autocomplete="off" size="2" disabled></td>
							<td>{{$carts->add_to_cart_price}}</td>
							<td><a href="#" style="font-size:18px;margin-left:20px">X</a></td>
						</tr>
						@endforeach
						@endif
						<!-- <tr>
							<td class="cart_product">
								<a href=""><img src="slider1.jpg" alt="" width="50" height="50"></a>
							</td>
							<td class="cart_description">
								<h4><a href="#">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2" disabled>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i>Delete</a>
							</td>
						</tr> -->

						<!-- <tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/two.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2" disabled>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2" disabled>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i>Delete</a>
							</td>
						</tr> -->
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<!-- <div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div> -->
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span><p></p></span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<!-- <a class="btn btn-default update" href="">Update</a> -->
							
								@csrf()
							<button type="submit" class="btn btn-default check_out" href="">Check Out</button>
							
					</div>
				</div>
			</div>
		</div>
	</section>
	</form>
	<!--/#do_action-->

@endsection
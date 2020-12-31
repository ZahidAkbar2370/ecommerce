@extends('layout')
@section('content')
<!-- Cart_out_items -->

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cartout</li>
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
						@if(!empty($all_out_carts))
						@foreach($all_out_carts as $carts)
						<tr>
							<td>
								<H4>{{$carts->add_to_cart_item}}</H4>
								<p>Web ID:{{$carts->add_cart_web_id}}</p>
								<input type="hidden" name="web_id" value="120876">
							</td>
							<td>{{$carts->add_to_cart_price}}</td>
							<td><input class="cart_quantity_input" type="text" name="quantity" value="{{$carts->add_to_cart_quantity}}" autocomplete="off" size="2" disabled></td>
							<td>{{$carts->add_to_cart_price}}</td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</section> 

	<!--/#cart_out_items-->

@endsection
@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Manufacture</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Product Name</th>
								  <th>Product Category</th>
								  <th>Product Brand</th>
								  <th>Product Price</th>
								  <th>Product Size</th>
								  <th>Product Image</th>
								  <th>Product Color</th>
								  <th>Product Short Description</th>
								   <th>Product Login Description</th>
								  <th>Publication Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						 
								@if(!empty($all_products))
								@foreach($all_products as $key=> $product)
								 <tbody>
									<tr>
										<td>{{$product->product_id}}</td>
										<td class="center">{{$product->product_name}}</td>
										<td class="center">{{$product->category_id}}</td>
										<td class="center">{{$product->manufacture_id}}</td>
										<td class="center">{{$product->product_price}}></td>
										<td class="center">{{$product->product_size}}</td>
										<td class="center"><img src="{{$product->product_image}}" width="80px" height="80px"></td>
										
										<td class="center">{{$product->product_color}}</td>
										<td class="center">{{$product->product_short_description}}</td>
										<td class="center">{{$product->product_long_description}}</td>

										@if(($product->publication_status)=="1")
											<td class="center">
											<span class="label label-success">Active</span>
											</td>
										@else
											<td class="center">
											<span class="label label-danger">Unactive</span>
											</td>
										@endif

										<td class="center">
											@if(($product->publication_status)=="1")
											<a class="btn btn-danger" href="{{URL::to('/unactive_product/'.$product->product_id)}}">
												<i class="halflings-icon white thumbs-down"></i>  
											</a>
											@else
												<a class="btn btn-success" href="{{URL::to('/active_product/'.$product->product_id)}}">
												<i class="halflings-icon white thumbs-up"></i>  
											</a>
											@endif
											<a class="btn btn-info" href="{{URL::to('/edit-product/'.$product->product_id)}}">
												<i class="halflings-icon white edit"></i>  
											</a>
											<a class="btn btn-danger" href="delete-product/{{$product->product_id}}">
												<i class="halflings-icon white trash"></i> 
											</a>
										</td>
									</tr>
							
						  </tbody>
								@endforeach
								@endif
								
							
					  </table>            
					</div>
				</div>
			
			</div>

@endsection
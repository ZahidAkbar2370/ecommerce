@extends('admin_layout')
@section('admin_content')
	
	<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
		
						@if(!empty($selected_product))	
						@foreach($selected_product as $select_product)
						<form class="form-horizontal" action="{{URL::to('/update-product',$select_product->product_id)}}" method="post">
						  <fieldset>
							{{csrf_field()}}
							<div class="control-group">
							  <label class="control-label" for="date01">Product Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_name" value="{{$select_product->product_name}}" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Category Name</label>
							  <div class="controls">
								<!-- <input type="text" class="input-xlarge" name="category_name" required> -->
								<select name="category_name" value="{{$select_product->category_id}}" >
									<option>12</option>
									<option>13</option>
									<option>14</option>
								</select>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Brand Name</label>
							  <div class="controls">
								<!-- <input type="text" class="input-xlarge" name="manufactur_name" required> -->
								<select name="manufacture_name" value="{{$select_product->manufacture_id}}" >
									<option>Brand1</option>
									<option>Brand2</option>
									<option>Brand3</option>
								</select>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Product Price</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_price" value="{{$select_product->product_price}}"  required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Product Size</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_size" value="{{$select_product->product_size}}"  required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Product Color</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_color" value="{{$select_product->product_color}}" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Product Image</label>
							  <div class="controls">
								<input type="file" class="input-xlarge" name="product_image" value="{{$select_product->product_image}}">
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Short Description</label>
							  <div class="controls">
								<textarea  name="product_short_description" rows="3" value="" required>{{$select_product->product_short_description}}</textarea>
							  </div>
							</div>
          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product long Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="product_long_description" value=""  rows="3" required>{{$select_product->product_long_description}}</textarea>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1" required>
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update Product</button>
							</div>
						  </fieldset>
						</form>  
							@endforeach
							@endif
						  

					</div>
				</div>

			</div>

@endsection
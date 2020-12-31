@extends('admin_layout')
@section('admin_content')
	
	<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="{{URl::to('/add-product')}}">Add Product</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{URL::to('/save-product')}}" method="post">
						  <fieldset>
							{{csrf_field()}}
							<div class="control-group">
							  <label class="control-label" for="date01">Product Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_name" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Category Name</label>
							  <div class="controls">
								<!-- <input type="text" class="input-xlarge" name="category_name" required> -->
								<select name="category_name">
									<option>Select</option>
									@if(!empty($all_category))
									@foreach($all_category as $category)
									<option>{{$category->category_name}}</option>
									@endforeach
									@endif
								</select>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Brand Name</label>
							  <div class="controls">
								<select name="manufacture_name">
									<option>Select</option>
									@if(!empty($all_manufacture))
									@foreach($all_manufacture as $manufacture)
									<option>{{$manufacture->manufacture_name}}</option>
									@endforeach
									@endif
								</select>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Product Price</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_price" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Product Size</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_size" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Product Color</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_color" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Product Image</label>
							  <div class="controls">
								<input type="file" class="input-xlarge" name="product_image" required>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Short Description</label>
							  <div class="controls">
								<textarea  name="product_short_description" rows="3" required></textarea>
							  </div>
							</div>
          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product long Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="product_long_description" rows="3" required></textarea>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1" required>
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Product</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div>
				<!--/span-->

			</div>
			<!--/row-->

@endsection
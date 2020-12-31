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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Slider</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
		
						@if(!empty($selected_slider))	
						@foreach($selected_slider as $select_slider)
						<form class="form-horizontal" action="{{URL::to('/update-slider',$select_slider->slider_id)}}" method="post">
						  <fieldset>
							{{csrf_field()}}

							<div class="control-group">
							  <label class="control-label" for="date01">slider Name</label>
							  <div class="controls">
								<input type="file" class="input-xlarge" name="slider_image" value="{{$select_slider->slider_image}}" required>
							  </div>
							</div>
          

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update slider</button>
							</div>
							 </fieldset>
						</form>  
							@endforeach
							@endif
						  

					</div>
				</div>

			</div>

@endsection
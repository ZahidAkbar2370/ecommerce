@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Slider</h2>
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
								  <th>Slider Image</th>
								  <th>Publication Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						 
								@if(!empty($all_sliders))
								@foreach($all_sliders as $key=> $slider)
								 <tbody>
									<tr>
										<td>{{$slider->slider_id}}</td>
										<td class="center"><img src="{{$slider->slider_image}}"></td>

										@if(($slider->publication_status)=="1")
											<td class="center">
											<span class="label label-success">Active</span>
											</td>
										@else
											<td class="center">
											<span class="label label-danger">Unactive</span>
											</td>
										@endif

										<td class="center">
											@if(($slider->publication_status)=="1")
											<a class="btn btn-danger" href="{{URL::to('/unactive_slider/'.$slider->slider_id)}}">
												<i class="halflings-icon white thumbs-down"></i>  
											</a>
											@else
												<a class="btn btn-success" href="{{URL::to('/active_slider/'.$slider->slider_id)}}">
												<i class="halflings-icon white thumbs-up"></i>  
											</a>
											@endif
											<a class="btn btn-info" href="{{URL::to('/edit-slider/'.$slider->slider_id)}}">
												<i class="halflings-icon white edit"></i>  
											</a>
											<a class="btn btn-danger" href="delete-slider/{{$slider->slider_id}}">
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
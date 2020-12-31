@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Socail Media</h2>
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
								  <th>Mobile No</th>
								  <th>Email</th>
								  <th>Facebook</th>
								  <th>Google</th>
								  <th>Twitter</th>
								  <th>Linkedin</th>
								  <th>Website</th>
								  <th>Publication Status</th>
								  <th>Action</th>
							  </tr>
						  </thead>   
						 
								@if(!empty($all_socialmedia))
								@foreach($all_socialmedia as $key=> $socialmedia)
								 <tbody>
									<tr>
										<td>{{$socialmedia->socialmedia_id}}</td>
										<td class="center">{{$socialmedia->socialmedia_mobileno}}</td>
										<td class="center">{{$socialmedia->socialmedia_email}}</td>
										<td class="center"><a href="{{$socialmedia->socialmedia_facebook}}">facebook</a></td>
										<td><a href="{{$socialmedia->socialmedia_google}}">Google</a></td>
										<td class="center">{{$socialmedia->socialmedia_twitter}}</td>
										<td class="center">{{$socialmedia->socialmedia_linkedin}}</td>
										<td class="center">{{$socialmedia->socialmedia_other}}</td>

										@if(($socialmedia->publication_status)=="1")
											<td class="center">
											<span class="label label-success">Active</span>
											</td>
										@else
											<td class="center">
											<span class="label label-danger">Unactive</span>
											</td>
										@endif

										<td class="center">
											@if(($socialmedia->publication_status)=="1")
											<a class="btn btn-danger" href="{{URL::to('/unactive_socialmedia/'.$socialmedia->socialmedia_id)}}">
												<i class="halflings-icon white thumbs-down"></i>  
											</a>
											@else
												<a class="btn btn-success" href="{{URL::to('/active_socialmedia/'.$socialmedia->socialmedia_id)}}">
												<i class="halflings-icon white thumbs-up"></i>  
											</a>
											@endif
											<a class="btn btn-info" href="{{URL::to('/edit-socialmedia/'.$socialmedia->socialmedia_id)}}">
												<i class="halflings-icon white edit"></i>  
											</a>
											<a class="btn btn-danger" href="delete-socialmedia/{{$socialmedia->socialmedia_id}}">
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
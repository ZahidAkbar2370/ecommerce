@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Message</h2>
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
								  <th>Sender Name</th>
								  <th>Sender Email</th>
								  <th>Message</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						 
								@if(!empty($all_messages))
								@foreach($all_messages as $key=> $message)
								 <tbody>
									<tr>
										<td>{{$message->message_id}}</td>
										<td class="center">{{$message->sender_name}}</td>
										<td class="center">{{$message->sender_email}}</td>
										<td class="center">{{$message->message}}</td>
										<td><a class="btn btn-danger" href="delete-message/{{$message->message_id}}">
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
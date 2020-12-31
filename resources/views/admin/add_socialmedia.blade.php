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
					<a href="{{URl::to('/add-category')}}">Add Socail Media</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{URL::to('/save-socialmedia')}}" method="post">
						  <fieldset>
							{{csrf_field()}}
							<div class="control-group">
							  <label class="control-label" for="date01">Mobile No</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="socialmedia_mobileno" required>
							  </div>
							</div>
          
							<div class="control-group">
							  <label class="control-label" for="date01">Email Address</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="socialmedia_email" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Facebook Link</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="socialmedia_facebook" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Twitter Link</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="socialmedia_twitter" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Linkedin Link</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="socialmedia_linkedin" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Google Link</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="socialmedia_google" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Website Link</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="socialmedia_other" required>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1" required>
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Category</button>
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
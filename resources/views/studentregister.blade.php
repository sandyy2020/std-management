@extends('layout.default')

@section('content')
<h1>Registration Page</h1>

<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								
								<div class="x_content">
									<br />
									<form action="{{url('studentstore')}}" method="post" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data">
                                        @csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Student Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="sname" id="first-name" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Father's Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="fname" id="last-name"  required="required" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Class<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="class">
											</div>
										</div>
									
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Phone Num <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="birthday" name="phnum" class="date-picker form-control"  type="text" required="required"  >

											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Email <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="birthday" name="email" class="date-picker form-control"  type="text" required="required"  >

											</div>
										</div>

										<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align">Branch <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 "> 
											<select class="date-picker form-control branches" name="branchid" >
												<option>--Select Branch--</option>
												@foreach($branches as $branch)
												<option value="{{$branch->id}}">{{$branch->bfull}}</option>
												@endforeach
											</select>
										</div>
										</div>

										<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align">Course <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 "> 
											<select class="date-picker form-control courses" name="courseid" >
												<option>--Select Course--</option>
						
											</select>
										</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Image <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="image" name="image" class="date-picker form-control"  type="file" required="required"  >

											</div>
										</div>

										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" name="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>


@endsection

@push('footer-scripts')
<script type="text/javascript">
	$(document).on('change','.branches',function(){
		branchid=$(this).val();
	$.ajax({
		url: 'student/courses',
		datatype: "json",
		data: {"id":branchid,"_token": "{{csrf_token() }}"},
		method:"post",
		success: function(data){
			//console.log(data);
			var courses='<option>--Select Course--</option>';
			var arr= data.courses.length;
			var aa= data.courses;
			for(var i=0;i<arr;i++){
				courses += '<option value="'+ aa[i].id +'">'+aa[i].cname+'</option>';
			}
			$(".courses").html(courses);
		}
		
	});
	});
</script>
@endpush 
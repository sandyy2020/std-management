@extends('layout.default')

@section('content')
<h1>Student Update</h1>

<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								
								<div class="x_content">
									<br />
									<form action="{{url('studentupdate',[$students->id])}}" method="post" id="demo-form2" class="form-horizontal form-label-left">
                                        @csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Student Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="sname" id="first-name" value="{{$students->sname}}" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Father's Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="fname" id="last-name" value="{{$students->fname}}"  required="required" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Class</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" value="{{$students->class}}" type="text" name="class"  required="required">
											</div>
										</div>
									
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Phone Num <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="birthday" name="phnum" class="date-picker form-control"  type="text" value="{{$students->phnum}}" required="required"  >

											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Email <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="birthday" name="email" class="date-picker form-control"  type="text" value="{{$students->email}}" required="required"  >

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